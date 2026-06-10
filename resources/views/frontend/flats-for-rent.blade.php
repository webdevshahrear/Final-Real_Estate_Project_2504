@extends('layouts.frontend')
@section('frontend')



<section class="listing-hero">
    <div class="grid-bg"></div>
    <div class="container position-relative" style="z-index:2;">
        <div class="hero-type-tabs">
            <a href="{{ route('flats-for-sale') }}" class="hero-type-tab">🏷️ For Sale</a>
            <a href="{{ route('flats-for-rent') }}" class="hero-type-tab active">🏠 For Rent</a>
            <a href="{{ route('commercial-spaces') }}" class="hero-type-tab">🏢 Commercial</a>
        </div>
        <div class="hero-badge-pill"><span class="dot"></span>Fully Managed — Move-In Ready</div>
        <h1 class="hero-title">Luxury Residences<br>Available for <span>Rent.</span></h1>
        <p style="color:rgba(255,255,255,0.55);max-width:560px;line-height:1.75;font-size:0.95rem;">
            Professionally managed rental apartments across Dhaka's prime locations. All utilities, security and
            maintenance handled by The Imperial's team.
        </p>
        <div class="hero-stats">
            <div class="h-stat">
                <div class="val">62</div>
                <div class="lbl">Active Rentals</div>
            </div>
            <div class="h-stat">
                <div class="val">0-day</div>
                <div class="lbl">Vacancy Delay</div>
            </div>
            <div class="h-stat">
                <div class="val">100%</div>
                <div class="lbl">Professionally Managed</div>
            </div>
            <div class="h-stat">
                <div class="val">24/7</div>
                <div class="lbl">Maintenance</div>
            </div>
        </div>
    </div>
</section>

<div class="container py-5">
    <div class="row g-4">
        <div class="col-lg-3">
            <div class="filter-panel" data-aos="fade-right">
                <h6 class="fw-bold mb-4" style="font-size:0.95rem;color:#064e3b;">Refine Search</h6>
                <div class="mb-4">
                    <p class="filter-label">Location / Area</p>
                    <div class="position-relative">
                        <i class="bi bi-search position-absolute"
                            style="top:50%;left:12px;transform:translateY(-50%);color:#9ca3af;font-size:0.8rem;"></i>
                        <input type="text" class="filter-input" id="locSearch" placeholder="Gulshan, Banani..."
                            style="padding-left:2rem;" oninput="applyFilters()">
                    </div>
                </div>
                <div class="mb-4">
                    <p class="filter-label">Property Type</p>
                    <select class="filter-input" id="typeFilter" onchange="applyFilters()">
                        <option value="">All Types</option>
                        <option value="apartment">Apartment / Flat</option>
                        <option value="duplex">Duplex / Penthouse</option>
                        <option value="furnished">Fully Furnished</option>
                        <option value="serviced">Serviced Apartment</option>
                    </select>
                </div>
                <div class="mb-4">
                    <p class="filter-label">Bedrooms</p>
                    <div class="d-flex gap-2">
                        <button class="bed-btn" onclick="setBed(this,'1')">1+</button>
                        <button class="bed-btn" onclick="setBed(this,'2')">2+</button>
                        <button class="bed-btn active" onclick="setBed(this,'3')">3+</button>
                        <button class="bed-btn" onclick="setBed(this,'4')">4+</button>
                        <button class="bed-btn" onclick="setBed(this,'5')">5+</button>
                    </div>
                </div>
                <div class="mb-4">
                    <p class="filter-label">Monthly Rent Range (৳)</p>
                    <div class="d-flex gap-2">
                        <input type="number" class="filter-input" id="minPrice" placeholder="Min"
                            oninput="applyFilters()">
                        <input type="number" class="filter-input" id="maxPrice" placeholder="Max"
                            oninput="applyFilters()">
                    </div>
                </div>
                <div class="mb-4">
                    <p class="filter-label">Availability</p>
                    <select class="filter-input" onchange="applyFilters()">
                        <option>Available Now</option>
                        <option>Within 1 Month</option>
                        <option>Within 3 Months</option>
                        <option>Any Date</option>
                    </select>
                </div>
                <div class="mb-4">
                    <p class="filter-label">Preferences</p>
                    <div class="d-flex flex-column gap-2">
                        <label class="d-flex align-items-center gap-2 extra-small" style="cursor:pointer;"><input
                                type="checkbox" class="form-check-input m-0"> Pet Friendly</label>
                        <label class="d-flex align-items-center gap-2 extra-small" style="cursor:pointer;"><input
                                type="checkbox" class="form-check-input m-0"> Furnished</label>
                        <label class="d-flex align-items-center gap-2 extra-small" style="cursor:pointer;"><input
                                type="checkbox" class="form-check-input m-0"> Gym / Fitness</label>
                        <label class="d-flex align-items-center gap-2 extra-small" style="cursor:pointer;"><input
                                type="checkbox" class="form-check-input m-0"> Rooftop Access</label>
                        <label class="d-flex align-items-center gap-2 extra-small" style="cursor:pointer;"><input
                                type="checkbox" class="form-check-input m-0"> Parking Included</label>
                    </div>
                </div>
                <button class="btn-apply-filter">Apply Filters</button>
                <button class="btn-clear-filter" onclick="clearFilters()">Clear All</button>
            </div>
        </div>

        <div class="col-lg-9">
            <div class="listing-toolbar" data-aos="fade-down">
                <p class="mb-0 small fw-bold" style="color:#064e3b;" id="resultCount">Showing <strong>6</strong> of 62
                    managed rentals</p>
                <div class="d-flex align-items-center gap-3">
                    <select class="filter-input" style="width:160px;padding:0.45rem 0.75rem;">
                        <option>Newest First</option>
                        <option>Rent: Low → High</option>
                        <option>Rent: High → Low</option>
                    </select>
                    <div class="d-flex gap-1">
                        <div class="view-btn active" onclick="setView('grid')"><i class="bi bi-grid-3x3-gap"></i></div>
                        <div class="view-btn" onclick="setView('list')"><i class="bi bi-list-ul"></i></div>
                    </div>
                </div>
            </div>

            <div class="row g-4" id="propGrid">
                @foreach ($units as $unit)


                <div class="col-md-6" data-aos="fade-up" data-location="gulshan" data-beds="3" data-price="45000"
                    data-type="apartment">
                    <a href="{{ route('property-detail-rent') }}" class="prop-card">
                        <div class="prop-img-wrap">
                            <span class="prop-badge badge-rent">For Rent</span>
                            <div class="prop-wish"
                                onclick="event.preventDefault(); this.querySelector('i').classList.toggle('bi-heart-fill'); this.querySelector('i').classList.toggle('bi-heart');">
                                <i class="bi bi-heart"></i>
                            </div>
                            <div class="prop-avail">Available Now</div>
                            <div class="prop-verified"><i class="bi bi-patch-check-fill"></i> Managed</div>
                            
                            <img src="{{ asset('storage/' . json_decode($unit->images)[0]) }}"
                                alt="Gulshan Apartment">
                        </div>
                        <div class="prop-body">
                            <div class="prop-price">৳{{ $unit->amount }} <span class="prop-price-sub">/month</span></div>
                            <div class="prop-title">{{ $unit->building->name }}</div>
                            <div class="prop-loc"><i class="bi bi-geo-alt-fill"></i> {{ $unit->building->address }}</div>
                            <div class="prop-specs">
                                <div class="prop-spec"><i class="bi bi-door-open"></i> {{ $unit->unit_type }}</div>
                                <div class="prop-spec"><i class="bi bi-bounding-box"></i> {{ $unit->sq_size }} SqFt</div>
                                <div class="prop-spec"><i class="bi bi-tools"></i> Admin</div>
                            </div>
                        </div>
                    </a>
                </div>

                @endforeach

            </div>

            <div class="no-results" id="noResults">
                <i class="bi bi-building-slash d-block fs-1 text-muted mb-3"></i>
                <h5 class="fw-bold mb-2" style="color:#064e3b;">No Rentals Found</h5>
                <p class="text-muted small">Try adjusting your filters or <a href="{{ route('contact') }}"
                        class="text-decoration-none fw-bold" style="color:#10b981;">contact our concierge</a>.</p>
            </div>



            <div class="mt-5 p-5 text-center rounded-4" style="background:linear-gradient(135deg,#064e3b,#10b981);"
                data-aos="fade-up">
                <h4 class="fw-bold text-white mb-2">Need a Corporate or Short-Term Lease?</h4>
                <p class="text-white opacity-75 mb-4 small">We offer <strong>flexible lease terms</strong> from 3 months
                    to 5 years. Discuss custom arrangements with our concierge.</p>
                <a href="{{ route('contact') }}" class="btn fw-bold rounded-pill px-5 py-2"
                    style="background:#fff;color:#064e3b;">Talk to Concierge</a>
            </div>
        </div>
    </div>
</div>

@endsection