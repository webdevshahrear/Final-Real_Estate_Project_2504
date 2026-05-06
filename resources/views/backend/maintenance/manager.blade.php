@extends('layouts.backend')

@section('content')
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div data-aos="fade-right">
                    <h2 class="fw-bold mb-1">Maintenance Hub</h2>
                    <p class="text-muted mb-0">Managing 14 open issues across the property portfolio.</p>
                </div>
                <div class="d-flex gap-3" data-aos="fade-left">
                    <button class="btn btn-white border rounded-4 px-4 py-2 shadow-sm d-flex align-items-center gap-2 transition-hover">
                        <i class="bi bi-person-gear text-primary"></i>
                        <span>External Vendors</span>
                    </button>
                    <button class="btn btn-primary-navy rounded-4 px-4 py-2 shadow-sm d-flex align-items-center gap-2 transition-hover" data-action="create" data-id="TICKET">
                        <i class="bi bi-plus-circle-fill"></i>
                        <span>New Service Request</span>
                    </button>
                </div>
            </div>

            <!-- Operational Intelligence Layer -->
            <div class="row g-4 mb-5" data-aos="fade-up">
                <div class="col-lg-8">
                    <div class="bg-white border rounded-4 shadow-sm h-100 p-0 overflow-hidden transition-hover translate-y-hover">
                        <div class="p-4 border-bottom d-flex justify-content-between align-items-center bg-light-subtle">
                            <div>
                                <h6 class="fw-bold mb-0">Ticket Resolution & Lifecycle Intelligence</h6>
                                <p class="extra-small text-muted mb-0">Managed resolution performance vs operational SLAs.</p>
                            </div>
                            <span class="badge bg-primary-navy text-white extra-small px-3 rounded-pill shadow-sm">Avg. Res: 18h 40m</span>
                        </div>
                        <div class="p-4">
                            <div class="d-flex justify-content-between position-relative px-4 py-3 mb-2">
                                <div class="position-absolute top-50 start-0 end-0 translate-middle-y border-top border-dashed" style="z-index: 0; margin: 0 40px; border-color: rgba(0,0,0,0.1) !important;"></div>
                                <div class="text-center position-relative" style="z-index: 1;">
                                    <div class="rounded-circle bg-primary-navy text-white d-flex align-items-center justify-content-center mx-auto mb-2 shadow-sm" style="width: 36px; height: 36px;"><i class="bi bi-file-earmark-plus"></i></div>
                                    <span class="extra-small fw-bold d-block text-primary-navy">Logged</span>
                                    <span class="extra-small text-muted opacity-75">0-2h</span>
                                </div>
                                <div class="text-center position-relative" style="z-index: 1;">
                                    <div class="rounded-circle bg-white shadow-sm d-flex align-items-center justify-content-center mx-auto mb-2 border" style="width: 36px; height: 36px;"><i class="bi bi-search text-muted"></i></div>
                                    <span class="extra-small fw-bold d-block text-muted">Triage</span>
                                    <span class="extra-small text-muted opacity-75">2-4h</span>
                                </div>
                                <div class="text-center position-relative" style="z-index: 1;">
                                    <div class="rounded-circle bg-white shadow-sm d-flex align-items-center justify-content-center mx-auto mb-2 border" style="width: 36px; height: 36px;"><i class="bi bi-person-gear text-muted"></i></div>
                                    <span class="extra-small fw-bold d-block text-muted">Assigned</span>
                                    <span class="extra-small text-muted opacity-75">4-8h</span>
                                </div>
                                <div class="text-center position-relative" style="z-index: 1;">
                                    <div class="rounded-circle bg-white shadow-sm d-flex align-items-center justify-content-center mx-auto mb-2 border" style="width: 36px; height: 36px;"><i class="bi bi-check2-circle text-muted"></i></div>
                                    <span class="extra-small fw-bold d-block text-muted">Resolved</span>
                                    <span class="extra-small text-muted opacity-75">24h SLA</span>
                                </div>
                            </div>
                            <div class="p-3 bg-light rounded-4 border shadow-sm-inset text-center mt-3">
                                <p class="extra-small text-muted mb-0">
                                    <i class="bi bi-info-circle me-1 text-primary"></i> 
                                    <strong>98.2%</strong> of tickets resolved within the 24h SLA this month.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-white border rounded-4 shadow-sm h-100 p-4 transition-hover translate-y-hover">
                        <h6 class="fw-bold mb-4 d-flex justify-content-between">
                            <span>Vendor Performance</span>
                            <span class="extra-small text-muted fw-normal">Live Tracking</span>
                        </h6>
                        <div class="d-grid gap-3">
                            <div class="p-3 border rounded-4 bg-light shadow-sm-hover transition">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h6 class="mb-0 small fw-bold text-primary-navy">PlumbFast Inc.</h6>
                                    <span class="badge bg-success-subtle text-success extra-small rounded-pill">92% Resp</span>
                                </div>
                                <div class="text-warning extra-small"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></div>
                            </div>
                            <div class="p-3 border rounded-4 bg-light shadow-sm-hover transition">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h6 class="mb-0 small fw-bold text-primary-navy">VoltGuard Electric</h6>
                                    <span class="badge bg-primary-subtle text-primary extra-small rounded-pill">85% Resp</span>
                                </div>
                                <div class="text-warning extra-small"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star text-muted"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Maintenance Table -->
            <div class="row g-4" data-aos="fade-up">
                <div class="col-12">
                    <div class="bg-white border rounded-4 shadow-sm p-4 text-dark">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="fw-bold mb-0">Issue Log</h5>
                            <div class="d-flex gap-2">
                                <select class="form-select border-0 shadow-sm rounded-4 px-3 extra-small" style="width: 140px;">
                                    <option>Priority: All</option>
                                    <option>Urgent</option>
                                    <option>Medium</option>
                                </select>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover align-middle custom-table-geist">
                                <thead>
                                    <tr>
                                        <th class="extra-small text-muted uppercase">Issue ID</th>
                                        <th class="extra-small text-muted uppercase">Resident / Unit</th>
                                        <th class="extra-small text-muted uppercase">Subject</th>
                                        <th class="extra-small text-muted uppercase">Priority</th>
                                        <th class="extra-small text-muted uppercase">Status</th>
                                        <th class="extra-small text-muted uppercase">Assigned To</th>
                                        <th class="extra-small text-muted uppercase">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="transition">
                                        <td><span class="small font-mono fw-bold text-primary-navy">TKT-890</span></td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <span class="small fw-bold">Sarah Jenkins</span>
                                                <span class="extra-small text-muted opacity-75">Apt 402 • Imperial Heights</span>
                                            </div>
                                        </td>
                                        <td><span class="small text-primary-navy">Water Leakage in Kitchen</span></td>
                                        <td><span class="badge bg-danger-subtle text-danger extra-small rounded-pill px-3 shadow-sm">Urgent</span></td>
                                        <td><span class="badge bg-warning-subtle text-warning extra-small rounded-pill px-3 shadow-sm">In Progress</span></td>
                                        <td><span class="extra-small fw-bold text-muted">PlumbFast Inc.</span></td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button class="btn btn-sm btn-white border rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="View Detail"><i class="bi bi-eye small"></i></button>
                                                <button class="btn btn-sm btn-white border rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Edit Ticket"><i class="bi bi-pencil small"></i></button>
                                                <button class="btn btn-sm btn-primary-navy rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Resolve Ticket"><i class="bi bi-check2-all small"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="transition">
                                        <td><span class="small font-mono fw-bold text-primary-navy">TKT-891</span></td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <span class="small fw-bold">Arlene McCoy</span>
                                                <span class="extra-small text-muted opacity-75">Shop 04 • Imperial Heights</span>
                                            </div>
                                        </td>
                                        <td><span class="small text-primary-navy">AC Maintenance Regular</span></td>
                                        <td><span class="badge bg-primary-subtle text-primary extra-small rounded-pill px-3 shadow-sm">Medium</span></td>
                                        <td><span class="badge bg-light text-muted extra-small rounded-pill px-3 border shadow-sm">Scheduled</span></td>
                                        <td><span class="extra-small fw-bold text-muted">Internal Team</span></td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button class="btn btn-sm btn-white border rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="View Detail"><i class="bi bi-eye small"></i></button>
                                                <button class="btn btn-sm btn-white border rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Edit Ticket"><i class="bi bi-pencil small"></i></button>
                                                <button class="btn btn-sm btn-primary-navy rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Resolve Ticket"><i class="bi bi-check2-all small"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Work Order Hub -->
            <div class="row g-4 mt-1" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="bg-white border rounded-4 shadow-sm p-4 text-dark">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="fw-bold mb-0">Active Work Orders</h5>
                            <button class="btn btn-sm btn-white border rounded-pill px-3" data-action="export" data-id="WORK_ORDERS">Sync to Vendor Mobile</button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-sm align-middle">
                                <thead>
                                    <tr class="bg-light-subtle">
                                        <th class="extra-small p-2">WO #</th>
                                        <th class="extra-small p-2">Related Ticket</th>
                                        <th class="extra-small p-2">Vendor</th>
                                        <th class="extra-small p-2">Estimated Cost</th>
                                        <th class="extra-small p-2">Material Status</th>
                                        <th class="extra-small p-2">Timeline</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-2"><span class="small fw-bold">WO-2026-04</span></td>
                                        <td class="p-2"><span class="extra-small text-primary">TKT-890</span></td>
                                        <td class="p-2"><span class="extra-small fw-bold">PlumbFast Inc.</span></td>
                                        <td class="p-2"><span class="extra-small">৳45,000.00</span></td>
                                        <td class="p-2"><span class="badge bg-success-subtle text-success extra-small">On-site</span></td>
                                        <td class="p-2"><span class="extra-small text-muted">Starts Today 02:00 PM</span></td>
                                    </tr>
                                    <tr>
                                        <td class="p-2"><span class="small fw-bold">WO-2026-05</span></td>
                                        <td class="p-2"><span class="extra-small text-primary text-decoration-line-through opacity-50">TKT-885</span></td>
                                        <td class="p-2"><span class="extra-small fw-bold">VoltGuard Electric</span></td>
                                        <td class="p-2"><span class="extra-small">৳120,000.00</span></td>
                                        <td class="p-2"><span class="badge bg-warning-subtle text-warning extra-small">Procurement</span></td>
                                        <td class="p-2"><span class="extra-small text-muted">Pending Materials</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection