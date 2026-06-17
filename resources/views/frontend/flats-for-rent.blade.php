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
                <div class="val">{{ $units->count() }}</div>
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

        {{-- ══ FILTER PANEL ══ --}}
        <div class="col-lg-3">
            <div class="filter-panel" data-aos="fade-right">
                <h6 class="fw-bold mb-4" style="font-size:0.95rem;color:#064e3b;">Refine Search</h6>

                <form method="GET" action="{{ route('flats-for-rent') }}" id="filterForm">

                    {{-- Location --}}
                    <div class="mb-4">
                        <p class="filter-label">Location / Area</p>
                        <div class="position-relative">
                            <i class="bi bi-search position-absolute"
                                style="top:50%;left:12px;transform:translateY(-50%);color:#9ca3af;font-size:0.8rem;"></i>
                            <input type="text" class="filter-input" id="locSearch" name="location"
                                placeholder="Gulshan, Banani..."
                                style="padding-left:2rem;"
                                value="{{ request('location') }}">
                        </div>
                    </div>

                    {{-- Bedrooms --}}
                    <div class="mb-4">
                        <p class="filter-label">Bedrooms</p>
                        <div class="d-flex gap-2 flex-wrap">
                            @foreach([1,2,3,4,5] as $b)
                            <button type="button"
                                class="bed-btn {{ request('bedrooms') == $b ? 'active' : '' }}"
                                onclick="setBed(this,'{{ $b }}')">{{ $b }}+</button>
                            @endforeach
                        </div>
                        <input type="hidden" name="bedrooms" id="bedroomInput" value="{{ request('bedrooms') }}">
                    </div>

                    {{-- Price Range --}}
                    <div class="mb-4">
                        <p class="filter-label">Monthly Rent Range (৳)</p>
                        <div class="d-flex gap-2">
                            <input type="number" class="filter-input" id="minPrice" name="min_price"
                                placeholder="Min" value="{{ request('min_price') }}">
                            <input type="number" class="filter-input" id="maxPrice" name="max_price"
                                placeholder="Max" value="{{ request('max_price') }}">
                        </div>
                    </div>

                    {{-- Availability --}}
                    <div class="mb-4">
                        <p class="filter-label">Availability</p>
                        <select class="filter-input" name="availability" id="availabilityFilter">
                            <option value="any"   {{ request('availability','any') == 'any'    ? 'selected' : '' }}>Any Date</option>
                            <option value="now"   {{ request('availability') == 'now'    ? 'selected' : '' }}>Available Now</option>
                            <option value="1month" {{ request('availability') == '1month' ? 'selected' : '' }}>Within 1 Month</option>
                            <option value="3months" {{ request('availability') == '3months' ? 'selected' : '' }}>Within 3 Months</option>
                        </select>
                    </div>

                    {{-- Preferences --}}
                    <div class="mb-4">
                        <p class="filter-label">Preferences</p>
                        <div class="d-flex flex-column gap-2">
                            <label class="d-flex align-items-center gap-2 extra-small" style="cursor:pointer;">
                                <input type="checkbox" class="form-check-input m-0" name="pet_friendly" value="1"
                                    {{ request('pet_friendly') ? 'checked' : '' }}> 🐾 Pet Friendly
                            </label>
                            <label class="d-flex align-items-center gap-2 extra-small" style="cursor:pointer;">
                                <input type="checkbox" class="form-check-input m-0" name="is_furnished" value="1"
                                    {{ request('is_furnished') ? 'checked' : '' }}> 🛋️ Furnished
                            </label>
                            <label class="d-flex align-items-center gap-2 extra-small" style="cursor:pointer;">
                                <input type="checkbox" class="form-check-input m-0" name="has_gym" value="1"
                                    {{ request('has_gym') ? 'checked' : '' }}> 🏋️ Gym / Fitness
                            </label>
                            <label class="d-flex align-items-center gap-2 extra-small" style="cursor:pointer;">
                                <input type="checkbox" class="form-check-input m-0" name="has_rooftop" value="1"
                                    {{ request('has_rooftop') ? 'checked' : '' }}> 🌆 Rooftop Access
                            </label>
                            <label class="d-flex align-items-center gap-2 extra-small" style="cursor:pointer;">
                                <input type="checkbox" class="form-check-input m-0" name="has_parking" value="1"
                                    {{ request('has_parking') ? 'checked' : '' }}> 🚗 Parking Included
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="btn-apply-filter">Apply Filters</button>
                    <a href="{{ route('flats-for-rent') }}" class="btn-clear-filter d-block text-center text-decoration-none mt-2">Clear All</a>

                </form>
            </div>
        </div>

        {{-- ══ LISTINGS ══ --}}
        <div class="col-lg-9">
            <div class="listing-toolbar" data-aos="fade-down">
                <p class="mb-0 small fw-bold" style="color:#064e3b;" id="resultCount">
                    Showing <strong>{{ $units->count() }}</strong> managed rental{{ $units->count() != 1 ? 's' : '' }}
                </p>
                <div class="d-flex align-items-center gap-3">
                    <div class="d-flex gap-1">
                        <div class="view-btn active" id="btnGrid" onclick="setView('grid')"><i class="bi bi-grid-3x3-gap"></i></div>
                        <div class="view-btn" id="btnList" onclick="setView('list')"><i class="bi bi-list-ul"></i></div>
                    </div>
                </div>
            </div>

            <div class="row g-4" id="propGrid">
                @forelse ($units as $unit)
                <div class="col-md-6" data-aos="fade-up">
                    <a href="{{ route('property-detail-rent') }}" class="prop-card">
                        <div class="prop-img-wrap">
                            <span class="prop-badge badge-rent">For Rent</span>
                            <div class="prop-wish"
                                onclick="event.preventDefault(); this.querySelector('i').classList.toggle('bi-heart-fill'); this.querySelector('i').classList.toggle('bi-heart');">
                                <i class="bi bi-heart"></i>
                            </div>

                            {{-- Availability badge --}}
                            @if(!$unit->available_from || $unit->available_from->isPast() || $unit->available_from->isToday())
                                <div class="prop-avail" style="background:#10b981;">Available Now</div>
                            @else
                                <div class="prop-avail" style="background:#f59e0b;">From {{ $unit->available_from->format('d M Y') }}</div>
                            @endif

                            <div class="prop-verified"><i class="bi bi-patch-check-fill"></i> Managed</div>

                            @if($unit->images && count($unit->images) > 0)
                                <img src="{{ asset('storage/' . $unit->images[0]) }}" alt="{{ $unit->building->name }}">
                            @else
                                <img src="{{ asset('images/placeholder.jpg') }}" alt="{{ $unit->building->name }}">
                            @endif
                        </div>

                        <div class="prop-body">
                            <div class="prop-price">৳{{ number_format($unit->amount) }} <span class="prop-price-sub">/month</span></div>
                            <div class="prop-title">{{ $unit->building->name }} — Unit {{ $unit->unit_num ?? $unit->floor }}</div>
                            <div class="prop-loc"><i class="bi bi-geo-alt-fill"></i> {{ $unit->building->address }}</div>

                            <div class="prop-specs">
                                <div class="prop-spec"><i class="bi bi-door-open"></i> {{ $unit->bedrooms }} BHK</div>
                                <div class="prop-spec"><i class="bi bi-bounding-box"></i> {{ $unit->sq_size ?? '—' }} SqFt</div>
                                <div class="prop-spec"><i class="bi bi-building"></i> Floor {{ $unit->floor }}</div>
                            </div>

                            {{-- Preference badges --}}
                            @if($unit->pet_friendly || $unit->is_furnished || $unit->has_gym || $unit->has_rooftop || $unit->has_parking)
                            <div class="d-flex flex-wrap gap-1 mt-2">
                                @if($unit->pet_friendly)
                                    <span class="badge rounded-pill" style="background:#ecfdf5;color:#065f46;font-size:0.7rem;font-weight:500;">🐾 Pet OK</span>
                                @endif
                                @if($unit->is_furnished)
                                    <span class="badge rounded-pill" style="background:#eff6ff;color:#1e40af;font-size:0.7rem;font-weight:500;">🛋️ Furnished</span>
                                @endif
                                @if($unit->has_gym)
                                    <span class="badge rounded-pill" style="background:#fdf4ff;color:#7e22ce;font-size:0.7rem;font-weight:500;">🏋️ Gym</span>
                                @endif
                                @if($unit->has_rooftop)
                                    <span class="badge rounded-pill" style="background:#fff7ed;color:#c2410c;font-size:0.7rem;font-weight:500;">🌆 Rooftop</span>
                                @endif
                                @if($unit->has_parking)
                                    <span class="badge rounded-pill" style="background:#f0fdf4;color:#166534;font-size:0.7rem;font-weight:500;">🚗 Parking</span>
                                @endif
                            </div>
                            @endif
                        </div>
                    </a>
                </div>
                @empty
                <div class="col-12">
                    <div class="no-results">
                        <i class="bi bi-building-slash d-block fs-1 text-muted mb-3"></i>
                        <h5 class="fw-bold mb-2" style="color:#064e3b;">No Rentals Found</h5>
                        <p class="text-muted small">Try adjusting your filters or <a href="{{ route('contact') }}"
                                class="text-decoration-none fw-bold" style="color:#10b981;">contact our concierge</a>.</p>
                    </div>
                </div>
                @endforelse
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

<script>
    // Bedroom filter buttons
    function setBed(btn, val) {
        document.querySelectorAll('.bed-btn').forEach(b => b.classList.remove('active'));
        const input = document.getElementById('bedroomInput');
        if (input.value === val) {
            // toggle off
            btn.classList.remove('active');
            input.value = '';
        } else {
            btn.classList.add('active');
            input.value = val;
        }
    }

    // Grid / List view toggle
    function setView(mode) {
        const grid = document.getElementById('propGrid');
        const btnGrid = document.getElementById('btnGrid');
        const btnList = document.getElementById('btnList');
        if (mode === 'grid') {
            grid.querySelectorAll('.col-md-6').forEach(c => {
                c.className = 'col-md-6';
            });
            btnGrid.classList.add('active');
            btnList.classList.remove('active');
        } else {
            grid.querySelectorAll('.col-md-6').forEach(c => {
                c.className = 'col-12';
            });
            btnList.classList.add('active');
            btnGrid.classList.remove('active');
        }
    }
</script>

@endsection