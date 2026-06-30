@extends('layouts.tennant')

@section('content')
    <div class="container-fluid py-4">
        <!-- Premium Hero Section -->
        <div class="premium-hero rounded-5 p-5 mb-5 shadow-lg" data-aos="zoom-out-up">
            <div class="mesh-grid"></div>
            <div class="floating-blob" style="top: -100px; right: -100px; background: rgba(56, 189, 248, 0.15);"></div>

            <div class="position-relative z-1 d-flex justify-content-between align-items-end">
                <div>
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <span
                            class="badge bg-success bg-opacity-10 text-success uppercase-bold px-3 py-2 border border-success border-opacity-20">Resident
                            Portal</span>
                        <span class="text-white-50 small">Profile & Security Hub</span>
                    </div>
                    <h1 class="display-3 fw-bold text-white tracking-tighter mb-3">Portal <span
                            class="text-info">Settings</span></h1>
                    <p class="text-white-50 lead mb-0" style="max-width: 600px;">Managing your personal identity, security
                        protocols, and communication triggers.</p>
                </div>
                <button class="btn btn-info px-4 py-3 rounded-pill fw-bold shadow-lg d-none d-md-block"
                    onclick="saveSettings()">
                    <i class="bi bi-shield-check me-2"></i> SAVE ALL CHANGES
                </button>
            </div>
        </div>

        <!-- Tab Navigation -->
        <div class="d-flex flex-wrap gap-3 mb-5" data-aos="fade-up">
            <button class="tab-btn-premium active" onclick="switchTab('profile', this)">
                <i class="bi bi-person-circle me-2"></i>Profile Architecture
            </button>
            <button class="tab-btn-premium" onclick="switchTab('security', this)">
                <i class="bi bi-shield-lock me-2"></i>Security Protocols
            </button>
            <button class="tab-btn-premium" onclick="switchTab('notifications', this)">
                <i class="bi bi-bell me-2"></i>Neural Notifications
            </button>
            <button class="tab-btn-premium" onclick="switchTab('emergency', this)">
                <i class="bi bi-heart-pulse me-2"></i>Emergency Matrix
            </button>
        </div>

        <!-- ═══ TAB: PROFILE ═══ -->
        <div id="tab-profile" class="tab-content-area">
            <div class="row g-4">
                <div class="col-lg-8" data-aos="fade-right">
                    <div class="glass-card-premium rounded-5 p-4 mb-4">
                        <h5 class="fw-bold mb-4 tracking-tighter">Personal Identity</h5>

                        <div class="d-flex align-items-center gap-4 mb-5 pb-4 border-bottom border-white">
                            <div class="avatar-upload-premium">
                                <div
                                    class="avatar-img bg-primary-navy d-flex align-items-center justify-content-center text-white display-6 fw-bold">
                                    SR</div>
                                <div class="avatar-edit"><i class="bi bi-camera-fill"></i></div>
                            </div>
                            <div>
                                <h4 class="fw-bold mb-1 tracking-tighter text-primary-navy">Sarah Rahman</h4>
                                <p class="extra-small text-muted mb-3">Imperial Resident since January 2026</p>
                                <button class="btn btn-sm btn-white border rounded-pill px-3 extra-small fw-bold">UPDATE
                                    PHOTO</button>
                            </div>
                        </div>

                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="uppercase-bold text-muted mb-2 d-block opacity-60">Full Legal Name</label>
                                <input type="text" class="form-control geist-input-premium" value="Sarah Rahman">
                            </div>
                            <div class="col-md-6">
                                <label class="uppercase-bold text-muted mb-2 d-block opacity-60">Date of Birth</label>
                                <input type="date" class="form-control geist-input-premium" value="1994-06-15">
                            </div>
                            <div class="col-md-6">
                                <label class="uppercase-bold text-muted mb-2 d-block opacity-60">Primary Email</label>
                                <input type="email" class="form-control geist-input-premium" value="sarah.r@example.com">
                            </div>
                            <div class="col-md-6">
                                <label class="uppercase-bold text-muted mb-2 d-block opacity-60">Cellular Contact</label>
                                <input type="tel" class="form-control geist-input-premium" value="01700-223344">
                            </div>
                            <div class="col-12">
                                <label class="uppercase-bold text-muted mb-2 d-block opacity-60">Current Employer</label>
                                <input type="text" class="form-control geist-input-premium"
                                    value="TechCorp Bangladesh Ltd.">
                            </div>
                        </div>
                    </div>

                    <div class="glass-card-premium rounded-5 p-4">
                        <h5 class="fw-bold mb-4 tracking-tighter">Household Configuration</h5>
                        <div class="row g-4 text-center">
                            <div class="col-md-4">
                                <div class="p-4 rounded-4 bg-white bg-opacity-40 border border-white">
                                    <h3 class="fw-bold mb-1">3</h3>
                                    <p class="uppercase-bold text-muted mb-0 opacity-60">Total Occupants</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-4 rounded-4 bg-white bg-opacity-40 border border-white">
                                    <h3 class="fw-bold mb-1">2</h3>
                                    <p class="uppercase-bold text-muted mb-0 opacity-60">Family Members</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-4 rounded-4 bg-white bg-opacity-40 border border-white">
                                    <h3 class="fw-bold mb-1">1</h3>
                                    <p class="uppercase-bold text-muted mb-0 opacity-60">Co-Occupants</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-left">
                    <div class="glass-card-premium rounded-5 p-4 mb-4 position-relative overflow-hidden">
                        <div class="position-absolute top-0 end-0 p-4 opacity-10">
                            <i class="bi bi-house-door display-1"></i>
                        </div>
                        <h5 class="fw-bold mb-4 tracking-tighter">Lease Blueprint</h5>
                        <div class="d-grid gap-4">
                            <div>
                                <p class="uppercase-bold text-muted mb-1 opacity-60">Assigned Unit</p>
                                <h6 class="fw-bold mb-0">Tower A · Unit 402</h6>
                            </div>
                            <div>
                                <p class="uppercase-bold text-muted mb-1 opacity-60">Agreement Validity</p>
                                <h6 class="fw-bold mb-0">Jan 2026 – Dec 2026</h6>
                            </div>
                            <div
                                class="p-3 rounded-4 bg-white bg-opacity-40 border border-white d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="uppercase-bold text-muted mb-0 opacity-60">Monthly Rent</p>
                                    <h5 class="fw-bold mb-0 text-primary-navy">৳22,000</h5>
                                </div>
                                <span
                                    class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-2 border border-success border-opacity-10">Active</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ═══ TAB: SECURITY ═══ -->
        <div id="tab-security" class="tab-content-area" style="display:none;">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="glass-card-premium rounded-5 p-4 mb-4">
                        <h5 class="fw-bold mb-4 tracking-tighter">Vault Encryption</h5>
                        <div class="row g-4">
                            <div class="col-12">
                                <label class="uppercase-bold text-muted mb-2 d-block opacity-60">Current Access Key</label>
                                <input type="password" class="form-control geist-input-premium" placeholder="••••••••••••">
                            </div>
                            <div class="col-md-6">
                                <label class="uppercase-bold text-muted mb-2 d-block opacity-60">New Access Key</label>
                                <input type="password" class="form-control geist-input-premium"
                                    placeholder="Generate new secret">
                            </div>
                            <div class="col-md-6">
                                <label class="uppercase-bold text-muted mb-2 d-block opacity-60">Confirm New Key</label>
                                <input type="password" class="form-control geist-input-premium"
                                    placeholder="Verify new secret">
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary-navy px-5 py-3 rounded-pill fw-bold">ROTATE SECURITY
                                    KEYS</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="glass-card-premium rounded-5 p-4 border-danger border-opacity-20">
                        <h5 class="fw-bold mb-3 text-danger tracking-tighter">Danger Zone</h5>
                        <p class="extra-small text-muted mb-4">Permanent truncation of your resident identity and data
                            history.</p>
                        <button class="btn btn-outline-danger w-100 rounded-pill py-3 fw-bold">INITIATE DATA PURGE</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Other tabs would be implemented similarly with glass-card-premium... -->
        <div id="tab-notifications" class="tab-content-area" style="display:none;">
            <div class="glass-card-premium rounded-5 p-4">
                <h5 class="fw-bold mb-4 tracking-tighter">Neural Notifications</h5>
                <p class="text-muted">Notification configuration layer active.</p>
                <!-- Simplified for brevity, similar structure to index.blade.php settings -->
            </div>
        </div>

        <div id="tab-emergency" class="tab-content-area" style="display:none;">
            <div class="glass-card-premium rounded-5 p-4">
                <h5 class="fw-bold mb-4 tracking-tighter">Emergency Matrix</h5>
                <p class="text-muted">Emergency contact protocols active.</p>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function switchTab(tab, btn) {
            document.querySelectorAll('.tab-content-area').forEach(el => el.style.display = 'none');
            document.querySelectorAll('.tab-btn-premium').forEach(b => b.classList.remove('active'));
            document.getElementById('tab-' + tab).style.display = 'block';
            btn.classList.add('active');

            // Trigger AOS refresh if needed
            AOS.refresh();
        }

        function saveSettings() {
            const btn = event.currentTarget;
            const originalHtml = btn.innerHTML;
            btn.innerHTML = '<i class="bi bi-check-lg me-2"></i>SYNCED';
            btn.classList.replace('btn-info', 'btn-success');

            setTimeout(() => {
                btn.innerHTML = originalHtml;
                btn.classList.replace('btn-success', 'btn-info');
            }, 2000);
        }
    </script>
@endpush