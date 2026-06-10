@extends('layouts.backend')
@section('content')

<!-- Filters & Building Selector -->
<div class="row g-4 mb-5" data-aos="fade-up">
    <div class="col-lg-12">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div>
                <h2 class="h3 fw-bold text-primary-navy mb-0">Units</h2>
            </div>
            <a href="{{ route('admin.units.create') }}" class="btn btn-primary px-4 rounded-pill shadow-sm">
                <i class="bi bi-plus-lg me-2"></i>Add new Unit
            </a>
        </div>

        <div class="bg-white border rounded-4 shadow-sm p-4">
            <div class="d-flex flex-wrap gap-3 align-items-center justify-content-between">
                <div class="d-flex gap-2">
                    <select class="form-select border-0 shadow-sm rounded-4 px-4" style="width: 220px;">
                        <option>All Buildings</option>
                    </select>
                    <select class="form-select border-0 shadow-sm rounded-4 px-4" style="width: 150px;">
                        <option>All Floors</option>
                    </select>
                </div>
                <div class="d-flex gap-2">
                    <div class="input-group shadow-sm rounded-4 overflow-hidden" style="width: 300px;">
                        <span class="input-group-text bg-white border-0"><i class="bi bi-search"></i></span>
                        <input type="text" class="form-control border-0 px-2" placeholder="Search Unit # or Tenant...">
                    </div>
                </div>
            </div>
        </div>

        {{-- Success Message --}}
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show rounded-4 mt-3" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        {{-- Units List Table --}}
        <div class="bg-white border rounded-4 shadow-sm p-4 mt-4">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Unit No</th>
                            <th>Building</th>
                            <th>Floor</th>
                            <th>Type</th>
                            <th>Size</th>
                            <th>Rent</th>
                            <th>Deposit</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($units as $unit)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $unit->unit_num ?? 'N/A' }}</td>
                            <td>{{ $unit->building->name ?? 'N/A' }}</td>
                            <td>{{ $unit->floor }}</td>
                            <td>{{ $unit->unit_type ?? 'N/A' }}</td>
                            <td>{{ $unit->sq_size ?? 'N/A' }}</td>
                            <td>${{ number_format($unit->amount, 2) }}</td>
                            <td>${{ number_format($unit->security_deposit, 2) }}</td>
                            <td>
                                @if($unit->status)
                                <span class="badge bg-success">Available</span>
                                @else
                                <span class="badge bg-danger">Occupied</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.units.edit', $unit->id) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <form action="{{ route('admin.units.delete', $unit->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
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
                            <td colspan="10" class="text-center text-muted py-4">No units found. Add your first unit!</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection