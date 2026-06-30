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
                <div class="bg-white border rounded-4 shadow-sm h-100 p-0 overflow-hidden">
                    <div class="p-4 border-bottom d-flex justify-content-between align-items-center bg-light-subtle">
                        <h5 class="fw-bold mb-0">AES-256 Vault Encryption Node</h5>
                        <span class="badge bg-primary-navy text-white extra-small"><i class="bi bi-shield-fill-check me-1"></i> FIPS 140-2 Compliant</span>
                    </div>
                    <div class="row g-0 h-100">
                        <div class="col-md-7 p-4 border-end">
                            <div class="mb-4">
                                <h6 class="extra-small text-muted fw-bold uppercase mb-2">Vault Integrity Status</h6>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="display-5 fw-bold text-primary-navy">99.9%</div>
                                    <div class="spinner-grow text-success" style="width: 1rem; height: 1rem;"></div>
                                </div>
                                <p class="extra-small text-muted mt-2 mb-0">No unauthorized access attempts in 184 days.</p>
                            </div>
                            <div class="p-3 border rounded-4 bg-light extra-small">
                                <div class="d-flex justify-content-between mb-2"><span>Total Encrypted Blocks:</span><span class="fw-bold font-mono">14,204</span></div>
                                <div class="d-flex justify-content-between mb-0"><span>System Entropy:</span><span class="fw-bold text-success">Optimized</span></div>
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
                <div class="bg-white border rounded-4 shadow-sm h-100 p-4">
                    <h5 class="fw-bold mb-4">Storage Consumption</h5>
                    <div class="text-center py-4">
                        <h2 class="fw-bold mb-1">4.2 <span class="fs-6 text-muted">TB</span></h2>
                        <p class="extra-small text-muted mb-4">of 10 TB Enterprise Cloud</p>
                        <div class="progress rounded-pill mb-4" style="height: 12px;">
                            <div class="progress-bar bg-primary-navy" style="width: 42%;"></div>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col-6">
                            <div class="p-2 border rounded-3 text-center extra-small">
                                <span class="text-muted d-block">Media</span>
                                <span class="fw-bold">2.8 TB</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-2 border rounded-3 text-center extra-small">
                                <span class="text-muted d-block">Docs</span>
                                <span class="fw-bold">1.4 TB</span>
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
                <div class="folder-card bg-white">
                    <i class="bi bi-folder-fill text-warning fs-1 mb-3 d-block"></i>
                    <h6 class="fw-bold mb-1">Agreements</h6>
                    <p class="extra-small text-muted mb-0">124 Items • 2.4 GB</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="folder-card bg-white">
                    <i class="bi bi-folder-fill text-primary fs-1 mb-3 d-block"></i>
                    <h6 class="fw-bold mb-1">Property Deeds</h6>
                    <p class="extra-small text-muted mb-0">42 Items • 850 MB</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="folder-card bg-white">
                    <i class="bi bi-folder-fill text-success fs-1 mb-3 d-block"></i>
                    <h6 class="fw-bold mb-1">Audit Reports</h6>
                    <p class="extra-small text-muted mb-0">12 Items • 120 MB</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="folder-card bg-white">
                    <i class="bi bi-folder-fill text-info fs-1 mb-3 d-block"></i>
                    <h6 class="fw-bold mb-1">NID & KYC</h6>
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
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <i class="bi bi-file-earmark-pdf text-danger fs-4"></i>
                                            <span class="small fw-bold">Tenancy_Apt402_Sarah.pdf</span>
                                        </div>
                                    </td>
                                    <td><span class="extra-small">Sarah Jenkins (Apt 402)</span></td>
                                    <td><span class="extra-small">Admin</span></td>
                                    <td><span class="extra-small">2.4 MB</span></td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <button class="btn btn-sm btn-light border rounded-3 shadow-sm-hover" data-action="view" data-id="DOC-402-S" title="Preview Document"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-light border rounded-3 shadow-sm-hover" data-action="comment" data-id="DOC-402-S" title="Audit Remark"><i class="bi bi-chat-left-text"></i></button>
                                            <button class="btn btn-sm btn-light border rounded-3 shadow-sm-hover" data-action="edit" data-id="DOC-402-S" title="Edit Metadata"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-light-subtle border text-danger rounded-3 shadow-sm-hover" data-action="delete" data-id="DOC-402-S" title="Delete Permanent"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <i class="bi bi-file-earmark-image text-info fs-4"></i>
                                            <span class="small fw-bold">Deed_Imperial_Heights_2024.jpg</span>
                                        </div>
                                    </td>
                                    <td><span class="extra-small">Imperial Heights</span></td>
                                    <td><span class="extra-small">Super Admin</span></td>
                                    <td><span class="extra-small">850 KB</span></td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <button class="btn btn-sm btn-light border rounded-3 shadow-sm-hover" data-action="view" data-id="DOC-DEED-IH" title="Preview Document"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-light border rounded-3 shadow-sm-hover" data-action="comment" data-id="DOC-DEED-IH" title="Audit Remark"><i class="bi bi-chat-left-text"></i></button>
                                            <button class="btn btn-sm btn-light border rounded-3 shadow-sm-hover" data-action="edit" data-id="DOC-DEED-IH" title="Edit Metadata"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-light-subtle border text-danger rounded-3 shadow-sm-hover" data-action="delete" data-id="DOC-DEED-IH" title="Delete Permanent"><i class="bi bi-trash"></i></button>
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