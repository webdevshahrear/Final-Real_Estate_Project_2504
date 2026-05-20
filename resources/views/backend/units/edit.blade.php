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
</style>

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="unit-card p-4 p-md-5">
                <header class="mb-4">
                    <h2 class="h4 fw-bold mb-1">Edit Unit</h2>
                    <p class="text-muted small">Update the unit information below.</p>
                </header>

                <form action="{{ route('admin.units.update', $unit->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row g-4">

                        {{-- Building Assignment --}}
                        <div class="col-md-6">
                            <label for="building_id" class="form-label">Parent Building</label>
                            <select class="form-select @error('building_id') is-invalid @enderror" id="building_id" name="building_id">
                                <option selected disabled>Select Building</option>
                                @foreach($buildings as $building)
                                <option value="{{ $building->id }}" {{ old('building_id', $unit->building_id) == $building->id ? 'selected' : '' }}>
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
                            <label for="floor" class="form-label">Floor Level</label>
                            <input type="text" class="form-control @error('floor') is-invalid @enderror" id="floor"
                                name="floor" value="{{ old('floor', $unit->floor) }}" placeholder="e.g. 4th Floor">
                            @error('floor')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Unit Number --}}
                        <div class="col-md-3">
                            <label for="unit_num" class="form-label">Unit Number</label>
                            <input type="text" class="form-control @error('unit_num') is-invalid @enderror"
                                id="unit_num" name="unit_num" value="{{ old('unit_num', $unit->unit_num) }}" placeholder="e.g. A-402">
                            @error('unit_num')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Financials --}}
                        <div class="col-md-4">
                            <label for="amount" class="form-label">Monthly Rent/Amount</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" step="0.01"
                                    class="form-control @error('amount') is-invalid @enderror" id="amount" name="amount"
                                    value="{{ old('amount', $unit->amount) }}">
                            </div>
                            @error('amount')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="security_deposit" class="form-label">Security Deposit</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" step="0.01"
                                    class="form-control @error('security_deposit') is-invalid @enderror"
                                    id="security_deposit" name="security_deposit"
                                    value="{{ old('security_deposit', $unit->security_deposit) }}">
                            </div>
                            @error('security_deposit')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Specs --}}
                        <div class="col-md-2">
                            <label for="sq_size" class="form-label">Size (Sq Ft)</label>
                            <input type="text" class="form-control @error('sq_size') is-invalid @enderror" id="sq_size"
                                name="sq_size" value="{{ old('sq_size', $unit->sq_size) }}">
                            @error('sq_size')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-2">
                            <label for="unit_type" class="form-label">Unit Type</label>
                            <input type="text" class="form-control @error('unit_type') is-invalid @enderror"
                                id="unit_type" name="unit_type" value="{{ old('unit_type', $unit->unit_type) }}" placeholder="e.g. 2BHK">
                            @error('unit_type')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Details --}}
                        <div class="col-12">
                            <label for="details" class="form-label">Unit Specifications & Details</label>
                            <textarea class="form-control @error('details') is-invalid @enderror" id="details"
                                name="details" rows="4"
                                placeholder="Describe the unit condition, fixtures, etc.">{{ old('details', $unit->details) }}</textarea>
                            @error('details')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Availability Status --}}
                        <div class="col-md-4">
                            <label for="status" class="form-label">Leasing Status</label>
                            <select class="form-select @error('status') is-invalid @enderror" id="status" name="status">
                                <option value="1" {{ old('status', $unit->status) == '1' ? 'selected' : '' }}>Available</option>
                                <option value="0" {{ old('status', $unit->status) == '0' ? 'selected' : '' }}>Occupied / Unavailable</option>
                            </select>
                            @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-8 d-flex align-items-end justify-content-end gap-3">
                            <a href="{{ route('admin.units.index') }}" class="btn btn-link text-decoration-none text-muted">Cancel</a>
                            <button type="submit" class="btn btn-primary px-4">Update Unit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection