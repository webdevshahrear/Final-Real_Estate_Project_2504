@extends('layouts.backend')
@section('content')
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

<!-- Total Assets KPI Row (Original) -->
<div class="row g-4 mb-5" data-aos="fade-up">
    <div class="col-md-3">
        <div class="bg-white border rounded-4 shadow-sm p-4 text-dark">
            <p class="text-muted extra-small fw-bold uppercase mb-1">Total Assets</p>
            <h3 class="fw-bold mb-0">12</h3>
            <p class="text-success extra-small mt-2 mb-0"><i class="bi bi-arrow-up"></i> 1 New this quarter</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="bg-white border rounded-4 shadow-sm p-4 text-dark">
            <p class="text-muted extra-small fw-bold uppercase mb-1">Total Levels</p>
            <h3 class="fw-bold mb-0">84</h3>
            <p class="text-muted extra-small mt-2 mb-0">Across all buildings</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="bg-white border rounded-4 shadow-sm p-4 text-dark">
            <p class="text-muted extra-small fw-bold uppercase mb-1">Managed Units</p>
            <h3 class="fw-bold mb-0">142</h3>
            <p class="text-muted extra-small mt-2 mb-0">Residential & Commercial</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="bg-white border rounded-4 shadow-sm p-4 text-dark">
            <p class="text-muted extra-small fw-bold uppercase mb-1">Avg Occupancy</p>
            <h3 class="fw-bold mb-0">94.3%</h3>
            <div class="progress mt-2" style="height: 4px;">
                <div class="progress-bar bg-primary-navy" style="width: 94%;"></div>
            </div>
        </div>
    </div>
</div>

<!-- Building Inventory -->
<div class="row g-4" data-aos="fade-up">
    <div class="col-md-6 col-xl-4">
        <div class="building-card-geist">
            <div class="building-img-overlay"
                style="background-image: url('https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?auto=format&fit=crop&w=800px&q=80');">
                <span class="building-status-badge text-success">Verified</span>
            </div>
            <div class="p-4">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                        <h5 class="fw-bold mb-1">Imperial Heights</h5>
                        <p class="extra-small text-muted mb-0"><i class="bi bi-geo-alt-fill me-1"></i> Road 12, Gulshan
                            1, Dhaka</p>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-sm btn-light rounded-circle shadow-sm border" data-bs-toggle="dropdown"
                            title="Expand Actions">
                            <i class="bi bi-three-dots"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end border-0 shadow rounded-4 extra-small p-2">
                            <li><a class="dropdown-item py-2 rounded-3" href="#" data-action="edit" data-id="IH-001"><i
                                        class="bi bi-pencil-square me-2 text-primary"></i> Edit Details</a></li>
                            <li><a class="dropdown-item py-2 rounded-3" href="units.html"><i
                                        class="bi bi-door-open me-2 text-success"></i> View Units</a></li>
                            <li><a class="dropdown-item py-2 rounded-3" href="reports.html"><i
                                        class="bi bi-bar-chart me-2 text-info"></i> Performance Audit</a></li>
                            <li>
                                <hr class="dropdown-divider opacity-50">
                            </li>
                            <li><a class="dropdown-item py-2 rounded-3 text-danger" href="#" data-action="delete"
                                    data-id="IH-001"><i class="bi bi-trash3 me-2"></i> Retire Asset</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row g-2 mb-4">
                    <div class="col-4">
                        <div class="bg-light p-2 rounded-3 text-center">
                            <p class="extra-small text-muted mb-0">Floors</p>
                            <p class="small fw-bold mb-0">12</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="bg-light p-2 rounded-3 text-center">
                            <p class="extra-small text-muted mb-0">Units</p>
                            <p class="small fw-bold mb-0">48</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="bg-light p-2 rounded-3 text-center">
                            <p class="extra-small text-muted mb-0">Lifts</p>
                            <p class="small fw-bold mb-0">3</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-column">
                        <span class="extra-small text-muted mb-1">Occupancy Rate</span>
                        <span class="small fw-bold">98% Full</span>
                    </div>
                    <a href="units.html"
                        class="btn btn-geist-secondary btn-sm px-4 rounded-pill shadow-sm-hover transition">
                        <i class="bi bi-gear-fill me-1"></i> Manage
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-4">
        <div class="building-card-geist">
            <div class="building-img-overlay"
                style="background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800px&q=80');">
                <span class="building-status-badge text-warning">Pending Audit</span>
            </div>
            <div class="p-4">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                        <h5 class="fw-bold mb-1">Skyline Plaza</h5>
                        <p class="extra-small text-muted mb-0"><i class="bi bi-geo-alt-fill me-1"></i> Block C, Banani,
                            Dhaka</p>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-sm btn-light rounded-circle shadow-sm border" data-bs-toggle="dropdown"
                            title="Expand Actions">
                            <i class="bi bi-three-dots"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end border-0 shadow rounded-4 extra-small p-2">
                            <li><a class="dropdown-item py-2 rounded-3" href="#" data-action="edit" data-id="SP-002"><i
                                        class="bi bi-pencil-square me-2 text-primary"></i> Edit Details</a></li>
                            <li><a class="dropdown-item py-2 rounded-3" href="units.html"><i
                                        class="bi bi-door-open me-2 text-success"></i> View Units</a></li>
                            <li><a class="dropdown-item py-2 rounded-3" href="reports.html"><i
                                        class="bi bi-bar-chart me-2 text-info"></i> Performance Audit</a></li>
                            <li>
                                <hr class="dropdown-divider opacity-50">
                            </li>
                            <li><a class="dropdown-item py-2 rounded-3 text-danger" href="#" data-action="delete"
                                    data-id="SP-002"><i class="bi bi-trash3 me-2"></i> Retire Asset</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row g-2 mb-4">
                    <div class="col-4">
                        <div class="bg-light p-2 rounded-3 text-center">
                            <p class="extra-small text-muted mb-0">Floors</p>
                            <p class="small fw-bold mb-0">15</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="bg-light p-2 rounded-3 text-center">
                            <p class="extra-small text-muted mb-0">Units</p>
                            <p class="small fw-bold mb-0">60</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="bg-light p-2 rounded-3 text-center">
                            <p class="extra-small text-muted mb-0">Lifts</p>
                            <p class="small fw-bold mb-0">4</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-column">
                        <span class="extra-small text-muted mb-1">Occupancy Rate</span>
                        <span class="small fw-bold">82% Full</span>
                    </div>
                    <a href="units.html"
                        class="btn btn-geist-secondary btn-sm px-4 rounded-pill shadow-sm-hover transition">
                        <i class="bi bi-gear-fill me-1"></i> Manage
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Add New Building Placeholder -->
    <div class="col-md-6 col-xl-4 border-dashed rounded-5 d-flex align-items-center justify-content-center p-5"
        data-action="create" data-id="NEW_BUILDING"
        style="border: 2px dashed var(--accents-2); height: 100%; min-height: 400px; cursor: pointer;">
        <div class="text-center">
            <div class="rounded-circle bg-light d-flex align-items-center justify-content-center mx-auto mb-3"
                style="width: 60px; height: 60px;">
                <i class="bi bi-plus-lg fs-2 text-muted"></i>
            </div>
            <h5 class="fw-bold mb-1">Add New Asset</h5>
            <p class="extra-small text-muted">Register a new property into the portfolio.</p>
        </div>
    </div>
</div>
@endsection