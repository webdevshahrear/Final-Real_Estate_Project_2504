@extends('layouts.backend')

@section('content')
<div class="container-fluid py-4">
    <!-- Premium Hero Section -->
    <div class="premium-hero rounded-5 p-5 mb-5 shadow-lg" data-aos="zoom-out-up">
        <div class="mesh-grid"></div>
        <div class="floating-blob" style="top: -100px; right: -100px; background: rgba(56, 189, 248, 0.15);"></div>
        
        <div class="position-relative z-1 d-flex justify-content-between align-items-end">
            <div>
                <div class="d-flex align-items-center gap-3 mb-4">
                    <span class="badge bg-danger bg-opacity-10 text-danger uppercase-bold px-3 py-2 border border-danger border-opacity-20">Live Security Hub</span>
                    <span class="text-white-50 small">Encrypted Guest Ledger</span>
                </div>
                <h1 class="display-3 fw-bold text-white tracking-tighter mb-3">Visitor <span class="text-info">Log</span></h1>
                <p class="text-white-50 lead mb-0" style="max-width: 600px;">Real-time tracking of guest entries, vehicle identities, and authorized checkpoints.</p>
            </div>
            <div class="d-flex gap-3">
                <button class="btn btn-info px-4 py-3 rounded-pill fw-bold shadow-lg" data-action="create" data-id="NEW_VISITOR">
                    <i class="bi bi-person-plus-fill me-2"></i> REGISTER GUEST
                </button>
                <button class="btn btn-white bg-opacity-10 text-white border-white border-opacity-20 px-4 py-3 rounded-pill fw-bold shadow-lg">
                    <i class="bi bi-cloud-download me-2"></i> EXPORT LOGS
                </button>
            </div>
        </div>
    </div>

    <!-- Security KPIs -->
    <div class="row g-4 mb-5" data-aos="fade-up">
        <div class="col-md-3">
            <div class="glass-card-premium rounded-5 p-4">
                <p class="uppercase-bold text-muted mb-2 opacity-60">Checked In</p>
                <div class="d-flex align-items-end gap-2">
                    <h2 class="fw-bold mb-0 tracking-tighter text-primary">12</h2>
                    <span class="badge bg-primary bg-opacity-10 text-primary extra-small mb-1">Active</span>
                </div>
                <p class="extra-small text-muted mt-2 mb-0">Currently within perimeter</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="glass-card-premium rounded-5 p-4">
                <p class="uppercase-bold text-muted mb-2 opacity-60">Total Today</p>
                <h2 class="fw-bold mb-0 tracking-tighter">85</h2>
                <p class="extra-small text-muted mt-2 mb-0">Verified entry events</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="glass-card-premium rounded-5 p-4 border-warning border-opacity-20">
                <p class="uppercase-bold text-muted mb-2 opacity-60">Awaiting Auth</p>
                <h2 class="fw-bold mb-0 tracking-tighter text-warning">3</h2>
                <p class="extra-small text-warning mt-2 mb-0">Pending resident clearance</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="glass-card-premium rounded-5 p-4">
                <p class="uppercase-bold text-muted mb-2 opacity-60">Vehicles In</p>
                <h2 class="fw-bold mb-0 tracking-tighter">42</h2>
                <p class="extra-small text-muted mt-2 mb-0">RFID signal detected</p>
            </div>
        </div>
    </div>

    <!-- Visitor Stream -->
    <div class="glass-card-premium rounded-5 p-4" data-aos="fade-up">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <h5 class="fw-bold mb-0 tracking-tighter">Live Entry Stream</h5>
            <div class="input-group" style="max-width: 350px;">
                <span class="input-group-text bg-white border-0 rounded-start-pill ps-4 shadow-sm"><i class="bi bi-search text-muted"></i></span>
                <input type="text" class="form-control border-0 rounded-end-pill py-3 px-3 shadow-sm extra-small" placeholder="Scan Badge or Search ID...">
            </div>
        </div>
        
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr class="uppercase-bold text-muted opacity-50">
                        <th class="ps-4">Visitor Identity</th>
                        <th>Objective & Target</th>
                        <th>Vehicle Hash</th>
                        <th>Check-In</th>
                        <th>Status</th>
                        <th class="text-end pe-4">Operations</th>
                    </tr>
                </thead>
                <tbody class="border-top-0">
                    <tr class="position-relative">
                        <td class="ps-4">
                            <div class="d-flex align-items-center gap-3">
                                <div class="rounded-4 bg-primary-navy d-flex align-items-center justify-content-center text-white fw-bold shadow" style="width: 45px; height: 45px;">JK</div>
                                <div>
                                    <h6 class="mb-0 small fw-bold">Junaid Khan</h6>
                                    <p class="mb-0 extra-small text-muted">Foodpanda Delivery</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="small fw-bold">Tower A • Apt 902</span>
                            <p class="extra-small text-muted mb-0">Service Logistics</p>
                        </td>
                        <td><span class="badge bg-white text-dark border extra-small px-3 py-2 rounded-pill shadow-sm">DHAKA-12-4501</span></td>
                        <td>
                            <div class="small fw-bold text-primary-navy">12:30 PM</div>
                            <div class="extra-small text-muted">15 mins elapsed</div>
                        </td>
                        <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-2 border border-success border-opacity-10">INSIDE</span></td>
                        <td class="text-end pe-4">
                            <div class="d-flex justify-content-end gap-2">
                                <button class="btn btn-white btn-sm border rounded-pill px-3 extra-small fw-bold shadow-sm">VERIFY</button>
                                <button class="btn btn-outline-danger btn-sm rounded-pill px-3 extra-small fw-bold shadow-sm">CHECK OUT</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="ps-4">
                            <div class="d-flex align-items-center gap-3">
                                <div class="rounded-4 bg-light d-flex align-items-center justify-content-center text-dark fw-bold shadow-sm" style="width: 45px; height: 45px;">MS</div>
                                <div>
                                    <h6 class="mb-0 small fw-bold">Mahmuda Sultana</h6>
                                    <p class="mb-0 extra-small text-muted">Personal Guest</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="small fw-bold">Tower B • Apt 405</span>
                            <p class="extra-small text-muted mb-0">Resident Visit</p>
                        </td>
                        <td><span class="extra-small text-muted opacity-50">PEDESTRIAN</span></td>
                        <td>
                            <div class="small fw-bold text-muted">11:15 AM</div>
                            <div class="extra-small text-muted">1h 15m duration</div>
                        </td>
                        <td><span class="badge bg-secondary bg-opacity-10 text-secondary rounded-pill px-3 py-2 border border-secondary border-opacity-10">DEPARTED</span></td>
                        <td class="text-end pe-4">
                            <button class="btn btn-white btn-sm border rounded-pill px-3 extra-small fw-bold shadow-sm">VIEW HISTORY</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection