@extends('layouts.backend')

@section('content')
<div class="container-fluid py-4">


    <div class="d-flex justify-content-between align-items-center mb-5">
        <div>
            <h2 class="h3 fw-bold text-primary-navy mb-0">Asset Portfolio</h2>
            <p class="text-muted small mb-0">Strategic oversight of registered corporate properties.</p>
        </div>
        <a href="{{ route('admin.building.create') }}" class="btn btn-primary px-4 rounded-pill shadow-sm">
            <i class="bi bi-plus-lg me-2"></i>Add New Building
        </a>
    </div>


    <!-- Asset Intelligence Layer -->
    <div class="row g-4 mb-5" data-aos="fade-up">
        <div class="col-lg-8">
            <div class="bg-white border rounded-4 shadow-sm h-100 p-0 overflow-hidden">
                <div class="p-4 border-bottom d-flex justify-content-between align-items-center">
                    <h5 class="fw-bold mb-0">Portfolio Structural Health Profile</h5>
                    <span class="badge bg-primary-navy text-white extra-small">AI Diagnostic Active</span>
                </div>
                <div class="row g-0 h-100">
                    <div class="col-md-7 p-4 border-end">
                        <div class="mb-4">
                            <h6 class="extra-small text-muted fw-bold uppercase mb-2">Aggregate Safety Index</h6>
                            <div class="display-5 fw-bold text-primary-navy">99.4%</div>
                            <p class="extra-small text-success mb-0"><i class="bi bi-shield-check"></i> 100% Compliance
                                across 12 Assets</p>
                        </div>
                        <div class="row g-3">
                            <div class="col-4">
                                <div class="p-2 bg-light rounded-3 text-center border">
                                    <p class="extra-small text-muted mb-1">M&E Vital</p>
                                    <span class="badge bg-success-subtle text-success extra-small">98%</span>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="p-2 bg-light rounded-3 text-center border">
                                    <p class="extra-small text-muted mb-1">Structural</p>
                                    <span class="badge bg-success-subtle text-success extra-small">100%</span>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="p-2 bg-light rounded-3 text-center border">
                                    <p class="extra-small text-muted mb-1">Env. Skg</p>
                                    <span class="badge bg-warning-subtle text-warning extra-small">84%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 p-4 bg-light-subtle d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <div class="spinner-border text-primary-navy mb-3"
                                style="width: 3rem; height: 3rem; border-width: 0.2rem;" role="status"></div>
                            <h6 class="fw-bold small mb-1">Live Feed: Audit 0x4F2</h6>
                            <p class="extra-small text-muted">Scanning Skyline Plaza L5 HVAC...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="bg-white border rounded-4 shadow-sm h-100 p-4 text-dark">
                <h5 class="fw-bold mb-4">Portfolio Yield Heatmap</h5>
                <div class="d-flex flex-column gap-3">
                    <div class="p-3 border rounded-4 bg-white shadow-sm-hover transition">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="small fw-bold">Gulshan Zone</span>
                            <span class="extra-small text-success fw-bold">8.4% ROI</span>
                        </div>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar bg-primary-navy" style="width: 84%;"></div>
                        </div>
                    </div>
                    <div class="p-3 border rounded-4 bg-white shadow-sm-hover transition">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="small fw-bold">Banani Hub</span>
                            <span class="extra-small text-primary fw-bold">7.2% ROI</span>
                        </div>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar bg-primary" style="width: 72%;"></div>
                        </div>
                    </div>
                    <div class="p-3 border rounded-4 bg-white shadow-sm-hover transition">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="small fw-bold">Uttara Site</span>
                            <span class="extra-small text-warning fw-bold">5.8% ROI</span>
                        </div>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar bg-warning" style="width: 58%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
 

    <div class="row g-4">
        @foreach($buildings as $building)
        @php
            $gallImg = json_decode($building->images ?? '')[0] ?? null;
        @endphp
        <div class="col-md-6 col-xl-4">
            <div class="bg-white border rounded-4 shadow-sm h-100 overflow-hidden transition-hover">
                <div class="position-relative"
                    style="height: 200px; background: url({{ getImage($gallImg) }}) center/cover no-repeat;">
                    <div class="position-absolute top-0 end-0 p-3">
                        <span
                            class="badge bg-{{ $building->status ? 'success' : 'warning' }}-subtle text-{{ $building->status ? 'success' : 'warning' }} border border-{{ $building->status ? 'success' : 'warning' }}-subtle px-3 py-2 rounded-pill extra-small fw-bold">
                            <i class="bi bi-check-circle-fill me-1"></i> {{ $building->status ? 'Active' : "Maintenance" }}
                        </span>
                    </div>
                </div>

                <div class="p-4">
                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <h5 class="fw-bold text-primary-navy mb-1">{{ $building->name }}</h5>
                            <p class="extra-small text-muted mb-0"><i
                                    class="bi bi-geo-alt-fill text-accent-blue me-1"></i> {{ $building->address }}</p>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-light rounded-circle border shadow-sm"
                                data-bs-toggle="dropdown">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg rounded-3 extra-small">
                                <li><a class="dropdown-item py-2" href="#"><i class="bi bi-pencil me-2"></i> Edit
                                        Details</a></li>
                                <li><a class="dropdown-item py-2 text-danger" href="#"><i
                                            class="bi bi-archive me-2"></i> Retire Asset</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col-6">
                            <div class="bg-light p-2 rounded-3 border-start border-primary border-3">
                                <p class="extra-small text-muted mb-0">Classification</p>
                                <p class="small fw-bold mb-0 text-primary-navy">{{ $building->building_type }}</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-light p-2 rounded-3 border-start border-accent-blue border-3">
                                <p class="extra-small text-muted mb-0">Total Storeys</p>
                                <p class="small fw-bold mb-0 text-primary-navy">{{ $building->total_floors }} Floors</p>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap gap-1 mb-4">
                        <span class="badge bg-light text-secondary border fw-normal extra-small">{{ $building->amenities }}</span>
                    </div>

                    <div class="d-flex justify-content-between align-items-center pt-3 border-top">
                        <span class="extra-small text-muted">ID: #ASSET-{{ $building->id }}</span>
                        <a href="#" class="btn btn-outline-primary btn-sm px-4 rounded-pill">Manage Profile</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <div class="col-md-6 col-xl-4">
            <a href="{{ route('admin.building.create') }}" class="text-decoration-none h-100">
                <div class="d-flex flex-column align-items-center justify-content-center p-5 rounded-4 border-dashed h-100"
                    style="border: 2px dashed var(--accents-3); min-height: 400px; background: var(--accents-1);">
                    <div class="rounded-circle bg-white shadow-sm d-flex align-items-center justify-content-center mb-3"
                        style="width: 60px; height: 60px;">
                        <i class="bi bi-plus-lg fs-3 text-accent-blue"></i>
                    </div>
                    <h5 class="fw-bold text-primary-navy mb-1">Add New Asset</h5>
                    <p class="extra-small text-muted text-center px-4">Initialize registration for a new property within
                        the global registry.</p>
                </div>
            </a>
        </div>
    </div>
</div>

<style>
    .transition-hover {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        cursor: default;
    }

    .transition-hover:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-medium) !important;
    }

    .extra-small {
        font-size: 0.72rem;
        letter-spacing: 0.025em;
    }

    .border-dashed {
        border-style: dashed !important;
        transition: background 0.2s;
    }

    .border-dashed:hover {
        background: var(--light-blue-bg) !important;
    }
</style>
@endsection