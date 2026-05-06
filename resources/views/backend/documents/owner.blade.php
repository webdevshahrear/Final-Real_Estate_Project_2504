@extends('layouts.backend')
@section('content')
    <div class="container-fluid py-4">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div data-aos="fade-right">
                <h2 class="fw-bold mb-1">Documents Vault</h2>
                <p class="text-muted mb-0">Secure repository for legal, structural, and financial records.</p>
            </div>
            <div class="d-flex gap-3" data-aos="fade-left">
                <button class="btn btn-geist rounded-4 px-4 py-2 border shadow-sm" data-action="create" data-id="UPLOAD">
                    <i class="bi bi-cloud-upload me-2"></i> Upload Document
                </button>
            </div>
        </div>

        <!-- Documents Explorer -->
        <div class="row g-4" data-aos="fade-up">
            <div class="col-lg-4">
                <div class="glass-widget h-100 p-0 overflow-hidden">
                    <div class="p-4 border-bottom">
                        <h6 class="fw-bold mb-0">File Categories</h6>
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action border-0 px-4 py-3 d-flex justify-content-between align-items-center bg-light">
                            <span class="small fw-bold"><i class="bi bi-buildings-fill me-2 text-primary"></i> Property Deeds</span>
                            <span class="badge bg-white border text-muted extra-small">4 Files</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action border-0 px-4 py-3 d-flex justify-content-between align-items-center">
                            <span class="small"><i class="bi bi-shield-check me-2 text-success"></i> Insurance Polices</span>
                            <span class="badge bg-white border text-muted extra-small">2 Files</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action border-0 px-4 py-3 d-flex justify-content-between align-items-center">
                            <span class="small"><i class="bi bi-file-earmark-medical me-2 text-warning"></i> Safety Certificates</span>
                            <span class="badge bg-white border text-muted extra-small">12 Files</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action border-0 px-4 py-3 d-flex justify-content-between align-items-center">
                            <span class="small"><i class="bi bi-bank me-2 text-info"></i> Tax Records</span>
                            <span class="badge bg-white border text-muted extra-small">8 Files</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="glass-widget h-100">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h6 class="fw-bold mb-0">Category: Property Deeds</h6>
                        <div class="d-flex gap-2">
                            <button class="btn btn-white border btn-sm extra-small rounded-3 shadow-sm"><i class="bi bi-sort-alpha-down"></i> Sort</button>
                        </div>
                    </div>
                    <div class="list-group list-group-flush gap-3">
                        <div class="d-flex align-items-center justify-content-between p-3 border rounded-4 shadow-sm-hover transition bg-white">
                            <div class="d-flex align-items-center gap-3">
                                <div class="rounded-circle bg-light d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;"><i class="bi bi-file-pdf text-danger fs-4"></i></div>
                                <div>
                                    <h6 class="mb-0 small fw-bold">Imperial_Tower_A_Title_Deed.pdf</h6>
                                    <p class="mb-0 extra-small text-muted">2.4 MB • Uploaded 12 Jan 2026</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2">
                                <button class="btn btn-white border btn-sm rounded-circle p-2 shadow-sm" data-action="view"><i class="bi bi-eye"></i></button>
                                <button class="btn btn-white border btn-sm rounded-circle p-2 shadow-sm" data-action="export"><i class="bi bi-download"></i></button>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between p-3 border rounded-4 shadow-sm-hover transition bg-white">
                            <div class="d-flex align-items-center gap-3">
                                <div class="rounded-circle bg-light d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;"><i class="bi bi-file-pdf text-danger fs-4"></i></div>
                                <div>
                                    <h6 class="mb-0 small fw-bold">Imperial_Tower_B_Title_Deed.pdf</h6>
                                    <p class="mb-0 extra-small text-muted">2.6 MB • Uploaded 12 Jan 2026</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2">
                                <button class="btn btn-white border btn-sm rounded-circle p-2 shadow-sm" data-action="view"><i class="bi bi-eye"></i></button>
                                <button class="btn btn-white border btn-sm rounded-circle p-2 shadow-sm" data-action="export"><i class="bi bi-download"></i></button>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between p-3 border rounded-4 shadow-sm-hover transition bg-white">
                            <div class="d-flex align-items-center gap-3">
                                <div class="rounded-circle bg-light d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;"><i class="bi bi-file-image text-primary fs-4"></i></div>
                                <div>
                                    <h6 class="mb-0 small fw-bold">Building_Plan_Final_Approved.jpg</h6>
                                    <p class="mb-0 extra-small text-muted">8.2 MB • Uploaded 15 Feb 2026</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2">
                                <button class="btn btn-white border btn-sm rounded-circle p-2 shadow-sm" data-action="view"><i class="bi bi-eye"></i></button>
                                <button class="btn btn-white border btn-sm rounded-circle p-2 shadow-sm" data-action="export"><i class="bi bi-download"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection