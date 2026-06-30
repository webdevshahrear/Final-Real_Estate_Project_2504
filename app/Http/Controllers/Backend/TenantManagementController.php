<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\RentPayment;
use App\Models\Tennant;
use App\Models\Unit;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TenantManagementController extends Controller
{
    /**
     * List all tenants (pending + approved + rejected)
     */
    public function index()
    {
        $pendingTenants  = Tennant::where('status', 'pending')->latest()->get();
        $approvedTenants = Tennant::where('status', 'approved')->with('unit.building')->latest()->get();
        $rejectedTenants = Tennant::where('status', 'rejected')->latest()->get();

        // Available units (status = 1 means available)
        $availableUnits = Unit::with('building')->where('status', 1)->get();

        return view('backend.admin.tenants.index', compact(
            'pendingTenants', 'approvedTenants', 'rejectedTenants', 'availableUnits'
        ));
    }

    /**
     * Approve a tenant — assign unit + generate first bill for NEXT month
     */
    public function approve(Request $request, $id)
    {
        $request->validate([
            'unit_id' => 'required|exists:units,id',
        ]);

        $tennant = Tennant::findOrFail($id);
        $unit    = Unit::findOrFail($request->unit_id);

        // Mark tenant as approved and assign unit
        $tennant->update([
            'status'  => 'approved',
            'unit_id' => $unit->id,
        ]);

        // Generate first monthly bill — starts NEXT month
        $nextMonth = Carbon::now()->addMonth()->startOfMonth();
        $dueDate   = $nextMonth->copy()->addDays(20); // due on 20th of next month

        RentPayment::firstOrCreate(
            [
                'tennant_id' => $tennant->id,
                'bill_month' => $nextMonth->format('Y-m'),
            ],
            [
                'unit_id'       => $unit->id,
                'due_date'      => $dueDate,
                'rent_amount'   => $unit->amount,
                'service_charge'=> $unit->service_charge ?? 0,
                'utility_charge'=> 0,
                'total_amount'  => ($unit->amount) + ($unit->service_charge ?? 0),
                'status'        => 'unpaid',
            ]
        );

        return back()->with('success', "Tenant \"{$tennant->name}\" approved and assigned to {$unit->building->name}!");
    }

    /**
     * Reject a tenant
     */
    public function reject($id)
    {
        $tennant = Tennant::findOrFail($id);
        $tennant->update(['status' => 'rejected']);

        return back()->with('success', "Tenant \"{$tennant->name}\" has been rejected.");
    }

    /**
     * Generate next month's bill for all approved tenants
     * (Can be called from admin panel manually)
     */
    public function generateMonthlyBills()
    {
        $nextMonth    = Carbon::now()->addMonth()->startOfMonth();
        $billMonthStr = $nextMonth->format('Y-m');
        $dueDate      = $nextMonth->copy()->addDays(20);
        $generated    = 0;

        $approvedTenants = Tennant::where('status', 'approved')->with('unit')->get();

        foreach ($approvedTenants as $tennant) {
            if (!$tennant->unit) continue;

            $already = RentPayment::where('tennant_id', $tennant->id)
                                  ->where('bill_month', $billMonthStr)
                                  ->exists();

            if (!$already) {
                RentPayment::create([
                    'tennant_id'    => $tennant->id,
                    'unit_id'       => $tennant->unit->id,
                    'bill_month'    => $billMonthStr,
                    'due_date'      => $dueDate,
                    'rent_amount'   => $tennant->unit->amount,
                    'service_charge'=> $tennant->unit->service_charge ?? 0,
                    'utility_charge'=> 0,
                    'total_amount'  => $tennant->unit->amount + ($tennant->unit->service_charge ?? 0),
                    'status'        => 'unpaid',
                ]);
                $generated++;
            }
        }

        return back()->with('success', "Generated {$generated} new bills for {$nextMonth->format('F Y')}.");
    }
}
