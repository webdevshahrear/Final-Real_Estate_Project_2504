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
                    <span class="badge bg-info bg-opacity-10 text-info uppercase-bold px-3 py-2 border border-info border-opacity-20">Asset Owner</span>
                    <span class="text-white-50 small">Profile Virtualization</span>
                </div>
                <h1 class="display-3 fw-bold text-white tracking-tighter mb-3">Profile <span class="text-info">Settings</span></h1>
                <p class="text-white-50 lead mb-0" style="max-width: 600px;">Managing your specific asset ownership profile and security credentials.</p>
            </div>
            <button class="btn btn-info px-4 py-3 rounded-pill fw-bold shadow-lg d-none d-md-block" id="syncBtn">
                <i class="bi bi-cpu me-2"></i> SYNC PROFILE
            </button>
        </div>
    </div>

    <!-- Main Content -->
    <div class="row g-4 mb-5">
        <div class="col-lg-8" data-aos="fade-right">
            <div class="glass-card-premium rounded-5 p-4">
                <h5 class="fw-bold mb-4 tracking-tighter">Identity Configuration</h5>
                <div class="row g-4">
                    <div class="col-md-6">
                        <label class="uppercase-bold text-muted mb-2 d-block opacity-60">Full Identity Name</label>
                        <input type="text" class="form-control geist-input-premium" value="Flat Owner Name">
                    </div>
                    <div class="col-md-6">
                        <label class="uppercase-bold text-muted mb-2 d-block opacity-60">Email Protocol</label>
                        <input type="email" class="form-control geist-input-premium" value="owner@example.com">
                    </div>
                    <div class="col-md-6">
                        <label class="uppercase-bold text-muted mb-2 d-block opacity-60">Cellular Contact</label>
                        <input type="tel" class="form-control geist-input-premium" value="+880 1XXX-XXXXXX">
                    </div>
                    <div class="col-md-6">
                        <label class="uppercase-bold text-muted mb-2 d-block opacity-60">Emergency Backup Contact</label>
                        <input type="text" class="form-control geist-input-premium" value="+880 1XXX-XXXXXX">
                    </div>
                    <div class="col-12 mt-4">
                        <button class="btn btn-primary-navy px-5 py-3 rounded-pill fw-bold shadow-sm">
                            SAVE IDENTITY CHANGES
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4" data-aos="fade-left">
            <div class="glass-card-premium rounded-5 p-4 border-danger border-opacity-20">
                <h5 class="fw-bold mb-4 text-danger tracking-tighter">Security Firewall</h5>
                <div class="d-grid gap-3">
                    <button class="btn btn-white border w-100 rounded-pill py-3 fw-bold extra-small shadow-sm">
                        <i class="bi bi-shield-lock me-2"></i> ROTATE PASSWORD
                    </button>
                    <button class="btn btn-white border w-100 rounded-pill py-3 fw-bold extra-small shadow-sm">
                        <i class="bi bi-clock-history me-2"></i> ACCESS LOGS
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.getElementById('syncBtn')?.addEventListener('click', function() {
        const btn = this;
        btn.innerHTML = '<i class="bi bi-check-lg me-2"></i>SYNC COMPLETE';
        btn.classList.replace('btn-info', 'btn-success');
        setTimeout(() => {
            btn.innerHTML = '<i class="bi bi-cpu me-2"></i> SYNC PROFILE';
            btn.classList.replace('btn-success', 'btn-info');
        }, 2000);
    });
</script>
@endpush




