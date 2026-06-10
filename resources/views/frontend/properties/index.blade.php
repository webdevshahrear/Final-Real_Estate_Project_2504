<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Properties - Imperial OS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body { background: #f8f9fa; }
        .property-card {
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .property-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 24px rgba(0,0,0,0.12) !important;
        }
        .badge-type {
            position: absolute;
            top: 12px;
            left: 12px;
        }
        .property-img {
            height: 200px;
            background: #e9ecef;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .navbar-brand { font-weight: 700; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
    <a class="navbar-brand" href="#">▲ Imperial OS</a>
    <div class="ms-auto d-flex gap-2">
        <a href="{{ url('/login') }}" class="btn btn-outline-light btn-sm">Login</a>
    </div>
</nav>

<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold mb-0">Available Properties</h2>
    </div>

    {{-- Search & Filter --}}
    <div class="bg-white rounded-4 shadow-sm p-4 mb-4">
        <form method="GET" action="{{ route('properties.index') }}">
            <div class="row g-3">
                <div class="col-md-6">
                    <input type="text" name="search" class="form-control rounded-pill px-4"
                        placeholder="Search by title or location..." value="{{ request('search') }}">
                </div>
                <div class="col-md-3">
                    <select name="type" class="form-select rounded-pill px-4">
                        <option value="">All Types</option>
                        <option value="rent" {{ request('type') == 'rent' ? 'selected' : '' }}>For Rent</option>
                        <option value="buy" {{ request('type') == 'buy' ? 'selected' : '' }}>For Sale</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary rounded-pill px-4 w-100">
                        <i class="bi bi-search me-2"></i>Search
                    </button>
                </div>
            </div>
        </form>
    </div>

    {{-- Properties Grid --}}
    <div class="row g-4">
        @forelse($properties as $property)
        <div class="col-md-4">
            <div class="card property-card shadow-sm border-0 h-100">
                <div class="property-img position-relative">
                    <i class="bi bi-building text-muted" style="font-size: 3rem;"></i>
                    <span class="badge {{ $property->type == 'rent' ? 'bg-primary' : 'bg-success' }} badge-type">
                        {{ $property->type == 'rent' ? 'For Rent' : 'For Sale' }}
                    </span>
                </div>
                <div class="card-body">
                    <h5 class="fw-bold mb-1">{{ $property->title }}</h5>
                    <p class="text-muted small mb-2"><i class="bi bi-geo-alt"></i> {{ $property->location }}</p>
                    <div class="d-flex gap-3 text-muted small mb-3">
                        @if($property->bedrooms)
                        <span><i class="bi bi-door-closed"></i> {{ $property->bedrooms }} Beds</span>
                        @endif
                        @if($property->bathrooms)
                        <span><i class="bi bi-droplet"></i> {{ $property->bathrooms }} Baths</span>
                        @endif
                        @if($property->size)
                        <span><i class="bi bi-arrows-angle-expand"></i> {{ $property->size }} sqft</span>
                        @endif
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="fw-bold text-primary mb-0">${{ number_format($property->price, 2) }}</h5>
                        <a href="{{ route('properties.show', $property->id) }}" class="btn btn-outline-primary btn-sm rounded-pill px-3">
                            View Details
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center py-5">
            <i class="bi bi-building text-muted" style="font-size: 3rem;"></i>
            <p class="text-muted mt-3">No properties found!</p>
        </div>
        @endforelse
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>