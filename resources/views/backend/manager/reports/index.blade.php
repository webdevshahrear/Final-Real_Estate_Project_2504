@extends('layouts.backend')

@section('content')
<div class="container-fluid py-4">
    <!-- Premium Hero Section -->
    <div class="premium-hero rounded-5 p-5 pb-0 mb-5 shadow-lg overflow-hidden position-relative" data-aos="zoom-out-up">
        <div class="mesh-grid"></div>
        <div class="floating-blob" style="top: -150px; right: -100px; background: rgba(56, 189, 248, 0.25);"></div>
        <div class="floating-blob" style="bottom: -150px; left: -100px; background: rgba(16, 185, 129, 0.2); animation-delay: -5s;"></div>
        
        <div class="position-relative z-1 mb-5">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <span class="pulsing-dot" style="background: #38bdf8;"></span>
                        <span class="uppercase-bold text-white opacity-60">Executive Intelligence Console</span>
                    </div>
                    <h1 class="display-1 fw-bold text-white tracking-tighter mb-3">Manager <span class="text-info">Analytics</span></h1>
                    <p class="text-white-50 lead mb-0" style="max-width: 650px; font-size: 1.25rem;">Transforming raw operational data into high-fidelity strategic insights with zero latency and neural-precision auditing.</p>
                </div>
                <div class="col-lg-4 d-none d-xl-block text-end">
                    <div class="glass-card-premium d-inline-block p-4 px-5 rounded-5 text-center border-0 shadow-lg" style="background: rgba(255,255,255,0.06); backdrop-filter: blur(40px);">
                        <h6 class="uppercase-bold text-white opacity-40 mb-2">Live Neural Sync</h6>
                        <div class="d-flex align-items-center gap-3 justify-content-center">
                            <div class="spinner-grow spinner-grow-sm text-success" style="width: 12px; height: 12px;"></div>
                            <span class="small fw-bold text-white">Status: Optimized</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Data Stream Ticker -->
        <div class="data-ticker border-top border-white border-opacity-10 py-3">
            <div class="ticker-content">
                @for($i=0; $i<3; $i++)
                <div class="ticker-item"><span class="text-success">●</span> OPS_EFFICIENCY: <strong>94.2%</strong></div>
                <div class="ticker-item"><span class="text-info">●</span> SYNC_DELAY: <strong>0.12ms</strong></div>
                <div class="ticker-item"><span class="text-warning">●</span> PENDING_AUDITS: <strong>3</strong></div>
                <div class="ticker-item"><span class="text-primary">●</span> RESOURCE_LOAD: <strong>STABLE</strong></div>
                <div class="ticker-item text-white-50">|</div>
                @endfor
            </div>
        </div>
    </div>

    <!-- Intelligence Builder & Visualization Row -->
    <div class="row g-4 mb-5">
        <div class="col-lg-7" data-aos="fade-right">
            <div class="glass-card-premium rounded-5 p-5 h-100 position-relative overflow-hidden shadow-lg border-white border-opacity-10">
                <div class="card-glow-overlay"></div>
                <div class="d-flex justify-content-between align-items-center mb-5 position-relative z-1">
                    <div>
                        <h4 class="fw-bold mb-1 tracking-tighter">Intelligence Synthesis Control</h4>
                        <p class="small text-muted mb-0">Configure multi-dimensional data aggregation protocols</p>
                    </div>
                    <span class="badge bg-dark rounded-pill extra-small px-3 py-1 shadow-lg border border-white border-opacity-10">Engine v2.5 Premium</span>
                </div>
                
                <div class="row g-4 position-relative z-1">
                    <div class="col-md-4">
                        <div class="p-4 rounded-5 bg-white bg-opacity-40 border border-white border-opacity-60 shadow-sm transition-hover translate-y-hover">
                            <label class="uppercase-bold text-muted mb-3 d-block opacity-60">Temporal Range</label>
                            <select class="form-select border-0 bg-transparent p-0 fw-bold small">
                                <option>Fiscal Quarter (Q1)</option>
                                <option>Annual Synthesis</option>
                                <option>Real-time Window</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4 rounded-5 bg-white bg-opacity-40 border border-white border-opacity-60 shadow-sm transition-hover translate-y-hover">
                            <label class="uppercase-bold text-muted mb-3 d-block opacity-60">Intelligence Axis</label>
                            <select class="form-select border-0 bg-transparent p-0 fw-bold small">
                                <option>Yield & Efficiency</option>
                                <option>Resolution Matrix</option>
                                <option>Operational Strain</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4 rounded-5 bg-white bg-opacity-40 border border-white border-opacity-60 shadow-sm transition-hover translate-y-hover">
                            <label class="uppercase-bold text-muted mb-3 d-block opacity-60">Output Vector</label>
                            <select class="form-select border-0 bg-transparent p-0 fw-bold small">
                                <option>Cinematic Archive</option>
                                <option>Raw Stream (JSON)</option>
                                <option>Visual Dashboard</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <button class="btn premium-btn-dark w-100 mt-5 rounded-5 py-4 fw-bold shadow-lg position-relative overflow-hidden transition-hover">
                    <span class="position-relative z-1"><i class="bi bi-cpu me-2"></i> EXECUTE SYNTHETIC COMPILATION</span>
                    <div class="mesh-grid opacity-10"></div>
                </button>
            </div>
        </div>

        <div class="col-lg-5" data-aos="fade-left">
            <div class="glass-card-premium rounded-5 p-5 h-100 position-relative overflow-hidden shadow-lg border-white border-opacity-10">
                <div class="card-glow-overlay" style="background: radial-gradient(circle at top right, rgba(56, 189, 248, 0.2), transparent 70%);"></div>
                <h5 class="fw-bold mb-5 d-flex justify-content-between align-items-center position-relative z-1">
                    <span class="tracking-tighter">Historical Yield Vector</span>
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-success bg-opacity-10 text-success rounded-pill extra-small px-3 border border-success border-opacity-10">+12.4%</span>
                    </div>
                </h5>
                <div class="h-150-px d-flex align-items-end gap-3 mb-5 px-2 position-relative z-1">
                    <div class="flex-grow-1 bg-light rounded-pill position-relative overflow-hidden shadow-sm transition-hover" style="height: 45%;">
                        <div class="position-absolute bottom-0 w-100 bg-info opacity-40" style="height: 100%;"></div>
                    </div>
                    <div class="flex-grow-1 bg-light rounded-pill position-relative overflow-hidden shadow-sm transition-hover" style="height: 65%;">
                        <div class="position-absolute bottom-0 w-100 bg-info opacity-60" style="height: 100%;"></div>
                    </div>
                    <div class="flex-grow-1 bg-light rounded-pill position-relative overflow-hidden shadow-sm transition-hover" style="height: 55%;">
                        <div class="position-absolute bottom-0 w-100 bg-info opacity-40" style="height: 100%;"></div>
                    </div>
                    <div class="flex-grow-1 bg-light rounded-pill position-relative overflow-hidden shadow-sm transition-hover" style="height: 90%;">
                        <div class="position-absolute bottom-0 w-100 bg-primary opacity-80" style="height: 100%;"></div>
                    </div>
                    <div class="flex-grow-1 bg-light rounded-pill position-relative overflow-hidden shadow-lg transition-hover" style="height: 75%;">
                        <div class="position-absolute bottom-0 w-100 bg-success shadow-lg" style="height: 100%;">
                            <div class="position-absolute top-0 start-0 w-100 h-100 bg-white opacity-20"></div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between uppercase-bold text-muted px-2 position-relative z-1 opacity-60" style="font-size: 0.6rem;">
                    <span>JAN</span><span>FEB</span><span>MAR</span><span>APR</span><span>MAY</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Intelligence Vault -->
    <div class="d-flex justify-content-between align-items-center mb-5 mt-5" data-aos="fade-up">
        <h3 class="fw-bold mb-0 tracking-tighter">Intelligence Vault</h3>
        <div class="d-flex gap-2">
            <span class="badge bg-light text-dark border extra-small px-3 rounded-pill shadow-sm">Secure Archive</span>
            <span class="badge bg-primary text-white border-0 extra-small px-3 rounded-pill shadow-sm">LIVE STREAM</span>
        </div>
    </div>
    
    <div class="row g-4 mb-5">
        <!-- Financial Card -->
        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="glass-card-premium rounded-5 p-5 position-relative overflow-hidden h-100 shadow-lg border-white border-opacity-10 transition-hover translate-y-hover">
                <div class="card-glow-overlay" style="background: radial-gradient(circle at top right, rgba(16, 185, 129, 0.15), transparent 70%);"></div>
                
                <div class="d-flex align-items-center gap-4 mb-5 position-relative z-1">
                    <div class="icon-container-premium rounded-4 d-flex align-items-center justify-content-center text-success shadow-md" style="width: 64px; height: 64px; flex-shrink: 0; background: #fff;">
                        <i class="bi bi-currency-dollar fs-3"></i>
                    </div>
                    <div class="overflow-hidden">
                        <h5 class="fw-bold mb-0 tracking-tighter text-truncate">Financial Yield Sync</h5>
                        <p class="extra-small text-muted m-0 text-truncate">Audited 12 mins ago</p>
                    </div>
                </div>

                <div class="p-4 rounded-5 bg-white bg-opacity-40 border border-white border-opacity-60 mb-5 shadow-sm-inset position-relative z-1">
                    <p class="uppercase-bold text-muted mb-3 opacity-60">Key Determinant</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <h2 class="fw-bold mb-0 tracking-tighter text-primary-navy">৳12.8M</h2>
                        <span class="badge bg-success bg-opacity-10 text-success rounded-pill extra-small px-3 py-1 border border-success border-opacity-10">+4.2%</span>
                    </div>
                </div>

                <div class="d-grid gap-3 position-relative z-2">
                    <button class="btn premium-btn-dark rounded-pill py-3 fw-bold shadow-lg">RETRIEVE STATEMENT</button>
                    <button class="btn btn-white border border-white border-opacity-60 rounded-pill py-3 extra-small fw-bold shadow-sm transition-hover">VIEW RAW SYNC</button>
                </div>
            </div>
        </div>

        <!-- Operational Card -->
        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="glass-card-premium rounded-5 p-5 position-relative overflow-hidden h-100 shadow-lg border-white border-opacity-10 transition-hover translate-y-hover">
                <div class="card-glow-overlay" style="background: radial-gradient(circle at top right, rgba(56, 189, 248, 0.15), transparent 70%);"></div>
                
                <div class="d-flex align-items-center gap-4 mb-5 position-relative z-1">
                    <div class="icon-container-premium rounded-4 d-flex align-items-center justify-content-center text-primary shadow-md" style="width: 64px; height: 64px; flex-shrink: 0; background: #fff;">
                        <i class="bi bi-speedometer2 fs-3"></i>
                    </div>
                    <div class="overflow-hidden">
                        <h5 class="fw-bold mb-0 tracking-tighter text-truncate">Operational Latency</h5>
                        <p class="extra-small text-muted m-0 text-truncate">System Verified</p>
                    </div>
                </div>

                <div class="p-4 rounded-5 bg-white bg-opacity-40 border border-white border-opacity-60 mb-5 shadow-sm-inset position-relative z-1">
                    <p class="uppercase-bold text-muted mb-3 opacity-60">Resolution TAT</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <h2 class="fw-bold mb-0 tracking-tighter text-primary-navy">14.2m</h2>
                        <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill extra-small px-3 py-1 border border-primary border-opacity-10">Optimal</span>
                    </div>
                </div>

                <div class="d-grid gap-3 position-relative z-2">
                    <button class="btn premium-btn-dark rounded-pill py-3 fw-bold shadow-lg">PERFORMANCE MATRIX</button>
                    <button class="btn btn-white border border-white border-opacity-60 rounded-pill py-3 extra-small fw-bold shadow-sm transition-hover">AUDIT LOGIC</button>
                </div>
            </div>
        </div>

        <!-- Risk Card -->
        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="glass-card-premium rounded-5 p-5 position-relative overflow-hidden h-100 shadow-lg border-white border-opacity-10 transition-hover translate-y-hover">
                <div class="card-glow-overlay" style="background: radial-gradient(circle at top right, rgba(239, 68, 68, 0.15), transparent 70%);"></div>
                
                <div class="d-flex align-items-center gap-4 mb-5 position-relative z-1">
                    <div class="icon-container-premium rounded-4 d-flex align-items-center justify-content-center text-danger shadow-md" style="width: 64px; height: 64px; flex-shrink: 0; background: #fff;">
                        <i class="bi bi-shield-lock fs-3"></i>
                    </div>
                    <div class="overflow-hidden">
                        <h5 class="fw-bold mb-0 tracking-tighter text-truncate">Compliance Risk Sync</h5>
                        <p class="extra-small text-muted m-0 text-truncate">Real-time Analysis</p>
                    </div>
                </div>

                <div class="p-4 rounded-5 bg-white bg-opacity-40 border border-white border-opacity-60 mb-5 shadow-sm-inset position-relative z-1">
                    <p class="uppercase-bold text-muted mb-3 opacity-60">Risk Sensitivity</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <h2 class="fw-bold mb-0 text-danger tracking-tighter">MINIMAL</h2>
                        <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill extra-small px-3 py-1 border border-danger border-opacity-10">0.2% Delta</span>
                    </div>
                </div>

                <div class="d-grid gap-3 position-relative z-2">
                    <button class="btn premium-btn-dark rounded-pill py-3 fw-bold shadow-lg">COMPLIANCE PDF</button>
                    <button class="btn btn-white border border-white border-opacity-60 rounded-pill py-3 extra-small fw-bold shadow-sm transition-hover">RISK PARAMETERS</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection