@extends('layouts.backend')

@section('content')
<style>
    .invalid-feedback {
        color: var(--danger-red);
        font-size: 0.85rem;
        margin-top: 0.25rem;
    }
    .is-invalid {
        border-color: var(--danger-red) !important;
    }
    .customer-card {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    }
</style>

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="customer-card p-4 p-md-5">
                <header class="mb-4">
                    <h2 class="h4 fw-bold mb-1">Customer Registration</h2>
                    <p class="text-muted small">Add a new customer to the system.</p>
                </header>

                <form action="{{ route('admin.customers.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-4">

                        <div class="col-md-6">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                id="name" name="name" value="{{ old('name') }}" placeholder="Enter full name">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" name="email" value="{{ old('email') }}" placeholder="Enter email">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                id="phone" name="phone" value="{{ old('phone') }}" placeholder="Enter phone number">
                            @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="nid" class="form-label">NID Number</label>
                            <input type="text" class="form-control @error('nid') is-invalid @enderror"
                                id="nid" name="nid" value="{{ old('nid') }}" placeholder="Enter NID number">
                            @error('nid')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control @error('address') is-invalid @enderror"
                                id="address" name="address" rows="3" placeholder="Enter address">{{ old('address') }}</textarea>
                            @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="photo" class="form-label">Photo</label>
                            <input type="file" class="form-control @error('photo') is-invalid @enderror"
                                id="photo" name="photo" accept="image/*">
                            @error('photo')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 d-flex align-items-end justify-content-end gap-3">
                            <button type="reset" class="btn btn-link text-decoration-none text-muted">Clear Form</button>
                            <button type="submit" class="btn btn-primary px-4">Add Customer</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection