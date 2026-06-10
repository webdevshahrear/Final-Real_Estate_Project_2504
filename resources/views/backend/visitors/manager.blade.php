@extends('layouts.backend')

@section('content')
    <!-- Premium Hero Section -->
    <div class="premium-hero rounded-5 p-5 mb-5 shadow-lg position-relative overflow-hidden" data-aos="zoom-out-up">
        <div class="mesh-grid"></div>
        <div class="floating-blob" style="top: -100px; right: -100px; background: rgba(56, 189, 248, 0.15);"></div>
        
        <div class="position-relative z-1 d-flex justify-content-between align-items-end">
            <div>
                <div class="d-flex align-items-center gap-3 mb-4">
                    <span class="badge bg-primary bg-opacity-10 text-primary uppercase-bold px-3 py-2 border border-primary border-opacity-20 shadow-sm">Security Node</span>
                    <span class="text-white-50 small fw-bold">Live Entry Protocols</span>
                </div>
                <h1 class="display-3 fw-bold text-white tracking-tighter mb-3">Security & <span class="text-info">Visitor Log</span></h1>
                <p class="text-white-50 lead mb-0" style="max-width: 600px;">Real-time tracking of guest entries, vehicle identity verification, and multi-layer authorization governance.</p>
            </div>
            <div class="d-flex gap-3">
                <button class="btn btn-info px-4 py-3 rounded-pill fw-bold shadow-lg transition-hover" data-action="create" data-id="VISITOR">
                    <i class="bi bi-person-plus-fill me-2"></i> PROVISION GUEST
                </button>
                <button class="btn btn-white border-0 bg-white bg-opacity-10 text-white backdrop-blur-md px-4 py-3 rounded-pill fw-bold shadow-lg transition-hover" data-action="export">
                    <i class="bi bi-file-earmark-spreadsheet-fill me-2 text-success"></i> GENERATE AUDIT
                </button>
            </div>
        </div>
    </div>

            <!-- Security KPIs -->
            <div class="row g-4 mb-5" data-aos="fade-up">
                <div class="col-md-3">
                    <div class="bg-white border rounded-4 shadow-sm p-4 transition-hover translate-y-hover">
                        <p class="text-muted extra-small fw-bold uppercase mb-2 opacity-50">Active Guests</p>
                        <div class="d-flex align-items-baseline gap-2">
                            <h3 class="fw-bold mb-0 text-primary-navy">12</h3>
                            <span class="badge bg-primary-subtle text-primary extra-small rounded-pill"><i class="bi bi-geo-alt-fill"></i> Inside</span>
                        </div>
                        <p class="extra-small text-muted mt-2 mb-0">Live presence in units</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-white border rounded-4 shadow-sm p-4 transition-hover translate-y-hover">
                        <p class="text-muted extra-small fw-bold uppercase mb-2 opacity-50">Total Entries</p>
                        <h3 class="fw-bold mb-0 text-primary-navy">85</h3>
                        <p class="text-muted extra-small mt-2 mb-0">Verified identity logs today</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-white border rounded-4 shadow-sm p-4 border-warning transition-hover translate-y-hover">
                        <p class="text-muted extra-small fw-bold uppercase mb-2 opacity-50">Awaiting Auth</p>
                        <div class="d-flex align-items-baseline gap-2">
                            <h3 class="fw-bold mb-0 text-warning">3</h3>
                            <div class="spinner-grow text-warning" style="width: 10px; height: 10px;"></div>
                        </div>
                        <p class="text-warning extra-small mt-2 mb-0">Pending resident clearance</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-white border rounded-4 shadow-sm p-4 transition-hover translate-y-hover">
                        <p class="text-muted extra-small fw-bold uppercase mb-2 opacity-50">Vehicles Logged</p>
                        <h3 class="fw-bold mb-0 text-primary-navy">42</h3>
                        <p class="text-muted extra-small mt-2 mb-0">RFID & plate recognition active</p>
                    </div>
                </div>
            </div>

            <!-- Visitor Table -->
            <div class="bg-white border rounded-4 shadow-sm p-4" data-aos="fade-up">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h6 class="fw-bold mb-0">Live Entry Protocol Stream</h6>
                    <div class="input-group" style="max-width: 320px;">
                        <span class="input-group-text bg-light border-end-0 rounded-start-4 shadow-sm-inset"><i class="bi bi-search text-muted small"></i></span>
                        <input type="text" class="form-control bg-light border-start-0 extra-small rounded-end-4 shadow-sm-inset" placeholder="Search Visitor / Vehicle ID...">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle custom-table-geist">
                        <thead>
                            <tr class="extra-small text-muted uppercase">
                                <th>Visitor</th>
                                <th>Purpose & Destination</th>
                                <th>Vehicle #</th>
                                <th>Check In</th>
                                <th>Duration</th>
                                <th>Status</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                                <tbody>
                                    <tr class="transition">
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="profile-avatar shadow-sm" style="width: 42px; height: 42px; font-size: 14px; background: var(--geist-navy);">JK</div>
                                                <div>
                                                    <h6 class="mb-0 small fw-bold text-primary-navy">Junaid Khan</h6>
                                                    <p class="mb-0 extra-small text-muted">Food Delivery (Foodpanda)</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <span class="small fw-bold text-primary-navy">Tower A • Apt 902</span>
                                                <span class="extra-small text-muted opacity-75">Delivery Protocol</span>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-light text-dark extra-small rounded-pill px-3 border shadow-sm font-mono">DHAKA-12-4501</span></td>
                                        <td><span class="small fw-bold text-primary-navy">12:30 PM</span></td>
                                        <td><span class="extra-small text-muted"><i class="bi bi-clock me-1"></i> 15m ago</span></td>
                                        <td><span class="badge bg-success-subtle text-success extra-small rounded-pill px-3 shadow-sm border border-success border-opacity-10">INSIDE</span></td>
                                        <td class="text-end">
                                            <div class="d-flex justify-content-end gap-2">
                                                <button class="btn btn-sm btn-white border rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Verify Identity"><i class="bi bi-person-badge small"></i></button>
                                                <button class="btn btn-sm btn-white border rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Security Remark"><i class="bi bi-chat-left-text small"></i></button>
                                                <button class="btn btn-primary-navy rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Force Checkout"><i class="bi bi-box-arrow-right small"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="transition">
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="profile-avatar shadow-sm" style="width: 42px; height: 42px; font-size: 14px;">MS</div>
                                                <div>
                                                    <h6 class="mb-0 small fw-bold text-primary-navy">Mahmuda Sultana</h6>
                                                    <p class="mb-0 extra-small text-muted">Guest of Resident</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <span class="small fw-bold text-primary-navy">Tower B • Apt 405</span>
                                                <span class="extra-small text-muted opacity-75">Personal Visit</span>
                                            </div>
                                        </td>
                                        <td><span class="extra-small text-muted opacity-50">Pedestrian</span></td>
                                        <td><span class="small fw-bold text-primary-navy">11:15 AM</span></td>
                                        <td><span class="extra-small text-muted"><i class="bi bi-clock me-1"></i> 1h 15m</span></td>
                                        <td><span class="badge bg-secondary-subtle text-secondary extra-small rounded-pill px-3 shadow-sm">CHECKED OUT</span></td>
                                        <td class="text-end">
                                            <div class="d-flex justify-content-end gap-2">
                                                <button class="btn btn-sm btn-white border rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="View History"><i class="bi bi-eye small"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                    </table>
                </div>
            </div>
@endsection