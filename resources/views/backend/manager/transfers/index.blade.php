@extends('layouts.backend')

@section('content')
    <div class="container-fluid py-4">
        <!-- Manager Header -->
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div data-aos="fade-right">
                <h2 class="fw-bold mb-1 text-primary-navy">Transfer Management Hub</h2>
                <p class="text-muted mb-0">High-level oversight of portfolio liquidity and legal handovers.</p>
            </div>
            <div class="d-flex gap-3" data-aos="fade-left">
                <button class="btn btn-primary-navy rounded-4 px-4 py-2 shadow-sm d-flex align-items-center gap-2 transition-hover" data-action="create" data-id="TRANSFER">
                    <i class="bi bi-arrow-left-right"></i>
                    <span>Initiate Ownership Transfer</span>
                </button>
            </div>
        </div>

        <!-- High-Integrity Intelligence Layer -->
        <div class="row g-4 mb-5" data-aos="fade-up">
            <div class="col-lg-8">
                <div class="bg-white border rounded-4 shadow-sm h-100 p-0 overflow-hidden bento-card-wrapper transition-hover">
                    <div class="p-4 border-bottom d-flex justify-content-between align-items-center bg-light-subtle">
                        <div>
                            <h6 class="fw-bold mb-0 text-primary-navy">Asset Mobility & Transfer Intelligence</h6>
                            <p class="extra-small text-muted mb-0">Managed lifecycle of portfolio ownership shifts and legal compliance.</p>
                        </div>
                        <span class="badge bg-primary-navy text-white extra-small px-3 rounded-pill shadow-sm">Active Monitoring</span>
                    </div>
                    <div class="row g-0 h-100">
                        <div class="col-md-7 p-4 border-end">
                            <div class="mb-4">
                                <h6 class="extra-small text-muted fw-bold uppercase mb-2 opacity-50">Liquidity Velocity</h6>
                                <div class="d-flex align-items-baseline gap-2">
                                    <div class="display-5 fw-bold text-primary-navy">4.8 <span class="fs-6 text-muted fw-normal">Days</span></div>
                                    <span class="badge bg-success-subtle text-success extra-small rounded-pill px-2"><i class="bi bi-clock-history"></i> Record Low</span>
                                </div>
                                <p class="extra-small text-muted mt-2 mb-0">Average time to complete legal registry updates across all active units.</p>
                            </div>
                            <div class="p-3 bg-light rounded-4 border shadow-sm-inset mt-4">
                                <div class="d-flex justify-content-between extra-small mb-2">
                                    <span class="text-muted">Cross-Owner Document Sync</span>
                                    <span class="fw-bold text-primary-navy">14/16 Matched</span>
                                </div>
                                <div class="progress" style="height: 6px; background: rgba(0,0,0,0.05);"><div class="progress-bar bg-accent-blue rounded-pill" style="width: 85%;"></div></div>
                            </div>
                        </div>
                        <div class="col-md-5 p-4 bg-light-subtle d-flex flex-column justify-content-center">
                            <h6 class="fw-bold extra-small mb-4 uppercase opacity-50">Operational Flow Health</h6>
                            <div class="mb-4">
                                <div class="d-flex justify-content-between extra-small mb-2"><span>Compliance Sync</span><span class="fw-bold">99.2%</span></div>
                                <div class="progress" style="height: 6px; background: rgba(0,0,0,0.05);"><div class="progress-bar bg-success rounded-pill" style="width: 99%;"></div></div>
                            </div>
                            <div class="mb-0">
                                <div class="d-flex justify-content-between extra-small mb-2"><span>Financial Exit</span><span class="fw-bold text-success">Cleared</span></div>
                                <div class="progress" style="height: 6px; background: rgba(0,0,0,0.05);"><div class="progress-bar bg-primary-navy rounded-pill" style="width: 100%;"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white border rounded-4 shadow-sm h-100 p-4 bento-card-wrapper transition-hover">
                    <h6 class="fw-bold mb-4 d-flex justify-content-between text-primary-navy">
                        <span>Transfer Volume</span>
                        <span class="extra-small text-muted fw-normal">Quarterly Pulse</span>
                    </h6>
                    <div class="d-flex align-items-end gap-2 h-50 mb-3" style="min-height: 100px;">
                        <div class="bg-primary-navy opacity-10 flex-grow-1 rounded-3" style="height: 20%;"></div>
                        <div class="bg-primary-navy opacity-30 flex-grow-1 rounded-3" style="height: 40%;"></div>
                        <div class="bg-primary-navy opacity-50 flex-grow-1 rounded-3" style="height: 30%;"></div>
                        <div class="bg-primary-navy flex-grow-1 rounded-3 shadow-sm" style="height: 90%;"></div>
                        <div class="bg-primary-navy opacity-75 flex-grow-1 rounded-3" style="height: 60%;"></div>
                    </div>
                    <p class="extra-small text-muted mb-4">Capital mobility is up <strong class="text-success">22%</strong> vs previous fiscal quarter.</p>
                    <button class="btn btn-white border w-100 rounded-4 py-2 extra-small fw-bold transition-hover shadow-sm">
                        <i class="bi bi-file-earmark-pdf me-1"></i> Download Mobility Audit
                    </button>
                </div>
            </div>
        </div>

        <!-- Management Audit Trail -->
        <div class="row g-4" data-aos="fade-up">
            <div class="col-12">
                <div class="bg-white border rounded-4 shadow-sm p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="fw-bold mb-0 text-primary-navy">Critical Transfer Trail</h5>
                        <div class="d-flex gap-2">
                            <button class="btn btn-sm btn-white border rounded-3 px-3 extra-small fw-bold shadow-sm-hover">
                                <i class="bi bi-filter me-1"></i> Advanced Filters
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle custom-table-geist">
                            <thead>
                                <tr class="bg-light-subtle">
                                    <th class="extra-small text-muted uppercase py-3 ps-4">Initiation Date</th>
                                    <th class="extra-small text-muted uppercase py-3">Property / Unit</th>
                                    <th class="extra-small text-muted uppercase py-3">From (Prev Owner)</th>
                                    <th class="extra-small text-muted uppercase py-3">To (New Owner)</th>
                                    <th class="extra-small text-muted uppercase py-3 text-center">Docs Status</th>
                                    <th class="extra-small text-muted uppercase py-3">Workflow State</th>
                                    <th class="extra-small text-muted uppercase py-3 pe-4 text-end">Management Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="transition-hover">
                                    <td class="ps-4"><span class="small font-mono fw-bold text-primary-navy">Apr 12, 2026</span></td>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="small fw-bold">Imperial Heights / Apt 104</span>
                                            <span class="extra-small text-muted opacity-75">Resale Transaction</span>
                                        </div>
                                    </td>
                                    <td><span class="small fw-bold">Robert Downy Jr.</span></td>
                                    <td><span class="small fw-bold text-primary-navy">Mark Thompson</span></td>
                                    <td class="text-center"><span class="badge bg-success-subtle text-success extra-small rounded-pill px-3 shadow-sm">Verified</span></td>
                                    <td><span class="badge bg-warning-subtle text-warning extra-small rounded-pill px-3 shadow-sm border border-warning border-opacity-10">Legal Review</span></td>
                                    <td class="pe-4 text-end">
                                        <div class="d-flex gap-2 justify-content-end">
                                            <button class="btn btn-sm btn-white border rounded-circle shadow-sm transition-hover p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="View Audit"><i class="bi bi-eye small"></i></button>
                                            <button class="btn btn-sm btn-white border rounded-circle shadow-sm transition-hover p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Update State"><i class="bi bi-pencil small"></i></button>
                                            <button class="btn btn-sm btn-primary-navy text-white rounded-circle shadow-sm transition-hover p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Cancel Process"><i class="bi bi-x-circle small"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="transition-hover">
                                    <td class="ps-4"><span class="small font-mono fw-bold text-primary-navy">Apr 05, 2026</span></td>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="small fw-bold">Skyline Plaza / Shop 02</span>
                                            <span class="extra-small text-muted opacity-75">Commercial Handover</span>
                                        </div>
                                    </td>
                                    <td><span class="small fw-bold">Elon Musk</span></td>
                                    <td><span class="small fw-bold text-primary-navy">Jeff Bezos</span></td>
                                    <td class="text-center"><span class="badge bg-danger-subtle text-danger extra-small rounded-pill px-3 shadow-sm">Missing Deed</span></td>
                                    <td><span class="badge bg-danger-subtle text-danger extra-small rounded-pill px-3 shadow-sm border border-danger border-opacity-10">Action Required</span></td>
                                    <td class="pe-4 text-end">
                                        <div class="d-flex gap-2 justify-content-end">
                                            <button class="btn btn-sm btn-white border rounded-circle shadow-sm transition-hover p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="View Audit"><i class="bi bi-eye small"></i></button>
                                            <button class="btn btn-sm btn-white border rounded-circle shadow-sm transition-hover p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Update State"><i class="bi bi-pencil small"></i></button>
                                            <button class="btn btn-sm btn-primary-navy text-white rounded-circle shadow-sm transition-hover p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Cancel Process"><i class="bi bi-x-circle small"></i></button>
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