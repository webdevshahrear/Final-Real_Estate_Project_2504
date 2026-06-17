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

    .unit-card {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    }

    .pref-label {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        cursor: pointer;
        font-size: 0.9rem;
        padding: 0.4rem 0;
    }

    .section-divider {
        border-top: 2px dashed #e5e7eb;
        margin: 1rem 0;
    }
</style>

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="unit-card p-4 p-md-5">
                <header class="mb-4">
                    <h2 class="h4 fw-bold mb-1">Unit Registration</h2>
                    <p class="text-muted small">Define a new unit and assign it to a registered building.</p>
                </header>

                <form action="{{ route('admin.units.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-4">

                        {{-- ══ BASIC INFO ══ --}}
                        <div class="col-12">
                            <p class="fw-semibold text-muted mb-0"
                                style="font-size:0.78rem;text-transform:uppercase;letter-spacing:.08em;">Basic
                                Information</p>
                            <div class="section-divider"></div>
                        </div>

                        {{-- Building Assignment --}}
                        <div class="col-md-6">
                            <label for="building_id" class="form-label">Parent Building <span
                                    class="text-danger">*</span></label>
                            <select class="form-select @error('building_id') is-invalid @enderror" id="building_id"
                                name="building_id">
                                <option selected disabled>Select Building</option>
                                @foreach($buildings as $building)
                                <option value="{{ $building->id }}" {{ old('building_id')==$building->id ? 'selected' :
                                    '' }}>
                                    {{ $building->name }}
                                </option>
                                @endforeach
                            </select>
                            @error('building_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Floor Level --}}
                        <div class="col-md-3">
                            <label for="floor" class="form-label">Floor Level <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('floor') is-invalid @enderror" id="floor"
                                name="floor" value="{{ old('floor') }}" placeholder="e.g. 4th Floor">
                            @error('floor')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Unit Number --}}
                        <div class="col-md-3">
                            <label for="unit_num" class="form-label">Unit Number</label>
                            <input type="text" class="form-control @error('unit_num') is-invalid @enderror"
                                id="unit_num" name="unit_num" value="{{ old('unit_num') }}" placeholder="e.g. A-402">
                            @error('unit_num')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- ══ SPECS ══ --}}
                        <div class="col-12">
                            <p class="fw-semibold text-muted mb-0"
                                style="font-size:0.78rem;text-transform:uppercase;letter-spacing:.08em;">Unit Specs</p>
                            <div class="section-divider"></div>
                        </div>

                        {{-- Bedrooms --}}
                        <div class="col-md-2">
                            <label for="bedrooms" class="form-label">Bedrooms <span class="text-danger">*</span></label>
                            <select class="form-select @error('bedrooms') is-invalid @enderror" id="bedrooms"
                                name="bedrooms">
                                @foreach([1,2,3,4,5] as $b)
                                <option value="{{ $b }}" {{ old('bedrooms', 1)==$b ? 'selected' : '' }}>{{ $b }} BHK
                                </option>
                                @endforeach
                            </select>
                            @error('bedrooms')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Size --}}
                        <div class="col-md-2">
                            <label for="sq_size" class="form-label">Size (Sq Ft)</label>
                            <input type="text" class="form-control @error('sq_size') is-invalid @enderror" id="sq_size"
                                name="sq_size" value="{{ old('sq_size') }}" placeholder="e.g. 1200">
                            @error('sq_size')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Unit Type --}}
                        <div class="col-md-2">
                            <label for="unit_type" class="form-label">Unit Type</label>
                            <input type="text" class="form-control @error('unit_type') is-invalid @enderror"
                                id="unit_type" name="unit_type" value="{{ old('unit_type') }}"
                                placeholder="e.g. Apartment">
                            @error('unit_type')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- ══ FINANCIALS ══ --}}
                        <div class="col-12">
                            <p class="fw-semibold text-muted mb-0"
                                style="font-size:0.78rem;text-transform:uppercase;letter-spacing:.08em;">Financial
                                Details</p>
                            <div class="section-divider"></div>
                        </div>

                        {{-- Monthly Rent --}}
                        <div class="col-md-4">
                            <label for="amount" class="form-label">Monthly Rent <span
                                    class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text">৳</span>
                                <input type="number" step="0.01"
                                    class="form-control @error('amount') is-invalid @enderror" id="amount" name="amount"
                                    value="{{ old('amount', 0) }}">
                            </div>
                            @error('amount')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Security Deposit --}}
                        <div class="col-md-4">
                            <label for="security_deposit" class="form-label">Security Deposit</label>
                            <div class="input-group">
                                <span class="input-group-text">৳</span>
                                <input type="number" step="0.01"
                                    class="form-control @error('security_deposit') is-invalid @enderror"
                                    id="security_deposit" name="security_deposit"
                                    value="{{ old('security_deposit', 0) }}">
                            </div>
                            @error('security_deposit')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- ══ AVAILABILITY ══ --}}
                        <div class="col-12">
                            <p class="fw-semibold text-muted mb-0"
                                style="font-size:0.78rem;text-transform:uppercase;letter-spacing:.08em;">Availability
                            </p>
                            <div class="section-divider"></div>
                        </div>

                        {{-- Leasing Status --}}
                        <div class="col-md-3">
                            <label for="status" class="form-label">Leasing Status</label>
                            <select class="form-select @error('status') is-invalid @enderror" id="status" name="status">
                                <option value="1" {{ old('status', '1' )=='1' ? 'selected' : '' }}>Available</option>
                                <option value="0" {{ old('status')=='0' ? 'selected' : '' }}>Occupied / Unavailable
                                </option>
                            </select>
                            @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Available From Date --}}
                        <div class="col-md-3">
                            <label for="available_from" class="form-label">Available From <small
                                    class="text-muted">(optional)</small></label>
                            <input type="date" class="form-control @error('available_from') is-invalid @enderror"
                                id="available_from" name="available_from" value="{{ old('available_from') }}">
                            <small class="text-muted">Leave blank = available immediately</small>
                            @error('available_from')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-2">
                            <label for="unit_type" class="form-label">Unit Type</label>
                            <select name="unit_type" class="filter-input" id="typeFilter">
                                <option value="2BHK">2 Bed 1 Hall 1 Kitchen</option>
                                <option value="3BHK">3 Bed 1 Hall 1 Kitchen</option>
                                <option value="4BHK">4 Bed 1 Hall 1 Kitchen</option>
                                <option value="5BHK">5 Bed 1 Hall 1 Kitchen</option>
                                <option value="6BHK">6 Bed 1 Hall 1 Kitchen</option>
                            </select>
                            @error('unit_type')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            {{-- ══ PREFERENCES / AMENITIES ══ --}}
                            <div class="col-12">
                                <p class="fw-semibold text-muted mb-0"
                                    style="font-size:0.78rem;text-transform:uppercase;letter-spacing:.08em;">Preferences
                                    & Amenities</p>
                                <div class="section-divider"></div>
                            </div>

                            <div class="col-12">
                                <div class="row g-3">
                                    <div class="col-md-2 col-sm-4 col-6">
                                        <label class="pref-label">
                                            <input type="checkbox" class="form-check-input m-0" name="pet_friendly"
                                                value="1" {{ old('pet_friendly') ? 'checked' : '' }}>
                                            <i class="bi bi-paw-fill text-muted"></i> Pet Friendly
                                        </label>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-6">
                                        <label class="pref-label">
                                            <input type="checkbox" class="form-check-input m-0" name="is_furnished"
                                                value="1" {{ old('is_furnished') ? 'checked' : '' }}>
                                            <i class="bi bi-couch-fill text-muted"></i> Furnished
                                        </label>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-6">
                                        <label class="pref-label">
                                            <input type="checkbox" class="form-check-input m-0" name="has_gym" value="1"
                                                {{ old('has_gym') ? 'checked' : '' }}>
                                            <i class="bi bi-heart-pulse-fill text-muted"></i> Gym / Fitness
                                        </label>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-6">
                                        <label class="pref-label">
                                            <input type="checkbox" class="form-check-input m-0" name="has_rooftop"
                                                value="1" {{ old('has_rooftop') ? 'checked' : '' }}>
                                            <i class="bi bi-building-up text-muted"></i> Rooftop Access
                                        </label>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-6">
                                        <label class="pref-label">
                                            <input type="checkbox" class="form-check-input m-0" name="has_parking"
                                                value="1" {{ old('has_parking') ? 'checked' : '' }}>
                                            <i class="bi bi-p-circle-fill text-muted"></i> Parking Included
                                        </label>
                                    </div>
                                </div>
                            </div>

                            {{-- ══ MEDIA & DETAILS ══ --}}
                            <div class="col-12">
                                <p class="fw-semibold text-muted mb-0"
                                    style="font-size:0.78rem;text-transform:uppercase;letter-spacing:.08em;">Media &
                                    Details</p>
                                <div class="section-divider"></div>
                            </div>

                            <div class="col-12">
                                <label for="images" class="form-label">Unit Images</label>
                                <input id="images" name="images[]" type="file" accept=".jpg,.jpeg,.webp,.png" multiple
                                    class="form-control">
                                @if($errors->has('images.*'))
                                <div class="invalid-feedback d-block">
                                    {{ $errors->first('images.*') }}
                                </div>
                                @endif
                            </div>

                            <div class="col-12">
                                <label for="details" class="form-label">Unit Specifications & Details <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control @error('details') is-invalid @enderror" id="details"
                                    name="details" rows="4"
                                    placeholder="Describe the unit condition, fixtures, etc.">{{ old('details') }}</textarea>
                                @error('details')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Submit --}}
                            <div class="col-12 d-flex align-items-end justify-content-end gap-3 mt-2">
                                <button type="reset" class="btn btn-link text-decoration-none text-muted">Clear
                                    Form</button>
                                <button type="submit" class="btn btn-primary px-4">Register Unit</button>
                            </div>

                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection