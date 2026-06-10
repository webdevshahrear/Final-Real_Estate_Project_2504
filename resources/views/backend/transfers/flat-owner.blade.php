@extends('layouts.backend')

@section('content')
    <div class="container-fluid py-4">
        <!-- Header Section -->
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div data-aos="fade-right">
                <h2 class="fw-bold mb-1 text-primary-navy">Ownership Transfers</h2>
                <p class="text-muted mb-0">Securely initiate and track the transfer of property titles.</p>
            </div>
            <div class="d-flex gap-3" data-aos="fade-left">
                <button class="btn btn-geist rounded-4 px-4 py-2 shadow-sm transition-hover" data-action="create" data-id="TRANSFER">
                    <i class="bi bi-plus-lg me-2"></i> New Transfer Request
                </button>
            </div>
        </div>

        <!-- Transfer Status Row -->
        <div class="row g-4 mb-5" data-aos="fade-up">
            <div class="col-md-6">
                <div class="bg-white border rounded-4 shadow-sm h-100 p-4 transition-hover">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="fw-bold mb-0 text-primary-navy">Incoming Requests</h5>
                        <span class="badge bg-primary-navy text-white extra-small px-3 rounded-pill shadow-sm">0 Active</span>
                    </div>
                    <div class="text-center py-5">
                        <i class="bi bi-inboxes fs-1 text-muted opacity-25"></i>
                        <p class="extra-small text-muted mt-3">No pending ownership transfers to you.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bg-white border rounded-4 shadow-sm h-100 p-4 transition-hover">
                     <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="fw-bold mb-0 text-primary-navy">Outgoing Requests</h5>
                        <span class="badge bg-warning-subtle text-warning extra-small px-3 rounded-pill border border-warning border-opacity-10">1 Pending Review</span>
                    </div>
                    <div class="p-3 border rounded-4 bg-light-subtle mb-4 shadow-sm-inset">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="extra-small fw-bold text-muted font-mono">REF #TR-2026-X1</span>
                            <span class="badge bg-warning text-white extra-small px-2">ADMIN REVIEW</span>
                        </div>
                        <h6 class="small fw-bold mb-1">Apt 12B, Tower A <i class="bi bi-arrow-right mx-1 opacity-50"></i> Zahid Hassan</h6>
                        <p class="extra-small text-muted mb-0">Legal verification in progress by Imperial Legal Hub.</p>
                    </div>
                    <button class="btn btn-white border w-100 rounded-4 extra-small fw-bold py-2 shadow-sm transition-hover">
                        <i class="bi bi-clock-history me-1"></i> View Request History
                    </button>
                </div>
            </div>
        </div>

        <!-- Legal Documentation Pulse -->
        <div class="bg-white border rounded-4 shadow-sm p-4" data-aos="fade-up">
            <h5 class="fw-bold mb-4 text-primary-navy">Post-Transfer Compliance</h5>
            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <div class="p-4 border rounded-4 bg-light-subtle transition-hover">
                        <div class="icon-box bg-success-subtle text-success p-3 rounded-circle d-inline-block mb-3 shadow-sm"><i class="bi bi-file-earmark-check fs-4"></i></div>
                        <h6 class="fw-bold small mb-1">Title Verification</h6>
                        <p class="extra-small text-muted mb-0">All titles are digitally verified via Blockchain OS.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 border rounded-4 bg-light-subtle transition-hover">
                        <div class="icon-box bg-primary-subtle text-primary p-3 rounded-circle d-inline-block mb-3 shadow-sm"><i class="bi bi-shield-lock fs-4"></i></div>
                        <h6 class="fw-bold small mb-1">Zero-Manual Flow</h6>
                        <p class="extra-small text-muted mb-0">Fully automated tax and dues clearance checks.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 border rounded-4 bg-light-subtle transition-hover">
                        <div class="icon-box bg-info-subtle text-info p-3 rounded-circle d-inline-block mb-3 shadow-sm"><i class="bi bi-clock-history fs-4"></i></div>
                        <h6 class="fw-bold small mb-1">Fast Track</h6>
                        <p class="extra-small text-muted mb-0">Average completion time: 7 working days.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



