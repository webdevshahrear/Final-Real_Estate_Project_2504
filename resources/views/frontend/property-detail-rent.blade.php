@extends('layouts.frontend')
@section('frontend')

<!-- Page Header & Gallery -->
<section class="detail-header-section">
    <div class="container">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4" data-aos="fade-down">
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
            <div class="col-lg-8" data-aos="fade-right">
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
            <div class="col-lg-4 text-lg-end" data-aos="fade-left">
                <div class="price-tag" style="color:#16a34a;">৳{{ number_format($unit->amount,2) }} <span
                        class="fs-4 text-muted">/mo</span></div>
                <p class="text-muted font-mono small mb-0">AVAILABLE {{ $unit->available_from->format('d M , Y') }}</p>
            </div>
        </div>

        <!-- Cinematic Gallery -->
        <div class="gallery-grid mb-5" data-aos="zoom-in">
            @if ($unit->images && count(json_decode($unit->images)) > 0)
            @foreach (json_decode($unit->images) as $img)
            <img src="{{ asset('storage/'. $img) }}" alt="Main View" class="gallery-item gallery-main">
            @endforeach
            @endif
            {{-- <img
                src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=1200&q=80"
                alt="Main View" class="gallery-item gallery-main">
            <img src="https://images.unsplash.com/photo-1493663284031-b7e3aefcae8e?auto=format&fit=crop&w=800&q=80"
                alt="Interior 1" class="gallery-item">
            <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?auto=format&fit=crop&w=800&q=80"
                alt="Interior 2" class="gallery-item"> --}}
        </div>
    </div>
</section>

<div class="container pb-5">
    <div class="row g-5">
        <!-- Main Content -->
        <div class="col-lg-8">

            <!-- Quick Specs Grid -->
            <div class="stats-grid" data-aos="fade-up">
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
            <div class="mb-5" data-aos="fade-up">
                <h4 class="fw-bold text-primary-navy mb-4">Rental Overview</h4>
                <div class="text-muted lh-lg">
                    <p>
                        {{ $unit->details }}
                    </p>

                </div>
            </div>

            <!-- Amenities -->
            <div class="mb-5" data-aos="fade-up">
                <h4 class="fw-bold text-primary-navy mb-4">Included Amenities</h4>
                <div class="d-flex flex-wrap">
                    <span class="amenity-chip"><i class="bi bi-lamp"></i> Fully Furnished</span>
                    <span class="amenity-chip"><i class="bi bi-shield-check"></i> 24/7 Security</span>
                    <span class="amenity-chip"><i class="bi bi-lightning-charge"></i> Generator Backup</span>
                    <span class="amenity-chip"><i class="bi bi-p-square"></i> 1 Parking Spot</span>
                    <span class="amenity-chip"><i class="bi bi-snow"></i> Central AC</span>
                    <span class="amenity-chip"><i class="bi bi-tools"></i> Free Maintenance</span>
                </div>
            </div>

            <!-- Key Documents -->
            <div class="card bg-light border-0 rounded-4 p-4" data-aos="fade-up">
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
            <div class="detail-side-card shadow-sm mb-4" data-aos="fade-left" data-aos-delay="100">
                <h5 class="fw-bold text-primary-navy mb-4">Rental Terms</h5>
                <div class="p-3 border rounded-4 bg-light-subtle mb-3">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-muted extra-small uppercase">Monthly Rent:</span>
                        <span class="fw-bold">৳{{ number_format($unit->amount,2) }}</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-muted extra-small uppercase">Service Charge:</span>
                        <span class="fw-bold">৳{{ number_format($unit->service_charge,2) }}</span>
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
            <div class="detail-side-card shadow-sm" data-aos="fade-left" data-aos-delay="200">
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

                <form>
                    <div class="mb-3">
                        <label class="form-label font-mono small text-muted">FULL NAME</label>
                        <input type="text" class="form-control rounded-pill border-light-subtle"
                            placeholder="Identify yourself...">
                    </div>
                    <div class="mb-3">
                        <label class="form-label font-mono small text-muted">SECURE TELEPHONE</label>
                        <input type="tel" class="form-control rounded-pill border-light-subtle" placeholder="+880">
                    </div>
                    <div class="mb-4">
                        <label class="form-label font-mono small text-muted">PREFERRED MOVE-IN DATE</label>
                        <input type="date" class="form-control rounded-pill border-light-subtle">
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
@endsection