<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $property->title }} - Imperial OS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body { background: #f8f9fa; }
        .property-img {
            height: 350px;
            background: #e9ecef;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
    <a class="navbar-brand" href="#">▲ Imperial OS</a>
    <div class="ms-auto d-flex gap-2">
        <a href="{{ route('properties.index') }}" class="btn btn-outline-light btn-sm">
            <i class="bi bi-arrow-left"></i> Back to Properties
        </a>
        <a href="{{ url('/login') }}" class="btn btn-outline-light btn-sm">Login</a>
    </div>
</nav>

<div class="container py-5">
    <div class="row g-4">
        <div class="col-lg-8">
            <div class="property-img mb-4">
                <i class="bi bi-building text-muted" style="font-size: 5rem;"></i>
            </div>
            <div class="bg-white rounded-4 shadow-sm p-4">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                        <h2 class="fw-bold mb-1">{{ $property->title }}</h2>
                        <p class="text-muted"><i class="bi bi-geo-alt"></i> {{ $property->location }}</p>
                    </div>
                    <span class="badge {{ $property->type == 'rent' ? 'bg-primary' : 'bg-success' }} fs-6">
                        {{ $property->type == 'rent' ? 'For Rent' : 'For Sale' }}
                    </span>
                </div>

                <div class="row g-3 mb-4">
                    @if($property->bedrooms)
                    <div class="col-md-3 text-center">
                        <div class="bg-light rounded-3 p-3">
                            <i class="bi bi-door-closed fs-4 text-primary"></i>
                            <p class="mb-0 fw-bold">{{ $property->bedrooms }}</p>
                            <small class="text-muted">Bedrooms</small>
                        </div>
                    </div>
                    @endif
                    @if($property->bathrooms)
                    <div class="col-md-3 text-center">
                        <div class="bg-light rounded-3 p-3">
                            <i class="bi bi-droplet fs-4 text-primary"></i>
                            <p class="mb-0 fw-bold">{{ $property->bathrooms }}</p>
                            <small class="text-muted">Bathrooms</small>
                        </div>
                    </div>
                    @endif
                    @if($property->size)
                    <div class="col-md-3 text-center">
                        <div class="bg-light rounded-3 p-3">
                            <i class="bi bi-arrows-angle-expand fs-4 text-primary"></i>
                            <p class="mb-0 fw-bold">{{ $property->size }}</p>
                            <small class="text-muted">Sq Ft</small>
                        </div>
                    </div>
                    @endif
                    <div class="col-md-3 text-center">
                        <div class="bg-light rounded-3 p-3">
                            <i class="bi bi-check-circle fs-4 text-success"></i>
                            <p class="mb-0 fw-bold">{{ ucfirst($property->status) }}</p>
                            <small class="text-muted">Status</small>
                        </div>
                    </div>
                </div>

                <h5 class="fw-bold mb-3">Description</h5>
                <p class="text-muted">{{ $property->description }}</p>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="bg-white rounded-4 shadow-sm p-4 sticky-top" style="top: 20px;">
                <h3 class="fw-bold text-primary mb-1">${{ number_format($property->price, 2) }}</h3>
                <p class="text-muted small">{{ $property->type == 'rent' ? 'Per Month' : 'Sale Price' }}</p>
                <hr>
                <p class="text-muted small mb-4">Interested in this property? Login to contact the owner.</p>
                <a href="{{ url('/login') }}" class="btn btn-primary w-100 rounded-pill">
                    <i class="bi bi-person me-2"></i>Login to Contact
                </a>
                <a href="{{ route('properties.index') }}" class="btn btn-outline-secondary w-100 rounded-pill mt-2">
                    <i class="bi bi-arrow-left me-2"></i>Back to Listings
                </a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>