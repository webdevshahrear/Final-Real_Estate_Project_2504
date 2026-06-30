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
    .property-card {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    }
</style>

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="property-card p-4 p-md-5">
                <header class="mb-4">
                    <h2 class="h4 fw-bold mb-1">Add New Property</h2>
                    <p class="text-muted small">Add a new property for rent or sale.</p>
                </header>

                <form action="{{ route('admin.properties.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-4">

                        <div class="col-md-8">
                            <label for="title" class="form-label">Property Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                id="title" name="title" value="{{ old('title') }}" placeholder="e.g. Luxury Apartment in Gulshan">
                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="type" class="form-label">Listing Type</label>
                            <select class="form-select @error('type') is-invalid @enderror" id="type" name="type">
                                <option selected disabled>Select Type</option>
                                <option value="rent" {{ old('type') == 'rent' ? 'selected' : '' }}>For Rent</option>
                                <option value="buy" {{ old('type') == 'buy' ? 'selected' : '' }}>For Sale</option>
                            </select>
                            @error('type')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control @error('location') is-invalid @enderror"
                                id="location" name="location" value="{{ old('location') }}" placeholder="e.g. Gulshan, Dhaka">
                            @error('location')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-3">
                            <label for="price" class="form-label">Price</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror"
                                    id="price" name="price" value="{{ old('price') }}">
                            </div>
                            @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-3">
                            <label for="size" class="form-label">Size (Sq Ft)</label>
                            <input type="text" class="form-control @error('size') is-invalid @enderror"
                                id="size" name="size" value="{{ old('size') }}" placeholder="e.g. 1200">
                            @error('size')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select @error('status') is-invalid @enderror" id="status" name="status">
                                <option value="available" {{ old('status') == 'available' ? 'selected' : '' }}>Available</option>
                                <option value="sold" {{ old('status') == 'sold' ? 'selected' : '' }}>Sold</option>
                                <option value="rented" {{ old('status') == 'rented' ? 'selected' : '' }}>Rented</option>
                            </select>
                            @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <label for="images" class="form-label">Images <span class="text-muted small">(Multiple select allowed)</span></label>
                            <input type="file" class="form-control @error('images') is-invalid @enderror"
                                id="images" name="images[]" accept="image/*" multiple>
                            @error('images')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror"
                                id="description" name="description" rows="4"
                                placeholder="Describe the property...">{{ old('description') }}</textarea>
                            @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 d-flex justify-content-end gap-3">
                            <button type="reset" class="btn btn-link text-decoration-none text-muted">Clear Form</button>
                            <button type="submit" class="btn btn-primary px-4">Add Property</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection