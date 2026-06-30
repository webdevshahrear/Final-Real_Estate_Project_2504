<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function index()
    {
        $customers = Customer::where('user_id', auth()->id())->latest()->get();
        return view('backend.admin.customers.index', compact('customers'));
    }

    function create()
    {
        return view('backend.admin.customers.create');
    }

    function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'email' => 'required|email|unique:customers,email',
            'phone' => 'required',
        ]);

        $photo = null;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('customers', 'public');
        }

        Customer::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'phone'   => $request->phone,
            'address' => $request->address,
            'nid'     => $request->nid,
            'photo'   => $photo,
            'status'  => 'pending',
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('admin.customers.index')->with('success', 'Customer created successfully!');
    }

    function edit($id)
    {
        $customer = Customer::findOrFail($id);

        if ($customer->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        return view('backend.admin.customers.edit', compact('customer'));
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'name'  => 'required',
            'email' => 'required|email|unique:customers,email,' . $id,
            'phone' => 'required',
        ]);

        $customer = Customer::findOrFail($id);

        if ($customer->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $photo = $customer->photo;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('customers', 'public');
        }

        $customer->update([
            'name'    => $request->name,
            'email'   => $request->email,
            'phone'   => $request->phone,
            'address' => $request->address,
            'nid'     => $request->nid,
            'photo'   => $photo,
        ]);

        return redirect()->route('admin.customers.index')->with('success', 'Customer updated successfully!');
    }

    function verify($id)
    {
        $customer = Customer::findOrFail($id);

        if ($customer->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $customer->update(['status' => 'verified']);
        return redirect()->route('admin.customers.index')->with('success', 'Customer verified successfully!');
    }

    function reject($id)
    {
        $customer = Customer::findOrFail($id);

        if ($customer->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $customer->update(['status' => 'rejected']);
        return redirect()->route('admin.customers.index')->with('success', 'Customer rejected!');
    }

    function delete($id)
    {
        $customer = Customer::findOrFail($id);

        if ($customer->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $customer->delete();
        return redirect()->route('admin.customers.index')->with('success', 'Customer deleted successfully!');
    }
}