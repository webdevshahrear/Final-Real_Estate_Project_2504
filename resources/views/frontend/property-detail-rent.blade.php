@extends('layouts.frontend')
@section('frontend')

<!-- Slick Slider CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

<!-- Custom CSS for Premium Gallery Slider -->
<style>
    .slider-container {
        position: relative;
        margin-bottom: 2.5rem;
    }
    .slider-main {
        margin-bottom: 12px;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(30, 58, 95, 0.08);
    }
    .slider-main-item img {
        width: 100%;
        height: 550px;
        object-fit: cover;
        border-radius: 20px;
    }
    .slider-nav {
        margin: 0 -6px;
    }
    .slider-nav-item {
        padding: 0 6px;
        cursor: pointer;
        outline: none;
    }
    .slider-nav-item img {
        width: 100%;
        height: 110px;
        object-fit: cover;
        border-radius: 12px;
        opacity: 0.5;
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        border: 2px solid transparent;
    }
    .slider-nav .slick-current .slider-nav-item img {
        opacity: 1;
        border-color: #16a34a;
        transform: scale(0.96);
    }
    
    /* Premium Slick Arrows with Glassmorphism */
    .slick-prev, .slick-next {
        width: 50px;
        height: 50px;
        background: rgba(255, 255, 255, 0.3) !important;
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border-radius: 50%;
        z-index: 10;
        transition: all 0.3s ease;
        border: 1px solid rgba(255, 255, 255, 0.4) !important;
    }
    .slick-prev:hover, .slick-next:hover {
        background: rgba(255, 255, 255, 0.9) !important;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        transform: scale(1.05);
    }
    .slick-prev {
        left: 25px;
    }
    .slick-next {
        right: 25px;
    }
    .slick-prev:before, .slick-next:before {
        color: #1e3a5f !important;
        font-family: 'bootstrap-icons' !important;
        font-size: 22px;
        opacity: 0.9;
        display: block;
        line-height: 1;
    }
    .slick-prev:before {
        content: "\F22D" !important; /* bi-chevron-left */
    }
    .slick-next:before {
        content: "\F231" !important; /* bi-chevron-right */
    }
    
    @media (max-width: 768px) {
        .slider-main-item img {
            height: 350px;
        }
        .slider-nav-item img {
            height: 70px;
        }
    }
</style>

<!-- Page Header & Gallery -->
<section class="detail-header-section">
    <div class="container">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4" >
            <ol class="breadcrumb font-mono small">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-muted text-decoration-none">HOME</a>
                </li>
                <li class="breadcrumb-item"><a href="{{ route('flats-for-rent') }}"
                        class="text-muted text-decoration-none">RENTALS</a></li>
                <li class="breadcrumb-item active text-primary-navy fw-bold" aria-current="page">{{
                    $unit->building->name }}
                </li>
            </ol>
        </nav>

        <div class="row align-items-end mb-5">
            <div class="col-lg-8" >
                <div class="d-flex align-items-center gap-2 mb-3">
                    <span class="geist-badge" style="background:#dcfce7;color:#166534;border-color:#bbf7d0;">{{
                        $unit->status ? 'FOR
                        RENT' : "Not Available" }}</span>
                    <span class="geist-badge-success">MANAGED BY IMPERIAL</span>
                </div>
                <h1 class="display-4 fw-extrabold text-primary-navy mb-0">{{ $unit->building->name }}</h1>
                <p class="text-muted fs-5 mt-2"><i class="bi bi-geo-alt me-2" style="color:#166534;"></i>{{
                    $unit->building->address }}</p>
            </div>
            <div class="col-lg-4 text-lg-end" >
                <div class="price-tag" style="color:#16a34a;">৳{{ number_format($unit->amount,2) }} <span
                        class="fs-4 text-muted">/mo</span></div>
                <p class="text-muted font-mono small mb-0">AVAILABLE
                    {{ $unit->available_from ? $unit->available_from->format('d M, Y') : 'Immediately' }}
                </p>
            </div>
        </div>

        <!-- Cinematic Gallery with Slick Slider -->
        <div class="slider-container mb-5" >
            @php
                $unitImages = is_array($unit->images) ? $unit->images : json_decode($unit->images, true);
            @endphp
            @if (is_array($unitImages) && count($unitImages) > 0)
                <div class="slider-main">
                    @foreach ($unitImages as $img)
                    <div class="slider-main-item">
                        <img src="{{ asset('storage/'. $img) }}" alt="Main View">
                    </div>
                    @endforeach
                </div>
                
                @if (count($unitImages) > 1)
                <div class="slider-nav">
                    @foreach ($unitImages as $img)
                    <div class="slider-nav-item">
                        <img src="{{ asset('storage/'. $img) }}" alt="Thumbnail View">
                    </div>
                    @endforeach
                </div>
                @endif
            @else
                <div class="slider-main">
                    <div class="slider-main-item">
                        <img src="{{ asset('images/placeholder.jpg') }}" alt="Placeholder Main View">
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>

<div class="container pb-5">
    <div class="row g-5">
        <!-- Main Content -->
        <div class="col-lg-8">

            <!-- Quick Specs Grid -->
            <div class="stats-grid" >
                <div class="stat-box">
                    <i class="bi bi-door-open"></i>
                    <div class="stat-value">{{ $unit->bedrooms }}</div>
                    <div class="stat-label">Bedrooms</div>
                </div>
                <div class="stat-box">
                    <i class="bi bi-droplet"></i>
                    <div class="stat-value">{{ $unit->bathrooms }}</div>
                    <div class="stat-label">Bathrooms</div>
                </div>
                <div class="stat-box">
                    <i class="bi bi-bounding-box"></i>
                    <div class="stat-value">{{ $unit->sq_size }}</div>
                    <div class="stat-label">SqFt Area</div>
                </div>
                <div class="stat-box">
                    <i class="bi bi-calendar-event"></i>
                    <div class="stat-value">{{ $unit->lease_period ?? '12' }}</div>
                    <div class="stat-label">Months Lease</div>
                </div>
            </div>

            <!-- Description Section -->
            <div class="mb-5" >
                <h4 class="fw-bold text-primary-navy mb-4">Rental Overview</h4>
                <div class="text-muted lh-lg">
                    <p>
                        {{ $unit->details }}
                    </p>

                </div>
            </div>

            <!-- Amenities -->
            <div class="mb-5" >
                <h4 class="fw-bold text-primary-navy mb-4">Included Amenities</h4>
                @php
                    $amenities = [
                        'is_furnished'         => ['icon' => 'bi-lamp',              'label' => 'Fully Furnished'],
                        'has_security'         => ['icon' => 'bi-shield-check',      'label' => '24/7 Security'],
                        'has_generator'        => ['icon' => 'bi-lightning-charge',  'label' => 'Generator Backup'],
                        'has_parking'          => ['icon' => 'bi-p-square',          'label' => 'Parking Spot'],
                        'has_ac'               => ['icon' => 'bi-snow',              'label' => 'Central AC'],
                        'has_free_maintenance' => ['icon' => 'bi-tools',             'label' => 'Free Maintenance'],
                        'has_gym'              => ['icon' => 'bi-heart-pulse-fill',  'label' => 'Gym / Fitness'],
                        'has_rooftop'          => ['icon' => 'bi-building-up',       'label' => 'Rooftop Access'],
                        'pet_friendly'         => ['icon' => 'bi-heart-fill',        'label' => 'Pet Friendly'],
                    ];
                    $activeAmenities = array_filter($amenities, fn($key) => $unit->$key, ARRAY_FILTER_USE_KEY);
                @endphp
                @if(count($activeAmenities) > 0)
                <div class="d-flex flex-wrap">
                    @foreach($activeAmenities as $key => $info)
                        <span class="amenity-chip"><i class="bi {{ $info['icon'] }}"></i> {{ $info['label'] }}</span>
                    @endforeach
                </div>
                @else
                <p class="text-muted small">No specific amenities listed for this unit.</p>
                @endif
            </div>

            <!-- Key Documents -->
            <div class="card bg-light border-0 rounded-4 p-4" >
                <h5 class="fw-bold text-primary-navy mb-3">Leasing Integrity</h5>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center gap-3 p-3 bg-white rounded-3 border">
                            <i class="bi bi-check-circle-fill fs-4 text-success"></i>
                            <div>
                                <div class="fw-bold small">Zero Brokerage</div>
                                <div class="text-muted small">Direct landlord agreement</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center gap-3 p-3 bg-white rounded-3 border">
                            <i class="bi bi-shield-lock-fill fs-4 text-primary"></i>
                            <div>
                                <div class="fw-bold small">Digital Contract</div>
                                <div class="text-muted small">Via Imperial Resident App</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <!-- Financial Intelligence Card -->
            <div class="detail-side-card shadow-sm mb-4" >
                <h5 class="fw-bold text-primary-navy mb-4">Rental Terms</h5>
                <div class="p-3 border rounded-4 bg-light-subtle mb-3">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-muted extra-small uppercase">Monthly Rent:</span>
                        <span class="fw-bold">৳{{ number_format($unit->amount,2) }}</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-muted extra-small uppercase">Service Charge:</span>
                        <span class="fw-bold">৳{{ number_format($unit->service_charge ?? 0, 2) }}</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span class="text-muted extra-small uppercase">Security Deposit:</span>
                        <span class="fw-bold">৳{{ number_format($unit->security_deposit,2) }}</span>
                    </div>
                </div>
                <div class="alert alert-success border-0 small mb-0 font-mono d-flex align-items-center">
                    <i class="bi bi-info-circle-fill me-2 fs-5"></i>
                    Utility bills (electricity, gas, water) are metered separately via app.
                </div>
            </div>

            <!-- Secure Inquiry -->
            <div class="detail-side-card shadow-sm" >
                <h4 class="fw-bold text-primary-navy mb-4">Schedule Viewing</h4>

                <div class="d-flex align-items-center gap-3 mb-4 p-3 bg-light rounded-3">
                    <div class="bg-success bg-opacity-10 text-success rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 44px; height: 44px;">
                        <i class="bi bi-calendar2-check-fill"></i>
                    </div>
                    <div>
                        <div class="fw-bold small">Smart Viewing</div>
                        <div class="text-muted small">Auto-generate visitor pass</div>
                    </div>
                </div>

                <form action="{{ route('schedule.viewing') }}" method="POST">
                    @csrf
                    <input type="hidden" name="unit_id" value="{{ $unit->id }}">

                    <div class="mb-3">
                        <label class="form-label font-mono small text-muted">FULL NAME</label>
                        <input type="text" name="name" class="form-control rounded-pill border-light-subtle"
                            placeholder="Identify yourself..." value="{{ old('name') }}" required>
                        @error('name')
                            <div class="text-danger extra-small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label font-mono small text-muted">SECURE TELEPHONE</label>
                        <input type="tel" name="phone" class="form-control rounded-pill border-light-subtle"
                            placeholder="+880" value="{{ old('phone') }}" required>
                        @error('phone')
                            <div class="text-danger extra-small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="form-label font-mono small text-muted">PREFERRED MOVE-IN DATE</label>
                        <input type="date" name="preferred_move_in_date"
                            class="form-control rounded-pill border-light-subtle"
                            value="{{ old('preferred_move_in_date') }}">
                    </div>
                    <button type="submit" class="btn-geist w-100 py-3 mb-3 bg-success border-success">Book Viewing
                        Appointment</button>
                    <div class="text-center">
                        <a href="#" class="text-muted small text-decoration-none"><i class="bi bi-whatsapp me-1"
                                style="color:#25D366;"></i> Quick Connect Via WhatsApp</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<!-- jQuery and Slick Slider JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    $(document).ready(function(){
        $('.slider-main').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.slider-main',
            dots: false,
            arrows: false,
            centerMode: false,
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3
                    }
                }
            ]
        });
    });
</script>
@endsection