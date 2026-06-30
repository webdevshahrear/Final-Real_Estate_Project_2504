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
                    <span class="badge bg-primary bg-opacity-10 text-primary uppercase-bold px-3 py-2 border border-primary border-opacity-20">Owner Access</span>
                    <span class="text-white-50 small">Profile & Governance Settings</span>
                </div>
                <h1 class="display-3 fw-bold text-white tracking-tighter mb-3">Account <span class="text-info">Settings</span></h1>
                <p class="text-white-50 lead mb-0" style="max-width: 600px;">Managing your owner profile, notification preferences, and security protocols.</p>
            </div>
            <button class="btn btn-info px-4 py-3 rounded-pill fw-bold shadow-lg d-none d-md-block" id="saveAllBtn">
                <i class="bi bi-shield-check me-2"></i> SYNC ALL DATA
            </button>
        </div>
    </div>

    <!-- Main Settings Area -->
    <div class="row g-4 mb-5">
        <!-- Profile Info -->
        <div class="col-lg-8" data-aos="fade-right">
            <div class="glass-card-premium rounded-5 p-4 mb-4">
                <h5 class="fw-bold mb-4 tracking-tighter">Owner Profile</h5>
                <div class="d-flex align-items-center gap-4 mb-4 pb-4 border-bottom border-white">
                    <div class="profile-avatar bg-primary-navy d-flex align-items-center justify-content-center text-white rounded-4 shadow" style="width:80px;height:80px;font-size:1.8rem;font-weight:800;">SW</div>
                    <div>
                        <h4 class="fw-bold mb-1 tracking-tighter">Sheikh Waqas</h4>
                        <p class="extra-small text-muted mb-2">Portfolio Owner • Imperial Towers A & B</p>
                        <button class="btn btn-sm btn-white border rounded-pill px-3 extra-small fw-bold">UPDATE AVATAR</button>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-md-6">
                        <label class="uppercase-bold text-muted mb-2 d-block opacity-60">Full Identity Name</label>
                        <input type="text" class="form-control geist-input-premium" value="Sheikh Waqas">
                    </div>
                    <div class="col-md-6">
                        <label class="uppercase-bold text-muted mb-2 d-block opacity-60">Contact Email</label>
                        <input type="email" class="form-control geist-input-premium" value="sheikh.waqas@imperial.owner">
                    </div>
                    <div class="col-md-6">
                        <label class="uppercase-bold text-muted mb-2 d-block opacity-60">Cellular Contact</label>
                        <input type="tel" class="form-control geist-input-premium" value="+880 1XX-XXXXXXX">
                    </div>
                    <div class="col-md-6">
                        <label class="uppercase-bold text-muted mb-2 d-block opacity-60">Government ID (NID)</label>
                        <input type="text" class="form-control geist-input-premium" value="••••••••••••" disabled>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary-navy px-5 py-3 rounded-pill fw-bold shadow-sm">
                            <i class="bi bi-check-lg me-2"></i> UPDATE PROFILE
                        </button>
                    </div>
                </div>
            </div>

            <!-- Notification Preferences -->
            <div class="glass-card-premium rounded-5 p-4">
                <h5 class="fw-bold mb-4 tracking-tighter">Transmission Triggers</h5>
                <div class="d-grid gap-2">
                    <div class="p-3 rounded-4 bg-white bg-opacity-40 border border-white d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-0 small fw-bold">Rent Payment Alerts</h6>
                            <p class="extra-small text-muted mb-0">Instant notification upon tenant payment submission.</p>
                        </div>
                        <div class="form-check form-switch geist-switch">
                            <input class="form-check-input" type="checkbox" checked>
                        </div>
                    </div>
                    <div class="p-3 rounded-4 bg-white bg-opacity-40 border border-white d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-0 small fw-bold">Maintenance Requests</h6>
                            <p class="extra-small text-muted mb-0">Alerts for new technical service tickets.</p>
                        </div>
                        <div class="form-check form-switch geist-switch">
                            <input class="form-check-input" type="checkbox" checked>
                        </div>
                    </div>
                    <div class="p-3 rounded-4 bg-white bg-opacity-40 border border-white d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-0 small fw-bold">Lease Expiry Reminders</h6>
                            <p class="extra-small text-muted mb-0">Automatic 30-day countdown triggers.</p>
                        </div>
                        <div class="form-check form-switch geist-switch">
                            <input class="form-check-input" type="checkbox" checked>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Security & Quick Actions -->
        <div class="col-lg-4" data-aos="fade-left">
            <div class="glass-card-premium rounded-5 p-4 mb-4">
                <h5 class="fw-bold mb-4 tracking-tighter">Security Matrix</h5>
                <div class="d-grid gap-4">
                    <div class="d-flex justify-content-between align-items-center pb-3 border-bottom border-white">
                        <div>
                            <h6 class="mb-0 small fw-bold">Two-Factor Auth</h6>
                            <p class="extra-small text-muted mb-0">Active via Cellular Link</p>
                        </div>
                        <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-2 border border-success border-opacity-10">Secured</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center pb-3 border-bottom border-white">
                        <div>
                            <h6 class="mb-0 small fw-bold">Last Encryption Login</h6>
                            <p class="extra-small text-muted mb-0">Today, 10:24 AM · Dhaka</p>
                        </div>
                        <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-3 py-2 border border-primary border-opacity-10">Verified</span>
                    </div>
                    <button class="btn btn-white border w-100 rounded-pill py-3 fw-bold extra-small shadow-sm">
                        <i class="bi bi-key me-2"></i> ROTATE PASSWORD
                    </button>
                    <button class="btn btn-white border w-100 rounded-pill py-3 fw-bold extra-small shadow-sm">
                        <i class="bi bi-shield-check me-2"></i> AUDIT ACTIVE SESSIONS
                    </button>
                </div>
            </div>

            <div class="glass-card-premium rounded-5 p-4 border-danger border-opacity-20">
                <h5 class="fw-bold mb-3 text-danger tracking-tighter">Danger Zone</h5>
                <p class="extra-small text-muted mb-4">Permanent truncation of your owner account and portfolio access.</p>
                <button class="btn btn-outline-danger w-100 rounded-pill py-3 fw-bold shadow-sm-hover">
                    <i class="bi bi-person-x me-2"></i> PURGE ACCOUNT
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.getElementById('saveAllBtn')?.addEventListener('click', function() {
        const btn = this;
        const originalHtml = btn.innerHTML;
        btn.innerHTML = '<i class="bi bi-check-lg me-2"></i>SYNCED';
        btn.classList.replace('btn-info', 'btn-success');
        
        setTimeout(() => {
            btn.innerHTML = originalHtml;
            btn.classList.replace('btn-success', 'btn-info');
        }, 2000);
    });
</script>
@endpush




