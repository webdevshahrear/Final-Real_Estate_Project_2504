@extends('layouts.backend')

@section('content')
    <div class="container-fluid py-4">
        <!-- Header Section -->
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div data-aos="fade-right">
                <h2 class="fw-bold mb-1 text-primary-navy">Ownership Transfers</h2>
                <p class="text-muted mb-0">Auditing and processing legal property ownership shifts.</p>
            </div>
            <div class="d-flex gap-3" data-aos="fade-left">
                <button class="btn btn-white border rounded-4 px-4 py-2 shadow-sm transition-hover">
                    <i class="bi bi-download me-2"></i> Export Audit
                </button>
                <button class="btn btn-geist rounded-4 px-4 py-2 shadow-sm" data-action="create" data-id="INITIATE_TRANSFER">
                    <i class="bi bi-plus-lg me-2"></i> Initiate Transfer
                </button>
            </div>
        </div>

        <!-- Intelligence Analytics Layer -->
        <div class="row g-4 mb-5" data-aos="fade-up">
            <div class="col-lg-8">
                <div class="bg-white border rounded-4 shadow-sm h-100 p-0 overflow-hidden bento-card-wrapper">
                    <div class="p-4 border-bottom d-flex justify-content-between align-items-center bg-light-subtle">
                        <h6 class="fw-bold mb-0 text-primary-navy">Asset Mobility Matrix</h6>
                        <span class="badge bg-primary-navy text-white extra-small px-3 rounded-pill shadow-sm">Real-time Sync</span>
                    </div>
                    <div class="row g-0 h-100">
                        <div class="col-md-7 p-4 border-end">
                            <div class="mb-4">
                                <h6 class="extra-small text-muted fw-bold uppercase mb-2">Liquidity Velocity</h6>
                                <div class="display-5 fw-bold text-primary-navy">4.8 <span class="fs-6 text-muted fw-normal">Days</span></div>
                                <p class="extra-small text-success mb-0 mt-2"><i class="bi bi-lightning-fill"></i> Avg. Transfer Time (Record Low)</p>
                            </div>
                            <div class="p-3 bg-light rounded-4 border shadow-sm-inset">
                                <div class="d-flex justify-content-between extra-small mb-2 text-muted">
                                    <span>Cross-Owner Handover Completion</span>
                                    <span class="fw-bold text-primary-navy">88%</span>
                                </div>
                                <div class="progress" style="height: 6px; background: rgba(0,0,0,0.05);">
                                    <div class="progress-bar bg-accent-blue rounded-pill" style="width: 88%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 p-4 bg-light-subtle d-flex flex-column justify-content-center">
                            <h6 class="fw-bold extra-small mb-4 uppercase text-muted">Workflow Efficiency</h6>
                            <div class="mb-4">
                                <div class="d-flex justify-content-between extra-small mb-2"><span>Compliance Sync:</span><span class="fw-bold">99.2%</span></div>
                                <div class="progress" style="height: 4px; background: rgba(0,0,0,0.05);"><div class="progress-bar bg-success rounded-pill" style="width: 99%;"></div></div>
                            </div>
                            <div class="mb-0">
                                <div class="d-flex justify-content-between extra-small mb-2"><span>Financial Exit:</span><span class="fw-bold text-primary-navy">Cleared</span></div>
                                <div class="progress" style="height: 4px; background: rgba(0,0,0,0.05);"><div class="progress-bar bg-primary-navy rounded-pill" style="width: 100%;"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white border rounded-4 shadow-sm h-100 p-4 bento-card-wrapper transition-hover">
                    <h6 class="fw-bold mb-4 text-primary-navy">Transfer Volume Pulse</h6>
                    <div class="d-flex align-items-end gap-2 h-50 mb-3" style="min-height: 100px;">
                        <div class="bg-primary-navy opacity-10 flex-grow-1 rounded-3" style="height: 20%;"></div>
                        <div class="bg-primary-navy opacity-30 flex-grow-1 rounded-3" style="height: 40%;"></div>
                        <div class="bg-primary-navy opacity-50 flex-grow-1 rounded-3" style="height: 30%;"></div>
                        <div class="bg-primary-navy flex-grow-1 rounded-3 shadow-sm" style="height: 90%;"></div>
                        <div class="bg-primary-navy opacity-75 flex-grow-1 rounded-3" style="height: 60%;"></div>
                    </div>
                    <p class="extra-small text-muted mb-4">Capital movement is up <strong class="text-success">22%</strong> this fiscal quarter.</p>
                    <button class="btn btn-white border w-100 rounded-4 py-2 extra-small fw-bold shadow-sm transition-hover">
                        <i class="bi bi-file-earmark-bar-graph me-1"></i> Full Mobility Audit
                    </button>
                </div>
            </div>
        </div>

        <!-- Transfer Audit Trail -->
        <div class="row g-4" data-aos="fade-up">
            <div class="col-12">
                <div class="bg-white border rounded-4 shadow-sm p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="fw-bold mb-0 text-primary-navy">Transfer Registry Audit Trail</h5>
                        <div class="d-flex gap-2">
                            <div class="input-group input-group-sm" style="width: 250px;">
                                <span class="input-group-text bg-transparent border-end-0 rounded-start-4 ps-3 text-muted">
                                    <i class="bi bi-search"></i>
                                </span>
                                <input type="text" class="form-control border-start-0 rounded-end-4 extra-small" placeholder="Search by Unit or Owner...">
                            </div>
                            <select class="form-select form-select-sm rounded-4 extra-small border shadow-none" style="width: 140px;">
                                <option>All States</option>
                                <option>Legal Review</option>
                                <option>Verified</option>
                                <option>Missing Docs</option>
                            </select>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle custom-table-geist">
                            <thead>
                                <tr class="bg-light-subtle">
                                    <th class="extra-small text-muted uppercase py-3 ps-4">Initiation</th>
                                    <th class="extra-small text-muted uppercase py-3">Property / Unit</th>
                                    <th class="extra-small text-muted uppercase py-3">Previous Owner</th>
                                    <th class="extra-small text-muted uppercase py-3">Acquiring Owner</th>
                                    <th class="extra-small text-muted uppercase py-3 text-center">Docs</th>
                                    <th class="extra-small text-muted uppercase py-3">Workflow State</th>
                                    <th class="extra-small text-muted uppercase py-3 pe-4 text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="transition-hover">
                                    <td class="ps-4">
                                        <div class="d-flex flex-column">
                                            <span class="small font-mono fw-bold text-primary-navy">12 Apr 2026</span>
                                            <span class="extra-small text-muted">10:42 AM</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="small fw-bold">Imperial Heights</span>
                                            <span class="extra-small text-accent-blue">Apt 104 • Resale</span>
                                        </div>
                                    </td>
                                    <td><span class="small fw-medium">Robert Downey Jr.</span></td>
                                    <td><span class="small fw-medium text-primary-navy">Mark Thompson</span></td>
                                    <td class="text-center">
                                        <span class="badge bg-success-subtle text-success extra-small rounded-pill px-3"><i class="bi bi-check-circle-fill me-1"></i> Verified</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-warning-subtle text-warning extra-small rounded-pill px-3 shadow-sm-inset border border-warning border-opacity-10">Legal Review</span>
                                    </td>
                                    <td class="pe-4 text-end">
                                        <div class="d-flex gap-2 justify-content-end">
                                            <button class="btn btn-sm btn-light border rounded-3 shadow-sm-hover" title="Audit Lifecycle"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-light border rounded-3 shadow-sm-hover" title="Update Registry"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-light-subtle text-danger border rounded-3 shadow-sm-hover" title="Cancel Process"><i class="bi bi-trash3"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="transition-hover">
                                    <td class="ps-4">
                                        <div class="d-flex flex-column">
                                            <span class="small font-mono fw-bold text-primary-navy">05 Apr 2026</span>
                                            <span class="extra-small text-muted">02:15 PM</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="small fw-bold">Skyline Plaza</span>
                                            <span class="extra-small text-accent-blue">Shop 02 • Commercial</span>
                                        </div>
                                    </td>
                                    <td><span class="small fw-medium">Elon Musk</span></td>
                                    <td><span class="small fw-medium text-primary-navy">Jeff Bezos</span></td>
                                    <td class="text-center">
                                        <span class="badge bg-danger-subtle text-danger extra-small rounded-pill px-3"><i class="bi bi-exclamation-triangle-fill me-1"></i> Missing Deed</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-danger-subtle text-danger extra-small rounded-pill px-3 shadow-sm-inset border border-danger border-opacity-10">Action Required</span>
                                    </td>
                                    <td class="pe-4 text-end">
                                        <div class="d-flex gap-2 justify-content-end">
                                            <button class="btn btn-sm btn-light border rounded-3 shadow-sm-hover" title="Audit Lifecycle"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-light border rounded-3 shadow-sm-hover" title="Update Registry"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-light-subtle text-danger border rounded-3 shadow-sm-hover" title="Cancel Process"><i class="bi bi-trash3"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4 d-flex justify-content-between align-items-center bg-light-subtle p-3 rounded-4">
                        <span class="extra-small text-muted">Showing 2 of 24 transfer records</span>
                        <nav>
                            <ul class="pagination pagination-sm mb-0">
                                <li class="page-item disabled"><span class="page-link rounded-start-3">Prev</span></li>
                                <li class="page-item active"><span class="page-link">1</span></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link rounded-end-3" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection