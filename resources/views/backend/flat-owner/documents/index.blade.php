@extends('layouts.backend')
@section('content')
        <!-- Main Content -->
        <main class="main-content-geist">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div data-aos="fade-right">
                    <h2 class="fw-bold mb-1">Documents Vault</h2>
                    <p class="text-muted mb-0">Secure repository for unit deeds, utility certificates, and legal records.</p>
                </div>
                <div class="d-flex gap-3" data-aos="fade-left">
                    <button class="btn btn-geist rounded-4 px-4 py-2 border shadow-sm" data-action="create" data-id="UPLOAD">
                        <i class="bi bi-cloud-upload me-2"></i> Upload New Document
                    </button>
                </div>
            </div>

            <!-- Documents Explorer -->
            <div class="row g-4" data-aos="fade-up">
                <div class="col-lg-4">
                    <div class="glass-widget h-100 p-0 overflow-hidden">
                        <div class="p-4 border-bottom">
                            <h6 class="fw-bold mb-0">Assets Categories</h6>
                        </div>
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action border-0 px-4 py-3 d-flex justify-content-between align-items-center bg-light">
                                <span class="small fw-bold"><i class="bi bi-house-fill me-2 text-primary"></i> Apt 405 (Tower A)</span>
                                <span class="badge bg-white border text-muted extra-small">3 Files</span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action border-0 px-4 py-3 d-flex justify-content-between align-items-center">
                                <span class="small"><i class="bi bi-house-fill me-2 text-primary"></i> Apt 12B (Tower A)</span>
                                <span class="badge bg-white border text-muted extra-small">2 Files</span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action border-0 px-4 py-3 d-flex justify-content-between align-items-center">
                                <span class="small"><i class="bi bi-shop me-2 text-warning"></i> Shop 04 (Tower A)</span>
                                <span class="badge bg-white border text-muted extra-small">1 File</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="glass-widget h-100">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h6 class="fw-bold mb-0">Folder: Apt 405 (Tower A)</h6>
                            <div class="d-flex gap-2">
                                <button class="btn btn-white border btn-sm extra-small rounded-3 shadow-sm"><i class="bi bi-search"></i> Search</button>
                            </div>
                        </div>
                        <div class="list-group list-group-flush gap-3">
                            <div class="d-flex align-items-center justify-content-between p-3 border rounded-4 shadow-sm-hover transition bg-white">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="rounded-circle bg-light d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;"><i class="bi bi-file-pdf text-danger fs-4"></i></div>
                                    <div>
                                        <h6 class="mb-0 small fw-bold">Title_Deed_Apt405.pdf</h6>
                                        <p class="mb-0 extra-small text-muted">1.8 MB • Uploaded 10 Jan 2026</p>
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
                                        <h6 class="mb-0 small fw-bold">No_Objection_Certificate.pdf</h6>
                                        <p class="mb-0 extra-small text-muted">0.5 MB • Uploaded 15 Mar 2026</p>
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
        </main>
    </div>

    @endsection
