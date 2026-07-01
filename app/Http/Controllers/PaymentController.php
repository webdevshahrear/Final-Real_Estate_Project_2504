<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Tennant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    // Tenant sends a payment request
    public function request(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
        ]);

        $tennant = Auth::guard('tenant')->user();

        Payment::create([
            'tenant_id' => $tennant->id,
            'amount'    => $request->amount,
            'status'    => 'pending',
        ]);

        return back()->with('success', 'Payment request sent to admin!');
    }

    // Admin views all payment requests
    public function adminIndex()
    {
        $payments = Payment::with('tennant')->latest()->get();
        return view('backend.payments.index', compact('payments'));
    }

    // Admin approves a payment request
    public function approve($id)
    {
        $payment = Payment::findOrFail($id);
        $payment->update([
            'status'      => 'approved',
            'approved_at' => now(),
        ]);
        return back()->with('success', 'Payment approved!');
    }

    // Admin rejects a payment request
    public function reject($id)
    {
        $payment = Payment::findOrFail($id);
        $payment->update(['status' => 'rejected']);
        return back()->with('success', 'Payment rejected!');
    }

    // Tenant pays (Pay button only shows when status is approved)
    public function pay($id)
    {
        $tennant = Auth::guard('tenant')->user();
        $payment = Payment::where('id', $id)
            ->where('tenant_id', $tennant->id)
            ->where('status', 'approved')
            ->firstOrFail();

        $payment->update(['status' => 'paid']);
        return back()->with('success', 'Payment successful!');
    }
}