@extends('layouts.backend')
@section('content')
    <div class="container-fluid py-4">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div data-aos="fade-right">
                <h2 class="fw-bold mb-1">Document Vault</h2>
                <p class="text-muted mb-0">Secure repository for legal, financial, and operational assets.</p>
            </div>
            <div class="d-flex gap-3" data-aos="fade-left">
                <button class="btn btn-geist rounded-4 px-4 py-2 border shadow-sm" data-action="create" data-id="UPLOAD_DOCUMENT">
                    <i class="bi bi-cloud-upload me-2"></i> Upload File
                </button>
            </div>
        </div>

        <!-- Vault Security & Intelligence Layer -->
        <div class="row g-4 mb-5" data-aos="fade-up">
            <div class="col-lg-8">
                <div class="bg-white border rounded-4 shadow-sm h-100 p-0 overflow-hidden transition-hover translate-y-hover">
                    <div class="p-4 border-bottom d-flex justify-content-between align-items-center bg-light-subtle">
                        <div>
                            <h6 class="fw-bold mb-0">AES-256 Quantum-Ready Encryption Node</h6>
                            <p class="extra-small text-muted mb-0">Enterprise-grade secure asset storage and identity validation.</p>
                        </div>
                        <span class="badge bg-primary-navy text-white extra-small px-3 rounded-pill shadow-sm"><i class="bi bi-shield-lock-fill me-1"></i> FIPS 140-2 Compliant</span>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-7 p-4 border-end">
                            <div class="mb-4">
                                <h6 class="extra-small text-muted fw-bold uppercase mb-2 opacity-50">Vault Integrity Index</h6>
                                <div class="d-flex align-items-baseline gap-3">
                                    <div class="display-5 fw-bold text-primary-navy">99.9%</div>
                                    <div class="spinner-grow text-success" style="width: 12px; height: 12px;"></div>
                                </div>
                                <p class="extra-small text-muted mt-2 mb-0">No unauthorized access vectors detected in 184 days.</p>
                            </div>
                            <div class="p-3 border rounded-4 bg-light shadow-sm-inset extra-small">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-muted">Total Encrypted Blocks</span>
                                    <span class="fw-bold font-mono text-primary-navy">14,204</span>
                                </div>
                                <div class="d-flex justify-content-between mb-0">
                                    <span class="text-muted">Cipher Entropy State</span>
                                    <span class="fw-bold text-success">Optimized <i class="bi bi-check2-circle"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 p-4 bg-primary-navy text-white d-flex align-items-center justify-content-center overflow-hidden position-relative">
                            <div class="text-center position-relative z-1">
                                <i class="bi bi-lock-fill display-3 opacity-25 mb-3"></i>
                                <h6 class="fw-bold small mb-1">Rotational Key Active</h6>
                                <p class="extra-small text-white-50">Next rotation: 14h 22m</p>
                            </div>
                            <div class="position-absolute top-50 start-50 translate-middle w-100 h-100 opacity-10">
                                <svg viewBox="0 0 100 100"><circle cx="50" cy="50" r="40" fill="none" stroke="white" stroke-width="0.5" stroke-dasharray="2 2"><animateTransform attributeName="transform" type="rotate" from="0 50 50" to="360 50 50" dur="20s" repeatCount="indefinite"/></circle></svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white border rounded-4 shadow-sm h-100 p-4 transition-hover translate-y-hover">
                    <h6 class="fw-bold mb-4 d-flex justify-content-between">
                        <span>Storage Consumption</span>
                        <span class="extra-small text-muted fw-normal">Enterprise Tier</span>
                    </h6>
                    <div class="text-center py-3">
                        <h2 class="fw-bold mb-1 text-primary-navy">4.2 <span class="fs-6 text-muted">TB</span></h2>
                        <p class="extra-small text-muted mb-4 opacity-75">Utilized of 10 TB Allocated Cluster</p>
                        <div class="progress rounded-pill mb-4 border shadow-sm-inset" style="height: 12px; background: rgba(0,0,0,0.05);">
                            <div class="progress-bar bg-primary-navy rounded-pill shadow-sm" style="width: 42%;"></div>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col-6">
                            <div class="p-3 border rounded-4 shadow-sm-hover transition bg-light text-center">
                                <span class="text-muted d-block extra-small uppercase fw-bold opacity-50 mb-1">High-Res Media</span>
                                <span class="fw-bold text-primary-navy">2.8 TB</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 border rounded-4 shadow-sm-hover transition bg-light text-center">
                                <span class="text-muted d-block extra-small uppercase fw-bold opacity-50 mb-1">Registry Docs</span>
                                <span class="fw-bold text-primary-navy">1.4 TB</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Document Lifecycle & Security Hub (Original) -->
        <div class="row g-4 mb-5" data-aos="fade-up">
            <!-- Document Expiry Pulse -->
            <div class="col-lg-5">
                <div class="bg-white border rounded-4 shadow-sm h-100 p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="fw-bold mb-0">Legal Health Pulse</h5>
                        <span class="badge bg-warning-subtle text-warning extra-small">2 Critical Expiries</span>
                    </div>
                    <div class="list-group list-group-flush gap-3">
                        <div class="p-3 border rounded-4 bg-light-subtle">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h6 class="extra-small fw-bold">Trade License (2025-26)</h6>
                                <span class="badge bg-danger extra-small text-white">Expires in 12 days</span>
                            </div>
                            <div class="progress" style="height: 6px;">
                                <div class="progress-bar bg-danger" style="width: 90%;"></div>
                            </div>
                        </div>
                        <div class="p-3 border rounded-4 bg-light-subtle">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h6 class="extra-small fw-bold">Property Insurance Certificate</h6>
                                <span class="badge bg-warning extra-small text-dark">Expires in 45 days</span>
                            </div>
                            <div class="progress" style="height: 6px;">
                                <div class="progress-bar bg-warning" style="width: 65%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Secure Sharing & Folders -->
            <div class="col-lg-7">
                <div class="bg-white border rounded-4 shadow-sm h-100 p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="fw-bold mb-0">Encrypted External Sharing</h5>
                        <button class="btn btn-sm btn-white border rounded-pill px-3 extra-small" data-action="view" title="Activity Logs">Internal Audit Link</button>
                    </div>
                    <div class="p-4 border rounded-4 bg-light-dotted text-center mb-4" style="border: 2px dashed #ddd;">
                        <i class="bi bi-shield-lock-fill text-primary mb-2 opacity-50" style="font-size: 2rem;"></i>
                        <h6 class="fw-bold small mb-1">Generate Timed Access Link</h6>
                        <p class="extra-small text-muted mb-0">Links automatically expire after 24 hours of generation.</p>
                        <button class="btn btn-geist-dark mt-3 rounded-pill px-4 extra-small" data-action="create" data-id="SECURE_LINK">Generate Secure URL</button>
                    </div>
                    <div class="row g-3">
                        <div class="col-3">
                            <div class="text-center p-2 rounded-3 bg-light">
                                <i class="bi bi-folder-fill text-warning mb-1"></i>
                                <span class="d-block extra-small fw-bold">Legal</span>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="text-center p-2 rounded-3 bg-light">
                                <i class="bi bi-folder-fill text-primary mb-1"></i>
                                <span class="d-block extra-small fw-bold">Taxes</span>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="text-center p-2 rounded-3 bg-light">
                                <i class="bi bi-folder-fill text-success mb-1"></i>
                                <span class="d-block extra-small fw-bold">Bills</span>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="text-center p-2 rounded-3 bg-light">
                                <i class="bi bi-folder-fill text-info mb-1"></i>
                                <span class="d-block extra-small fw-bold">Blueprints</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Folders -->
        <div class="row g-4 mb-5" data-aos="fade-up">
            <div class="col-md-3">
                <div class="p-4 bg-white border rounded-4 shadow-sm transition-hover translate-y-hover cursor-pointer" onclick="void(0)">
                    <i class="bi bi-folder-fill text-warning fs-1 mb-3 d-block opacity-75"></i>
                    <h6 class="fw-bold mb-1">Legal Agreements</h6>
                    <p class="extra-small text-muted mb-0">124 Items • 2.4 GB</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-4 bg-white border rounded-4 shadow-sm transition-hover translate-y-hover cursor-pointer" onclick="void(0)">
                    <i class="bi bi-folder-fill text-primary fs-1 mb-3 d-block opacity-75"></i>
                    <h6 class="fw-bold mb-1">Property Deeds</h6>
                    <p class="extra-small text-muted mb-0">42 Items • 850 MB</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-4 bg-white border rounded-4 shadow-sm transition-hover translate-y-hover cursor-pointer" onclick="void(0)">
                    <i class="bi bi-folder-fill text-success fs-1 mb-3 d-block opacity-75"></i>
                    <h6 class="fw-bold mb-1">Audit Reports</h6>
                    <p class="extra-small text-muted mb-0">12 Items • 120 MB</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-4 bg-white border rounded-4 shadow-sm transition-hover translate-y-hover cursor-pointer" onclick="void(0)">
                    <i class="bi bi-folder-fill text-info fs-1 mb-3 d-block opacity-75"></i>
                    <h6 class="fw-bold mb-1">NID & Identity</h6>
                    <p class="extra-small text-muted mb-0">210 Items • 1.2 GB</p>
                </div>
            </div>
        </div>

        <!-- Recent Documents -->
        <div class="row g-4" data-aos="fade-up">
            <div class="col-12">
                <div class="bg-white border rounded-4 shadow-sm p-4">
                    <h5 class="fw-bold mb-4">Recent Assets</h5>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle custom-table-geist">
                            <thead>
                                <tr>
                                    <th class="extra-small text-muted uppercase">File Name</th>
                                    <th class="extra-small text-muted uppercase">Entity / Related</th>
                                    <th class="extra-small text-muted uppercase">Uploaded By</th>
                                    <th class="extra-small text-muted uppercase">Size</th>
                                    <th class="extra-small text-muted uppercase">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="transition">
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="p-2 bg-danger bg-opacity-10 rounded-3">
                                                <i class="bi bi-file-earmark-pdf text-danger fs-5"></i>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <span class="small fw-bold text-primary-navy">Tenancy_Apt402_Sarah.pdf</span>
                                                <span class="extra-small text-muted font-mono opacity-50">SHA-256: 8a92...1f2e</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-light text-dark extra-small rounded-pill px-3 border shadow-sm">Sarah Jenkins (Apt 402)</span></td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="profile-avatar extra-small" style="width: 20px; height: 20px; font-size: 8px;">RC</div>
                                            <span class="extra-small fw-bold text-primary-navy">Robert C.</span>
                                        </div>
                                    </td>
                                    <td><span class="extra-small text-muted">2.4 MB</span></td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <button class="btn btn-sm btn-white border rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Secure Preview"><i class="bi bi-eye small"></i></button>
                                            <button class="btn btn-sm btn-white border rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Digital Chain of Custody"><i class="bi bi-link-45deg small"></i></button>
                                            <button class="btn btn-primary-navy rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Archive Asset"><i class="bi bi-archive small"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="transition">
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="p-2 bg-primary bg-opacity-10 rounded-3">
                                                <i class="bi bi-file-earmark-image text-primary fs-5"></i>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <span class="small fw-bold text-primary-navy">Deed_Imperial_Heights_2024.jpg</span>
                                                <span class="extra-small text-muted font-mono opacity-50">SHA-256: f4b1...8c02</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-light text-dark extra-small rounded-pill px-3 border shadow-sm">Imperial Heights</span></td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="profile-avatar extra-small" style="width: 20px; height: 20px; font-size: 8px; background: var(--geist-navy);">OS</div>
                                            <span class="extra-small fw-bold text-primary-navy">System</span>
                                        </div>
                                    </td>
                                    <td><span class="extra-small text-muted">850 KB</span></td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <button class="btn btn-sm btn-white border rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Secure Preview"><i class="bi bi-eye small"></i></button>
                                            <button class="btn btn-sm btn-white border rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Digital Chain of Custody"><i class="bi bi-link-45deg small"></i></button>
                                            <button class="btn btn-primary-navy rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Archive Asset"><i class="bi bi-archive small"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection