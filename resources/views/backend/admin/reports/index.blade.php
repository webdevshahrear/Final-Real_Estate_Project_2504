@extends('layouts.backend')

@section('content')
<div class="container-fluid py-4">
    <!-- Premium Hero Section -->
    <div class="premium-hero rounded-5 p-5 pb-0 mb-5 shadow-lg" data-aos="zoom-out-up">
        <div class="mesh-grid"></div>
        <div class="floating-blob" style="top: -150px; right: -100px; background: rgba(56, 189, 248, 0.2);"></div>
        <div class="floating-blob" style="bottom: -150px; left: -100px; background: rgba(16, 185, 129, 0.15); animation-delay: -5s;"></div>
        
        <div class="position-relative z-1 mb-5">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <span class="pulsing-dot"></span>
                        <span class="uppercase-bold text-white opacity-60">Global Intelligence Matrix v2.0</span>
                    </div>
                    <h1 class="display-2 fw-bold text-white tracking-tighter mb-3">Portfolio <span class="text-info">Command</span></h1>
                    <p class="text-white-50 lead mb-0" style="max-width: 650px; font-size: 1.15rem;">Advanced ecosystem diagnostics and predictive trajectory modeling for Imperial high-value assets.</p>
                </div>
                <div class="col-lg-4 d-none d-lg-block text-end">
                    <div class="glass-card-premium d-inline-block p-4 px-5 rounded-5 text-center border-0" style="background: rgba(255,255,255,0.06); backdrop-filter: blur(30px);">
                        <h6 class="uppercase-bold text-white opacity-40 mb-2">Ecosystem Integrity</h6>
                        <div class="display-5 fw-bold text-success stat-glow">98.2%</div>
                        <div class="extra-small text-info mt-3 fw-bold"><i class="bi bi-shield-check-fill me-1"></i> Root Protocol: Secure</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Data Stream Ticker -->
        <div class="data-ticker">
            <div class="ticker-content">
                @for($i=0; $i<2; $i++)
                <div class="ticker-item"><span class="text-success">●</span> ASSET_LOAD: <strong>0.84ms</strong></div>
                <div class="ticker-item"><span class="text-info">●</span> CAPITAL_FLUX: <strong>+৳2.4M</strong></div>
                <div class="ticker-item"><span class="text-warning">●</span> RISK_VECTOR: <strong>0.04%</strong></div>
                <div class="ticker-item"><span class="text-primary">●</span> COMPLIANCE_SYNC: <strong>100%</strong></div>
                <div class="ticker-item"><span class="text-danger">●</span> THREAT_LEVEL: <strong>ZERO</strong></div>
                <div class="ticker-item"><span class="text-success">●</span> NODES_ACTIVE: <strong>142/142</strong></div>
                @endfor
            </div>
        </div>
    </div>

    <!-- Main Analytics Console -->
    <div class="row g-4 mb-5">
        <div class="col-lg-8" data-aos="fade-right">
            <div class="glass-card-premium rounded-5 p-4 h-100 position-relative overflow-hidden">
                <div class="card-glow-overlay"></div>
                <div class="d-flex justify-content-between align-items-center mb-5 position-relative z-1">
                    <div>
                        <h5 class="fw-bold mb-1 tracking-tighter">Strategic Synthesis</h5>
                        <p class="extra-small text-muted mb-0">Audited executive generation console</p>
                    </div>
                    <div class="px-3 py-1 rounded-pill bg-dark text-white uppercase-bold shadow-lg" style="font-size: 0.55rem;">
                        System Level: Root
                    </div>
                </div>
                
                <div class="row g-4 position-relative z-1">
                    <div class="col-md-4">
                        <div class="p-4 rounded-5 bg-white bg-opacity-40 border border-white border-opacity-60 shadow-sm transition-hover">
                            <label class="uppercase-bold text-muted mb-3 d-block opacity-60">Temporal Range</label>
                            <select class="form-select border-0 bg-transparent p-0 fw-bold small">
                                <option>Fiscal Year 2026</option>
                                <option>Historical Audit</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4 rounded-5 bg-white bg-opacity-40 border border-white border-opacity-60 shadow-sm transition-hover">
                            <label class="uppercase-bold text-muted mb-3 d-block opacity-60">Data Domain</label>
                            <select class="form-select border-0 bg-transparent p-0 fw-bold small">
                                <option>Capital Yield</option>
                                <option>Operational Delta</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4 rounded-5 bg-white bg-opacity-40 border border-white border-opacity-60 shadow-sm transition-hover">
                            <label class="uppercase-bold text-muted mb-3 d-block opacity-60">Export Layer</label>
                            <select class="form-select border-0 bg-transparent p-0 fw-bold small">
                                <option>Encrypted PDF</option>
                                <option>Audit Matrix (JSON)</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <button class="btn premium-btn-dark w-100 mt-5 rounded-5 py-3 fw-bold shadow-lg position-relative overflow-hidden">
                    <span class="position-relative z-1"><i class="bi bi-cpu-fill me-2"></i>SYNTHESIZE EXECUTIVE REPORT</span>
                    <div class="mesh-grid opacity-10"></div>
                </button>
            </div>
        </div>

        <div class="col-lg-4" data-aos="fade-left">
            <div class="glass-card-premium rounded-5 p-4 h-100 position-relative overflow-hidden">
                <div class="card-glow-overlay"></div>
                <h6 class="fw-bold mb-4 d-flex justify-content-between align-items-center position-relative z-1">
                    <span class="tracking-tighter">Revenue Velocity</span>
                    <span class="badge bg-success bg-opacity-10 text-success rounded-pill extra-small px-3 border border-success border-opacity-10">+৳2.4M</span>
                </h6>
                <div class="d-flex align-items-end gap-3 h-150-px mb-4 px-2 position-relative z-1">
                    <div class="flex-grow-1 bg-light rounded-pill position-relative overflow-hidden" style="height: 35%;">
                        <div class="position-absolute bottom-0 w-100 bg-info opacity-40" style="height: 100%;"></div>
                    </div>
                    <div class="flex-grow-1 bg-light rounded-pill position-relative overflow-hidden" style="height: 55%;">
                        <div class="position-absolute bottom-0 w-100 bg-info opacity-60" style="height: 100%;"></div>
                    </div>
                    <div class="flex-grow-1 bg-light rounded-pill position-relative overflow-hidden" style="height: 45%;">
                        <div class="position-absolute bottom-0 w-100 bg-info opacity-40" style="height: 100%;"></div>
                    </div>
                    <div class="flex-grow-1 bg-light rounded-pill position-relative overflow-hidden" style="height: 80%;">
                        <div class="position-absolute bottom-0 w-100 bg-primary opacity-80" style="height: 100%;"></div>
                    </div>
                    <div class="flex-grow-1 bg-light rounded-pill position-relative overflow-hidden" style="height: 100%;">
                        <div class="position-absolute bottom-0 w-100 bg-success shadow-lg" style="height: 100%;"></div>
                    </div>
                </div>
                <div class="d-flex justify-content-between uppercase-bold text-muted px-2 position-relative z-1 opacity-60">
                    <span>JAN</span><span>FEB</span><span>MAR</span><span>APR</span><span>LIVE</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Intelligence Vault -->
    <div class="d-flex justify-content-between align-items-center mb-4" data-aos="fade-up">
        <h5 class="fw-bold mb-0 tracking-tighter">Intelligence Vault</h5>
        <span class="badge bg-light text-dark border extra-small px-3 rounded-pill">Secure Archive</span>
    </div>
    
    <div class="row g-4 mb-5">
        <div class="col-xl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="glass-card-premium rounded-5 p-4 position-relative overflow-hidden h-100">
                <div class="card-glow-overlay"></div>
                
                <!-- Icon & Title Header -->
                <div class="d-flex align-items-center gap-3 mb-4 position-relative z-1">
                    <div class="icon-container-premium rounded-4 d-flex align-items-center justify-content-center text-primary shadow-sm" style="width: 56px; height: 56px; flex-shrink: 0;">
                        <i class="bi bi-bank2 fs-4"></i>
                    </div>
                    <div class="overflow-hidden">
                        <h6 class="fw-bold mb-0 tracking-tighter text-truncate">Consolidated Yield</h6>
                        <p class="extra-small text-muted m-0 text-truncate">Ecosystem Synced</p>
                    </div>
                </div>

                <!-- Main Metric Box -->
                <div class="p-4 rounded-5 bg-white bg-opacity-40 border border-white border-opacity-60 mb-4 shadow-sm-inset position-relative z-1">
                    <p class="uppercase-bold text-muted mb-2 opacity-60">Total Capital Flux</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="fw-bold mb-0 tracking-tighter">৳1.42B</h3>
                        <span class="badge bg-success bg-opacity-10 text-success rounded-pill extra-small px-2 border border-success border-opacity-10">+12.4%</span>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="d-grid gap-2 position-relative z-2">
                    <button class="btn premium-btn-dark rounded-4 py-2 extra-small fw-bold">EXECUTIVE BRIEF</button>
                    <button class="btn btn-white border border-white border-opacity-60 rounded-4 py-2 extra-small fw-bold shadow-sm">AUDIT STREAM</button>
                </div>

                <!-- Decorative Background Icon (Reduced size & Fixed position) -->
                <i class="bi bi-graph-up-arrow position-absolute bottom-0 end-0 opacity-5 text-primary display-2 translate-middle-x mb-n3 me-n3" style="z-index: 0; pointer-events: none;"></i>
            </div>
        </div>

        <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="glass-card-premium rounded-5 p-4 position-relative overflow-hidden h-100">
                <div class="card-glow-overlay" style="background: radial-gradient(circle at top right, rgba(239, 68, 68, 0.1), transparent 70%);"></div>
                
                <div class="d-flex align-items-center gap-3 mb-4 position-relative z-1">
                    <div class="icon-container-premium rounded-4 d-flex align-items-center justify-content-center text-danger shadow-sm" style="width: 56px; height: 56px; flex-shrink: 0;">
                        <i class="bi bi-shield-lock-fill fs-4"></i>
                    </div>
                    <div class="overflow-hidden">
                        <h6 class="fw-bold mb-0 tracking-tighter text-truncate">Global Risk Matrix</h6>
                        <p class="extra-small text-muted m-0 text-truncate">Audited Portfolio</p>
                    </div>
                </div>

                <div class="p-4 rounded-5 bg-white bg-opacity-40 border border-white border-opacity-60 mb-4 shadow-sm-inset position-relative z-1">
                    <p class="uppercase-bold text-muted mb-2 opacity-60">Exposure Index</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="fw-bold mb-0 text-danger tracking-tighter">TIER 1 SAFE</h3>
                        <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill extra-small px-2 border border-danger border-opacity-10">Risk: 0.04%</span>
                    </div>
                </div>

                <div class="d-grid gap-2 position-relative z-2">
                    <button class="btn premium-btn-dark rounded-4 py-2 extra-small fw-bold">THREAT ANALYSIS</button>
                    <button class="btn btn-white border border-white border-opacity-60 rounded-4 py-2 extra-small fw-bold shadow-sm">LOGS</button>
                </div>

                <i class="bi bi-shield-vibration position-absolute bottom-0 end-0 opacity-5 text-danger display-2 translate-middle-x mb-n3 me-n3" style="z-index: 0; pointer-events: none;"></i>
            </div>
        </div>

        <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
            <div class="glass-card-premium rounded-5 p-4 position-relative overflow-hidden h-100">
                <div class="card-glow-overlay" style="background: radial-gradient(circle at top right, rgba(16, 185, 129, 0.1), transparent 70%);"></div>
                
                <div class="d-flex align-items-center gap-3 mb-4 position-relative z-1">
                    <div class="icon-container-premium rounded-4 d-flex align-items-center justify-content-center text-success shadow-sm" style="width: 56px; height: 56px; flex-shrink: 0;">
                        <i class="bi bi-lightning-charge-fill fs-4"></i>
                    </div>
                    <div class="overflow-hidden">
                        <h6 class="fw-bold mb-0 tracking-tighter text-truncate">System Pulse</h6>
                        <p class="extra-small text-muted m-0 text-truncate">Ecosystem Verified</p>
                    </div>
                </div>

                <div class="p-4 rounded-5 bg-white bg-opacity-40 border border-white border-opacity-60 mb-4 shadow-sm-inset position-relative z-1">
                    <p class="uppercase-bold text-muted mb-2 opacity-60">Operational Load</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="fw-bold mb-0 text-success tracking-tighter">99.9%</h3>
                        <span class="badge bg-success bg-opacity-10 text-success rounded-pill extra-small px-2 border border-success border-opacity-10">Optimized</span>
                    </div>
                </div>

                <div class="d-grid gap-2 position-relative z-2">
                    <button class="btn premium-btn-dark rounded-4 py-2 extra-small fw-bold">PERFORMANCE</button>
                    <button class="btn btn-white border border-white border-opacity-60 rounded-4 py-2 extra-small fw-bold shadow-sm">NODES</button>
                </div>

                <i class="bi bi-cpu position-absolute bottom-0 end-0 opacity-5 text-success display-2 translate-middle-x mb-n4 me-n4" style="z-index: 0; pointer-events: none;"></i>
            </div>
        </div>
    </div>
</div>
@endsection