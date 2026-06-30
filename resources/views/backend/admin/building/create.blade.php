@extends('layouts.backend')

@section('content')
<style>
    /* Ensure error text matches your corporate palette */
    .invalid-feedback {
        color: var(--danger-red);
        font-size: 0.85rem;
        margin-top: 0.25rem;
    }

    .is-invalid {
        border-color: var(--danger-red) !important;
    }
</style>

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="building-card p-4 p-md-5">
                <header class="mb-4">
                    <h2 class="h4 fw-bold mb-1">Building Registration</h2>
                    <p class="text-muted small">Complete the information below to add a new asset to the registry.</p>
                </header>

                <form action="{{ route('admin.building.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Building Identity</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ old('name') }}" placeholder="Official Building Name">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-3">
                            <label for="building_type" class="form-label">Classification</label>
                            <select class="form-select @error('building_type') is-invalid @enderror" id="building_type"
                                name="building_type">
                                <option selected disabled>Choose Type</option>
                                @foreach(['Commercial', 'Residential', 'Industrial'] as $type)
                                <option value="{{ $type }}" {{ old('building_type')==$type ? 'selected' : '' }}>{{ $type
                                    }}</option>
                                @endforeach
                            </select>
                            @error('building_type')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-3">
                            <label for="total_floors" class="form-label">Storeys</label>
                            <input type="number" class="form-control @error('total_floors') is-invalid @enderror"
                                id="total_floors" name="total_floors" value="{{ old('total_floors') }}"
                                placeholder="Total Floors">
                            @error('total_floors')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-8">
                            <label for="address" class="form-label">Street Address</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                                name="address" value="{{ old('address') }}">
                            @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="city" class="form-label">City/District</label>
                            <input type="text" class="form-control @error('city') is-invalid @enderror" id="city"
                                name="city" value="{{ old('city') }}">
                            @error('city')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <label for="amenities" class="form-label">Facilities & Amenities</label>
                            <textarea class="form-control @error('amenities') is-invalid @enderror" id="amenities"
                                name="amenities" rows="3"
                                placeholder="List key features">{{ old('amenities') }}</textarea>
                            @error('amenities')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <label class="form-label">Architectural Media</label>
                            <div class="image-upload-wrapper @error('images*') border-danger @enderror">
                                <input type="file" class="form-control d-none" id="images" name="images[]" multiple
                                    accept="image/jpeg,image/png,image/webp">
                                <label for="images" class="btn btn-outline-primary mb-2">Browse Files</label>
                                <p class="small text-muted mb-0">Accepted: JPG, PNG, WEBP (Max 2MB each)</p>

                                @if($errors->has('images.*'))
                                <div class="text-danger small mt-2">
                                    {{ $errors->first('images.*') }}
                                </div>
                                @endif

                                <div id="imagePreview" class="d-flex flex-wrap gap-2 mt-3 justify-content-center"></div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="status" class="form-label">Operational Status</label>
                            <select class="form-select @error('status') is-invalid @enderror" id="status" name="status">
                                <option value="1" {{ old('status')=='1' ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('status')=='0' ? 'selected' : '' }}>Under Maintenance</option>
                            </select>
                            @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-8 d-flex align-items-end justify-content-end gap-3">
                            <button type="reset" class="btn btn-link text-decoration-none text-muted">Discard</button>
                            <button type="submit" class="btn btn-primary">Register Asset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection