@extends('layouts.backend')
@section('content')

<div class="row g-4 mb-5" data-aos="fade-up">
    <div class="col-lg-12">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div>
                <h2 class="h3 fw-bold text-primary-navy mb-0">Customers</h2>
            </div>
            <a href="{{ route('admin.customers.create') }}" class="btn btn-primary px-4 rounded-pill shadow-sm">
                <i class="bi bi-plus-lg me-2"></i>Add new Customer
            </a>
        </div>

        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show rounded-4" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        <div class="bg-white border rounded-4 shadow-sm p-4 mt-4">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>NID</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($customers as $customer)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td>{{ $customer->nid ?? 'N/A' }}</td>
                            <td>
                                @if($customer->status == 'verified')
                                <span class="badge bg-success">Verified</span>
                                @elseif($customer->status == 'rejected')
                                <span class="badge bg-danger">Rejected</span>
                                @else
                                <span class="badge bg-warning text-dark">Pending</span>
                                @endif
                            </td>
                            <td class="d-flex gap-1 flex-wrap">
                                <a href="{{ route('admin.customers.edit', $customer->id) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                @if($customer->status != 'verified')
                                <a href="{{ route('admin.customers.verify', $customer->id) }}" class="btn btn-sm btn-outline-success">
                                    <i class="bi bi-check-circle"></i> Verify
                                </a>
                                @endif
                                @if($customer->status != 'rejected')
                                <a href="{{ route('admin.customers.reject', $customer->id) }}" class="btn btn-sm btn-outline-warning">
                                    <i class="bi bi-x-circle"></i> Reject
                                </a>
                                @endif
                                <form action="{{ route('admin.customers.delete', $customer->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted py-4">No customers found. Add your first customer!</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection