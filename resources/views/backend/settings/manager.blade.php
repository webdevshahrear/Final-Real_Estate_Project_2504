@extends('layouts.backend')

@section('content')
<div class="container-fluid py-4">
    <!-- Premium Hero Section -->
    <div class="premium-hero rounded-5 p-5 mb-5 shadow-lg position-relative overflow-hidden" data-aos="zoom-out-up">
        <div class="mesh-grid"></div>
        <div class="floating-blob" style="top: -100px; right: -100px; background: rgba(56, 189, 248, 0.2);"></div>
        
        <div class="position-relative z-1">
            <div class="d-flex align-items-center gap-3 mb-4">
                <span class="badge bg-primary bg-opacity-10 text-primary uppercase-bold px-3 py-2 border border-primary border-opacity-20 shadow-sm">Manager Portal</span>
                <span class="text-white-50 small fw-bold">System Operations Dashboard</span>
            </div>
            <h1 class="display-3 fw-bold text-white tracking-tighter mb-3">Manager <span class="text-info">Settings</span></h1>
            <p class="text-white-50 lead mb-0" style="max-width: 650px; font-size: 1.1rem;">Managing operational defaults, systemic integrity, and high-level security protocols for institutional management.</p>
        </div>
    </div>

    <!-- Infrastructure Intelligence Layer -->
    <div class="row g-4 mb-5">
        <div class="col-lg-8" data-aos="fade-right">
            <div class="glass-card-premium rounded-5 overflow-hidden h-100 shadow-lg border-white border-opacity-10">
                <div class="p-4 border-bottom bg-white bg-opacity-30 d-flex justify-content-between align-items-center backdrop-blur-md">
                    <h5 class="fw-bold mb-0 tracking-tighter">System Integrity Pulse</h5>
                    <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-2 border border-success border-opacity-20 extra-small fw-bold">Nodes: Optimal</span>
                </div>
                <div class="row g-0 h-100">
                    <div class="col-md-7 p-5 border-end border-white border-opacity-20">
                        <div class="mb-5">
                            <label class="uppercase-bold text-muted mb-3 d-block opacity-60">Global API Latency</label>
                            <div class="d-flex align-items-baseline gap-2">
                                <div class="display-3 fw-bold tracking-tighter text-primary-navy">42</div>
                                <span class="fs-4 text-muted fw-bold">ms</span>
                                <span class="badge bg-info bg-opacity-10 text-info extra-small rounded-pill px-2 ms-3">Ultra Fast</span>
                            </div>
                        </div>
                        <div class="p-4 rounded-5 bg-white bg-opacity-50 border border-white shadow-sm-inset">
                            <label class="uppercase-bold text-muted mb-3 d-block opacity-60">Data Sovereignty</label>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="small fw-bold text-primary-navy">Compliance Status</span>
                                <span class="text-success small fw-bold"><i class="bi bi-shield-check me-1"></i> 100% Verified</span>
                            </div>
                            <div class="progress rounded-pill shadow-sm" style="height: 8px;">
                                <div class="progress-bar bg-success shadow-sm" style="width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 p-5 bg-light bg-opacity-20 backdrop-blur-sm">
                        <h6 class="uppercase-bold text-muted mb-5 opacity-60">Resilience Index</h6>
                        <div class="mb-5">
                            <div class="d-flex justify-content-between extra-small mb-3">
                                <span class="fw-bold">Backup Latency</span>
                                <span class="fw-bold text-primary-navy">2h 14m</span>
                            </div>
                            <div class="progress rounded-pill shadow-sm-inset" style="height: 5px;">
                                <div class="progress-bar bg-primary-navy shadow-sm" style="width: 100%;"></div>
                            </div>
                        </div>
                        <div class="mb-0">
                            <div class="d-flex justify-content-between extra-small mb-3">
                                <span class="fw-bold">Recovery Velocity</span>
                                <span class="fw-bold text-primary-navy">4.2 min</span>
                            </div>
                            <div class="progress rounded-pill shadow-sm-inset" style="height: 5px;">
                                <div class="progress-bar bg-info shadow-sm" style="width: 85%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4" data-aos="fade-left">
            <div class="glass-card-premium rounded-5 p-5 h-100 position-relative overflow-hidden shadow-lg border-white border-opacity-10">
                <div class="position-absolute top-0 end-0 p-4 opacity-5">
                    <i class="bi bi-clouds-fill" style="font-size: 10rem;"></i>
                </div>
                <h5 class="fw-bold mb-5 tracking-tighter">Cloud Infrastructure</h5>
                <div class="d-flex align-items-center gap-4 mb-5">
                    <div class="icon-container-premium rounded-4 d-flex align-items-center justify-content-center bg-white shadow-md border-0" style="width: 72px; height: 72px;">
                        <i class="bi bi-cloud-check-fill fs-1 text-primary-navy"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-1 tracking-tighter">AWS Enterprise</h5>
                        <p class="extra-small text-muted mb-0 fw-bold">High-Availability Active</p>
                    </div>
                </div>
                <div class="p-5 rounded-5 bg-white bg-opacity-40 border border-white text-center mt-5 shadow-sm-inset">
                    <p class="uppercase-bold text-muted mb-2 opacity-60">Operational SLA</p>
                    <h2 class="fw-bold tracking-tighter mb-0 text-primary-navy">99.999%</h2>
                    <span class="extra-small text-success fw-bold mt-2 d-block">Industry Leading Uptime</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Configuration Hub -->
    <div class="row g-4" data-aos="fade-up">
        <div class="col-lg-8">
            <div class="glass-card-premium rounded-5 p-5 mb-4 shadow-lg border-white border-opacity-10">
                <h4 class="fw-bold mb-5 tracking-tighter">Institutional Profile</h4>
                <div class="row g-4">
                    <div class="col-md-6">
                        <label class="uppercase-bold text-muted mb-3 d-block opacity-60">Entity Name</label>
                        <input type="text" class="form-control geist-input-premium shadow-sm" value="The Imperial Inc.">
                    </div>
                    <div class="col-md-6">
                        <label class="uppercase-bold text-muted mb-3 d-block opacity-60">Technical HQ Email</label>
                        <input type="email" class="form-control geist-input-premium shadow-sm" value="ops@imperial.os">
                    </div>
                    <div class="col-12 mt-5">
                        <button class="btn premium-btn-dark px-5 py-4 rounded-pill fw-bold shadow-lg transition-hover">
                            <i class="bi bi-cpu-fill me-2"></i> SYNC CORE CONFIGURATION
                        </button>
                    </div>
                </div>
            </div>

            <div class="glass-card-premium rounded-5 p-5 shadow-lg border-white border-opacity-10">
                <h4 class="fw-bold mb-5 tracking-tighter">Communication Infrastructure</h4>
                <div class="list-group list-group-flush bg-transparent">
                    <div class="list-group-item bg-transparent border-white border-opacity-20 px-0 py-4 d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center gap-4">
                            <div class="rounded-circle bg-light d-flex align-items-center justify-content-center border" style="width: 48px; height: 48px;">
                                <i class="bi bi-envelope-at text-primary-navy fs-5"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">SMTP Enterprise Relays</h6>
                                <p class="extra-small text-muted mb-0">Global operational summaries and transactional auditing.</p>
                            </div>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input shadow-sm" type="checkbox" style="width: 3.5rem; height: 1.75rem;" checked>
                        </div>
                    </div>
                    <div class="list-group-item bg-transparent border-0 px-0 py-4 d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center gap-4">
                            <div class="rounded-circle bg-light d-flex align-items-center justify-content-center border" style="width: 48px; height: 48px;">
                                <i class="bi bi-chat-left-dots text-primary-navy fs-5"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">SMS Transit Gateways</h6>
                                <p class="extra-small text-muted mb-0">High-priority emergency alerts and access tokens.</p>
                            </div>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input shadow-sm" type="checkbox" style="width: 3.5rem; height: 1.75rem;" checked>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="glass-card-premium rounded-5 p-5 mb-4 shadow-lg border-white border-opacity-10 h-100-minus-purge">
                <h4 class="fw-bold mb-5 tracking-tighter">System Health Matrix</h4>
                <div class="d-grid gap-4">
                    <div class="d-flex justify-content-between align-items-center p-4 rounded-5 bg-white bg-opacity-40 border border-white shadow-sm transition-hover">
                        <div class="d-flex align-items-center gap-3">
                            <i class="bi bi-database-fill-check text-success"></i>
                            <span class="small fw-bold text-primary-navy">Neural DB</span>
                        </div>
                        <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 border border-success border-opacity-10 extra-small">Synced</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center p-4 rounded-5 bg-white bg-opacity-40 border border-white shadow-sm transition-hover">
                        <div class="d-flex align-items-center gap-3">
                            <i class="bi bi-hdd-network-fill text-primary"></i>
                            <span class="small fw-bold text-primary-navy">Storage Vault</span>
                        </div>
                        <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-3 border border-primary border-opacity-10 extra-small">92% Free</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center p-4 rounded-5 bg-white bg-opacity-40 border border-white shadow-sm transition-hover">
                        <div class="d-flex align-items-center gap-3">
                            <i class="bi bi-diagram-3-fill text-info"></i>
                            <span class="small fw-bold text-primary-navy">API Mesh</span>
                        </div>
                        <span class="badge bg-info bg-opacity-10 text-info rounded-pill px-3 border border-info border-opacity-10 extra-small">Optimized</span>
                    </div>
                </div>
                
                <div class="mt-5 p-5 glass-card-premium rounded-5 border-danger border-opacity-20 shadow-lg bg-danger bg-opacity-5">
                    <h5 class="fw-bold mb-3 text-danger tracking-tighter">System Purge Protocol</h5>
                    <p class="extra-small text-muted mb-4 fw-bold">Warning: Executing these actions will permanently truncate historical state data.</p>
                    <button class="btn btn-danger w-100 rounded-pill py-3 fw-bold shadow-lg transition-hover">
                        <i class="bi bi-trash3-fill me-2"></i> PURGE ALL AUDIT LOGS
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection