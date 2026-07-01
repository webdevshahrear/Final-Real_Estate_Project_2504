<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TenantController extends Controller
{
    public function dashboard()
    {
        $tennant = Auth::guard('tenant')->user();
        $payments = Payment::where('tenant_id', $tennant->id)->latest()->get();
        return view('frontend.tenants.index', compact('payments'));
    }
}