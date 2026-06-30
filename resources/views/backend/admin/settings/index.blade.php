@extends('layouts.backend')

@section('content')
<div class="container-fluid py-4">
    <!-- Premium Hero Section -->
    <div class="premium-hero rounded-5 p-5 mb-5 shadow-lg" data-aos="zoom-out-up">
        <div class="mesh-grid"></div>
        <div class="floating-blob" style="top: -100px; right: -100px; background: rgba(56, 189, 248, 0.15);"></div>
        
        <div class="position-relative z-1">
            <div class="d-flex align-items-center gap-3 mb-4">
                <span class="badge bg-info bg-opacity-10 text-info uppercase-bold px-3 py-2 border border-info border-opacity-20">System Core</span>
                <span class="text-white-50 small">Protocol Version 8.4.2</span>
            </div>
            <h1 class="display-3 fw-bold text-white tracking-tighter mb-3">General <span class="text-info">Configuration</span></h1>
            <p class="text-white-50 lead mb-0" style="max-width: 600px;">Orchestrating the fundamental parameters and systemic integrity of the Imperial OS ecosystem.</p>
        </div>
    </div>

    <!-- Infrastructure Intelligence Layer -->
    <div class="row g-4 mb-5">
        <div class="col-lg-8" data-aos="fade-right">
            <div class="glass-card-premium rounded-5 overflow-hidden h-100">
                <div class="p-4 border-bottom bg-white bg-opacity-30 d-flex justify-content-between align-items-center">
                    <h6 class="fw-bold mb-0 tracking-tighter">System Integrity Pulse</h6>
                    <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 border border-success border-opacity-10 extra-small">Nodes: Optimal</span>
                </div>
                <div class="row g-0 h-100">
                    <div class="col-md-7 p-4 border-end border-white">
                        <div class="mb-4">
                            <label class="uppercase-bold text-muted mb-2 opacity-60">Global API Latency</label>
                            <div class="display-4 fw-bold tracking-tighter text-primary-navy">42<span class="fs-4 text-muted ms-2">ms</span></div>
                            <div class="d-flex align-items-center gap-2 text-success extra-small mt-2">
                                <i class="bi bi-activity"></i>
                                <span>Real-time optimization active via Cloudflare Edge</span>
                            </div>
                        </div>
                        <div class="p-3 rounded-4 bg-white bg-opacity-40 border border-white">
                            <label class="uppercase-bold text-muted mb-2 opacity-60">Data Sovereignty</label>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="small fw-bold">Compliance Status</span>
                                <span class="text-success small fw-bold">100% Verified</span>
                            </div>
                            <div class="progress rounded-pill" style="height: 6px;">
                                <div class="progress-bar bg-success" style="width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 p-4 bg-light bg-opacity-30">
                        <h6 class="uppercase-bold text-muted mb-4 opacity-60">Redundancy Matrix</h6>
                        <div class="mb-4">
                            <div class="d-flex justify-content-between extra-small mb-2">
                                <span>Main Storage Sync</span>
                                <span class="fw-bold">Active</span>
                            </div>
                            <div class="progress rounded-pill" style="height: 4px;">
                                <div class="progress-bar bg-info" style="width: 100%;"></div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="d-flex justify-content-between extra-small mb-2">
                                <span>Snapshot Integrity</span>
                                <span class="fw-bold">99.8%</span>
                            </div>
                            <div class="progress rounded-pill" style="height: 4px;">
                                <div class="progress-bar bg-primary" style="width: 90%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4" data-aos="fade-left">
            <div class="glass-card-premium rounded-5 p-4 h-100 position-relative overflow-hidden">
                <div class="position-absolute top-0 end-0 p-4 opacity-10">
                    <i class="bi bi-cloud-check display-1"></i>
                </div>
                <h6 class="fw-bold mb-4 tracking-tighter">Cloud Footprint</h6>
                <div class="d-flex align-items-center gap-4 mb-4">
                    <div class="icon-container-premium rounded-4 d-flex align-items-center justify-content-center bg-white shadow-sm" style="width: 64px; height: 64px;">
                        <i class="bi bi-clouds-fill fs-2 text-info"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">AWS Multi-Region</h6>
                        <p class="extra-small text-muted mb-0">High-Availability Active</p>
                    </div>
                </div>
                <div class="p-4 rounded-5 bg-white bg-opacity-40 border border-white text-center mt-5">
                    <p class="uppercase-bold text-muted mb-1 opacity-60">SLA Commitment</p>
                    <h3 class="fw-bold tracking-tighter mb-0">99.99%</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Configuration Hub -->
    <div class="row g-4" data-aos="fade-up">
        <div class="col-lg-8">
            <div class="glass-card-premium rounded-5 p-4 mb-4">
                <h5 class="fw-bold mb-4 tracking-tighter">Profile Architecture</h5>
                <div class="row g-4">
                    <div class="col-md-6">
                        <label class="uppercase-bold text-muted mb-2 d-block opacity-60">Company Identifier</label>
                        <input type="text" class="form-control geist-input-premium" value="The Imperial Inc.">
                    </div>
                    <div class="col-md-6">
                        <label class="uppercase-bold text-muted mb-2 d-block opacity-60">Strategic Contact Email</label>
                        <input type="email" class="form-control geist-input-premium" value="ops@imperial.os">
                    </div>
                    <div class="col-12 mt-4">
                        <button class="btn premium-btn-dark px-5 py-3 rounded-pill fw-bold shadow-lg">
                            <i class="bi bi-shield-check me-2"></i> COMMIT CORE CHANGES
                        </button>
                    </div>
                </div>
            </div>

            <div class="glass-card-premium rounded-5 p-4">
                <h5 class="fw-bold mb-4 tracking-tighter">Communication Protocols</h5>
                <div class="list-group list-group-flush bg-transparent">
                    <div class="list-group-item bg-transparent border-white border-opacity-20 px-0 py-4 d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fw-bold mb-1">Neural Email Dispatch</h6>
                            <p class="extra-small text-muted mb-0">Automated systemic summaries and audit trails.</p>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" style="width: 3rem; height: 1.5rem;" checked>
                        </div>
                    </div>
                    <div class="list-group-item bg-transparent border-0 px-0 py-4 d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fw-bold mb-1">SMS Secure Gateway</h6>
                            <p class="extra-small text-muted mb-0">Direct cellular alerts for critical unit maintenance.</p>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" style="width: 3rem; height: 1.5rem;" checked>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="glass-card-premium rounded-5 p-4 mb-4">
                <h5 class="fw-bold mb-4 tracking-tighter">Ecosystem Health</h5>
                <div class="d-grid gap-3">
                    <div class="d-flex justify-content-between align-items-center p-3 rounded-4 bg-white bg-opacity-30 border border-white">
                        <span class="small fw-bold">Neural DB</span>
                        <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 border border-success border-opacity-10">Synced</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center p-3 rounded-4 bg-white bg-opacity-30 border border-white">
                        <span class="small fw-bold">Storage Vault</span>
                        <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-3 border border-primary border-opacity-10">92% Free</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center p-3 rounded-4 bg-white bg-opacity-30 border border-white">
                        <span class="small fw-bold">API Mesh</span>
                        <span class="badge bg-info bg-opacity-10 text-info rounded-pill px-3 border border-info border-opacity-10">Optimized</span>
                    </div>
                </div>
            </div>

            <div class="glass-card-premium rounded-5 p-4 border-danger border-opacity-20 shadow-lg">
                <h5 class="fw-bold mb-3 text-danger tracking-tighter">System Purge Protocol</h5>
                <p class="extra-small text-muted mb-4">Executing these actions will permanently truncate historical state data.</p>
                <button class="btn btn-outline-danger w-100 rounded-pill py-3 extra-small fw-bold shadow-sm">
                    <i class="bi bi-trash3-fill me-2"></i> PURGE ALL AUDIT LOGS
                </button>
            </div>
        </div>
    </div>
</div>
@endsection