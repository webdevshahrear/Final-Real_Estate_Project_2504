<?php

namespace App\Http\Controllers;

use App\Models\RentPayment;
use App\Models\Tennant;
use App\Models\Unit;
use App\Models\ViewingRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TennantController extends Controller
{
    // ══════════════════════════════════════════
    //  SCHEDULE VIEWING — save + redirect signup
    // ══════════════════════════════════════════
    public function scheduleViewing(Request $request)
    {
        $request->validate([
            'name'                  => 'required|string|max:255',
            'phone'                 => 'required|string|max:20',
            'preferred_move_in_date'=> 'nullable|date',
            'unit_id'               => 'nullable|exists:units,id',
        ]);

        // Save viewing request to DB
        ViewingRequest::create([
            'unit_id'               => $request->unit_id,
            'name'                  => $request->name,
            'phone'                 => $request->phone,
            'preferred_move_in_date'=> $request->preferred_move_in_date,
            'status'                => 'pending',
        ]);

        // Flash data to sign-up form (pre-fill)
        session()->flash('viewing_name',  $request->name);
        session()->flash('viewing_phone', $request->phone);
        session()->flash('viewing_unit_id', $request->unit_id);

        return redirect()->route('tenant.register')
                         ->with('success', 'Viewing booked! Please create your account to confirm.');
    }

    // ══════════════════════════════════════════
    //  REGISTER — show & store
    // ══════════════════════════════════════════
    public function showRegister()
    {
        // If already logged in as tenant, go to dashboard
        if (Auth::guard('tennant')->check()) {
            return redirect()->route('admin.dashboard.tenant');
        }
        return view('auth.user.signUp');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'phone'    => 'nullable|string|max:20',
            'email'    => 'required|email|unique:tennants,email',
            'password' => 'required|min:6|confirmed',
            'unit_id'  => 'nullable|exists:units,id',
        ]);

        $tennant = Tennant::create([
            'name'     => $request->name,
            'phone'    => $request->phone,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'unit_id'  => $request->unit_id,
            'status'   => 'pending',
        ]);

        // Link the viewing request to this new tenant (if exists)
        if ($request->unit_id) {
            ViewingRequest::where('unit_id', $request->unit_id)
                          ->where('phone', $request->phone)
                          ->whereNull('tennant_id')
                          ->update(['tennant_id' => $tennant->id]);
        }

        return redirect()->route('tenant.login')
                         ->with('success', 'Account created! Please sign in.');
    }

    // ══════════════════════════════════════════
    //  LOGIN — show & authenticate
    // ══════════════════════════════════════════
    public function showLogin()
    {
        if (Auth::guard('tennant')->check()) {
            return redirect()->route('admin.dashboard.tenant');
        }
        return view('auth.user.signIn');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('tennant')->attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard.tenant');
        }

        return back()->withErrors([
            'email' => 'Invalid email or password.',
        ])->onlyInput('email');
    }

    // ══════════════════════════════════════════
    //  LOGOUT
    // ══════════════════════════════════════════
    public function logout(Request $request)
    {
        Auth::guard('tennant')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('tenant.login')
                         ->with('success', 'Logged out successfully.');
    }

    // ══════════════════════════════════════════
    //  DASHBOARD
    // ══════════════════════════════════════════
    public function dashboard()
    {
        $tennant = Auth::guard('tennant')->user();

        // Load unit and payment history
        $tennant->load('unit.building');

        // Payment history (latest 6)
        $payments = RentPayment::where('tennant_id', $tennant->id)
                               ->orderByDesc('bill_month')
                               ->take(6)
                               ->get();

        // Current unpaid bill
        $currentBill = RentPayment::where('tennant_id', $tennant->id)
                                  ->where('status', 'unpaid')
                                  ->orderBy('due_date')
                                  ->first();

        return view('backend.tenant.dashboard.index', compact(
            'tennant', 'payments', 'currentBill'
        ));
    }

    // ══════════════════════════════════════════
    //  PAY NOW (mark bill as paid — UI only)
    // ══════════════════════════════════════════
    public function payNow(Request $request, $billId)
    {
        $tennant = Auth::guard('tennant')->user();

        $bill = RentPayment::where('id', $billId)
                           ->where('tennant_id', $tennant->id)
                           ->where('status', 'unpaid')
                           ->firstOrFail();

        $bill->update([
            'status'         => 'paid',
            'paid_at'        => now(),
            'payment_method' => 'bKash', // placeholder
            'transaction_id' => 'TXN-' . strtoupper(uniqid()),
        ]);

        return back()->with('pay_success', 'Payment marked as successful!');
    }
}
