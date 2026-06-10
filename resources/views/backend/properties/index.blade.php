@extends('layouts.backend')
@section('content')

<div class="row g-4 mb-5" data-aos="fade-up">
    <div class="col-lg-12">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div>
                <h2 class="h3 fw-bold text-primary-navy mb-0">Properties</h2>
            </div>
            <a href="{{ route('admin.properties.create') }}" class="btn btn-primary px-4 rounded-pill shadow-sm">
                <i class="bi bi-plus-lg me-2"></i>Add new Property
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
                            <th>Title</th>
                            <th>Type</th>
                            <th>Location</th>
                            <th>Price</th>
                            <th>Bedrooms</th>
                            <th>Bathrooms</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($properties as $property)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $property->title }}</td>
                            <td>
                                @if($property->type == 'rent')
                                <span class="badge bg-primary">Rent</span>
                                @else
                                <span class="badge bg-success">Buy</span>
                                @endif
                            </td>
                            <td>{{ $property->location }}</td>
                            <td>${{ number_format($property->price, 2) }}</td>
                            <td>{{ $property->bedrooms ?? 'N/A' }}</td>
                            <td>{{ $property->bathrooms ?? 'N/A' }}</td>
                            <td>
                                @if($property->status == 'available')
                                <span class="badge bg-success">Available</span>
                                @elseif($property->status == 'sold')
                                <span class="badge bg-danger">Sold</span>
                                @else
                                <span class="badge bg-warning text-dark">Rented</span>
                                @endif
                            </td>
                            <td class="d-flex gap-1">
                                <a href="{{ route('admin.properties.edit', $property->id) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <form action="{{ route('admin.properties.delete', $property->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
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
                            <td colspan="9" class="text-center text-muted py-4">No properties found. Add your first property!</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection