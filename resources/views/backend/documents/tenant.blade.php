@extends('layouts.backend')

@push('css')
<style>
    .doc-folder { background:#fff;border:1px solid #e5e7eb;border-radius:20px;padding:1.5rem;cursor:pointer;transition:all 0.3s; }
    .doc-folder:hover { transform:translateY(-5px);box-shadow:0 15px 35px rgba(30,58,95,0.1);border-color:#2b7be8; }
    .doc-row { display:flex;align-items:center;gap:1rem;padding:0.9rem 0;border-bottom:1px solid #f1f5f9;transition:background 0.2s; }
    .doc-row:last-child { border-bottom:none; }
    .doc-row:hover { background:#f8fafc; margin:0 -1rem; padding-left:1rem; padding-right:1rem; }
    .expiry-badge { font-size:0.65rem; padding:3px 8px; border-radius:100px; font-weight:700; }
    .expiry-ok    { background:#dcfce7; color:#16a34a; }
    .expiry-warn  { background:#fef9c3; color:#ca8a04; }
    .expiry-exp   { background:#fee2e2; color:#dc2626; }
    .version-dot  { width:8px;height:8px;border-radius:50%;background:#2b7be8;display:inline-block; }
</style>
@endpush

@section('content')
<div class="container-fluid py-4">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div data-aos="fade-right">
            <h2 class="fw-bold mb-1">Personal Vault</h2>
            <p class="text-muted mb-0">Secure document center. Newer uploads never overwrite older versions.</p>
        </div>
        <div class="d-flex gap-3" data-aos="fade-left">
            <button class="btn btn-primary-navy rounded-4 px-4 py-2 small fw-bold shadow-sm"
                    data-bs-toggle="modal" data-bs-target="#uploadModal">
                <i class="bi bi-upload me-2"></i>Upload Document
            </button>
        </div>
    </div>

    <!-- Expiry Alert -->
    <div class="alert d-flex align-items-center gap-3 rounded-4 mb-4 border-warning border-opacity-50"
         style="background:#fffbeb;" data-aos="fade-up">
        <i class="bi bi-exclamation-triangle-fill text-warning fs-5 flex-shrink-0"></i>
        <div>
            <strong class="small">NID Document Expiring Soon</strong>
            <p class="mb-0 extra-small text-muted">Your National ID (NID_Scan_Sarah.jpg) expires on <strong>01 Dec 2026</strong>. Please upload a renewed copy before expiry.</p>
        </div>
        <button class="btn btn-warning btn-sm extra-small rounded-3 ms-auto px-3 py-1 fw-bold flex-shrink-0"
                data-bs-toggle="modal" data-bs-target="#uploadModal">Re-upload</button>
    </div>

    <!-- Folder Cards -->
    <div class="row g-3 mb-4" data-aos="fade-up">
        <div class="col-md-3">
            <div class="doc-folder" onclick="showFolder('agreements')">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div class="stats-icon bg-primary-subtle text-primary"><i class="bi bi-file-earmark-check"></i></div>
                    <span class="badge bg-light text-dark extra-small">3 Files</span>
                </div>
                <h6 class="fw-bold small mb-1">Lease & Agreements</h6>
                <p class="extra-small text-muted mb-0">Legal binding documents & renewals.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="doc-folder" onclick="showFolder('identity')">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div class="stats-icon bg-info-subtle text-info"><i class="bi bi-person-badge"></i></div>
                    <span class="badge bg-warning-subtle text-warning extra-small">Expires Soon</span>
                </div>
                <h6 class="fw-bold small mb-1">Identification Proof</h6>
                <p class="extra-small text-muted mb-0">NID, Passport, Visa copies.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="doc-folder" onclick="showFolder('receipts')">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div class="stats-icon bg-success-subtle text-success"><i class="bi bi-receipt-cutoff"></i></div>
                    <span class="badge bg-light text-dark extra-small">12 Files</span>
                </div>
                <h6 class="fw-bold small mb-1">Payment Receipts</h6>
                <p class="extra-small text-muted mb-0">Auto-generated monthly receipts.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="doc-folder" onclick="showFolder('utility')">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div class="stats-icon bg-warning-subtle text-warning"><i class="bi bi-lightning-charge"></i></div>
                    <span class="badge bg-light text-dark extra-small">6 Files</span>
                </div>
                <h6 class="fw-bold small mb-1">Utility Bills</h6>
                <p class="extra-small text-muted mb-0">Electricity, water, gas records.</p>
            </div>
        </div>
    </div>

    <!-- Documents Table -->
    <div class="glass-widget" data-aos="fade-up">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h5 class="fw-bold mb-0">All Documents</h5>
            <div class="d-flex gap-2">
                <select class="form-select border-0 bg-light extra-small rounded-3" style="width:160px;" id="folderFilter">
                    <option value="all">All Categories</option>
                    <option value="agreements">Agreements</option>
                    <option value="identity">Identity</option>
                    <option value="receipts">Receipts</option>
                    <option value="utility">Utility Bills</option>
                </select>
            </div>
        </div>

        <!-- Agreements -->
        <div class="doc-row">
            <i class="bi bi-file-earmark-pdf-fill text-danger fs-4 flex-shrink-0"></i>
            <div class="flex-grow-1 min-w-0">
                <h6 class="mb-0 small fw-bold text-truncate">Lease_Agreement_2026.pdf</h6>
                <div class="d-flex align-items-center gap-2 mt-1 flex-wrap">
                    <span class="badge bg-primary-subtle text-primary extra-small">Agreement</span>
                    <span class="extra-small text-muted">Uploaded: 01 Jan 2026</span>
                    <span class="extra-small text-muted">2.4 MB</span>
                    <span class="expiry-badge expiry-ok">Expires: 31 Dec 2026</span>
                    <span class="extra-small text-muted"><span class="version-dot me-1"></span>v1 (current)</span>
                </div>
            </div>
            <div class="d-flex gap-2 flex-shrink-0">
                <button class="btn btn-sm btn-white border extra-small px-3 rounded-3" title="Preview"><i class="bi bi-eye"></i></button>
                <button class="btn btn-sm btn-white border extra-small px-3 rounded-3" title="Download"><i class="bi bi-download"></i></button>
            </div>
        </div>

        <div class="doc-row">
            <i class="bi bi-file-earmark-pdf-fill text-danger fs-4 flex-shrink-0"></i>
            <div class="flex-grow-1 min-w-0">
                <h6 class="mb-0 small fw-bold text-truncate">Lease_Agreement_2025.pdf</h6>
                <div class="d-flex align-items-center gap-2 mt-1 flex-wrap">
                    <span class="badge bg-primary-subtle text-primary extra-small">Agreement</span>
                    <span class="extra-small text-muted">Uploaded: 01 Jan 2025</span>
                    <span class="extra-small text-muted">2.1 MB</span>
                    <span class="expiry-badge expiry-exp">Expired: 31 Dec 2025</span>
                    <span class="extra-small text-muted"><span class="version-dot me-1" style="background:#9ca3af;"></span>v0 (archived)</span>
                </div>
            </div>
            <div class="d-flex gap-2 flex-shrink-0">
                <button class="btn btn-sm btn-white border extra-small px-3 rounded-3"><i class="bi bi-eye"></i></button>
                <button class="btn btn-sm btn-white border extra-small px-3 rounded-3"><i class="bi bi-download"></i></button>
            </div>
        </div>

        <!-- Identity -->
        <div class="doc-row">
            <i class="bi bi-file-earmark-image-fill text-primary fs-4 flex-shrink-0"></i>
            <div class="flex-grow-1 min-w-0">
                <h6 class="mb-0 small fw-bold text-truncate">NID_Scan_Sarah.jpg</h6>
                <div class="d-flex align-items-center gap-2 mt-1 flex-wrap">
                    <span class="badge bg-info-subtle text-info extra-small">Identity</span>
                    <span class="extra-small text-muted">Uploaded: 15 Dec 2025</span>
                    <span class="extra-small text-muted">850 KB</span>
                    <span class="expiry-badge expiry-warn">Expires: 01 Dec 2026</span>
                    <span class="extra-small text-muted"><span class="version-dot me-1"></span>v1 (current)</span>
                </div>
            </div>
            <div class="d-flex gap-2 flex-shrink-0">
                <button class="btn btn-sm btn-warning border-0 extra-small px-3 rounded-3 text-dark fw-bold"
                        data-bs-toggle="modal" data-bs-target="#uploadModal">Re-upload</button>
                <button class="btn btn-sm btn-white border extra-small px-3 rounded-3"><i class="bi bi-download"></i></button>
            </div>
        </div>

        <!-- Receipts (auto-generated) -->
        <div class="doc-row">
            <i class="bi bi-file-earmark-text-fill text-success fs-4 flex-shrink-0"></i>
            <div class="flex-grow-1 min-w-0">
                <h6 class="mb-0 small fw-bold text-truncate">Receipt-RCP-2026-00005.pdf</h6>
                <div class="d-flex align-items-center gap-2 mt-1 flex-wrap">
                    <span class="badge bg-success-subtle text-success extra-small">Receipts</span>
                    <span class="extra-small text-muted">Auto-generated: 12 Mar 2026</span>
                    <span class="extra-small text-muted">120 KB</span>
                    <span class="badge bg-secondary bg-opacity-10 extra-small text-secondary">System Auto</span>
                </div>
            </div>
            <div class="d-flex gap-2 flex-shrink-0">
                <button class="btn btn-sm btn-white border extra-small px-3 rounded-3"><i class="bi bi-eye"></i></button>
                <button class="btn btn-sm btn-white border extra-small px-3 rounded-3"><i class="bi bi-download"></i></button>
            </div>
        </div>

        <div class="doc-row">
            <i class="bi bi-file-earmark-text-fill text-success fs-4 flex-shrink-0"></i>
            <div class="flex-grow-1 min-w-0">
                <h6 class="mb-0 small fw-bold text-truncate">Receipt-RCP-2026-00004.pdf</h6>
                <div class="d-flex align-items-center gap-2 mt-1 flex-wrap">
                    <span class="badge bg-success-subtle text-success extra-small">Receipts</span>
                    <span class="extra-small text-muted">Auto-generated: 05 Feb 2026</span>
                    <span class="extra-small text-muted">118 KB</span>
                    <span class="badge bg-secondary bg-opacity-10 extra-small text-secondary">System Auto</span>
                </div>
            </div>
            <div class="d-flex gap-2 flex-shrink-0">
                <button class="btn btn-sm btn-white border extra-small px-3 rounded-3"><i class="bi bi-eye"></i></button>
                <button class="btn btn-sm btn-white border extra-small px-3 rounded-3"><i class="bi bi-download"></i></button>
            </div>
        </div>

        <div class="mt-3 pt-3 border-top">
            <p class="extra-small text-muted mb-0">
                <i class="bi bi-info-circle text-info me-1"></i>
                Document versioning is active. Older versions are archived and never deleted. Max file size: 10 MB.
                Supported formats: PDF, JPG, PNG, DOCX.
            </p>
        </div>
    </div>
</div>

<!-- Upload Document Modal -->
<div class="modal fade" id="uploadModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-5 p-3">
            <div class="modal-header border-0">
                <h5 class="modal-title fw-bold">Upload Document</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="extra-small fw-bold text-muted mb-2 uppercase">Document Category</label>
                    <select class="form-select border-0 bg-light py-2 small">
                        <option>NID / Passport (Identity)</option>
                        <option>Lease Agreement</option>
                        <option>Utility Bill</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="extra-small fw-bold text-muted mb-2 uppercase">Document Name</label>
                    <input type="text" class="form-control border-0 bg-light py-2 small" placeholder="e.g. NID_Front_Sarah_2026.jpg">
                </div>
                <div class="mb-3">
                    <label class="extra-small fw-bold text-muted mb-2 uppercase">Expiry Date (if applicable)</label>
                    <input type="date" class="form-control border-0 bg-light py-2 small">
                </div>
                <div class="mb-4">
                    <label class="extra-small fw-bold text-muted mb-2 uppercase">File Upload</label>
                    <div class="border border-dashed rounded-4 p-4 text-center" style="cursor:pointer;background:#fafafa;">
                        <i class="bi bi-cloud-upload fs-2 text-muted"></i>
                        <p class="extra-small text-muted mb-0 mt-2">Click or drag file here<br>PDF, JPG, PNG, DOCX — Max 10 MB</p>
                    </div>
                </div>
                <div class="p-3 bg-info-subtle border border-info border-opacity-25 rounded-3 mb-3">
                    <p class="extra-small text-info mb-0"><i class="bi bi-info-circle me-1"></i>This upload will be saved as a new version. Previous versions remain archived.</p>
                </div>
                <button class="btn btn-primary-navy w-100 rounded-4 py-2 small fw-bold" data-bs-dismiss="modal">
                    <i class="bi bi-cloud-upload me-2"></i>Upload Document
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    function showFolder(folder) {
        document.getElementById('folderFilter').value = folder;
        // Trigger filter logic if any
    }
</script>
@endpush


