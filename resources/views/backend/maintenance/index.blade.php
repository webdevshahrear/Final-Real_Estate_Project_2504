@extends('layouts.backend')

@section('content')
        <!-- Main Content -->
        <div class="container-fluid py-4">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div data-aos="fade-right">
                    <h2 class="fw-bold mb-1">Maintenance Hub</h2>
                    <p class="text-muted mb-0">Managing 14 open issues across the property portfolio.</p>
                </div>
                <div class="d-flex gap-3" data-aos="fade-left">
                    <button class="btn btn-white border rounded-4 px-4 py-2 shadow-sm">
                        <i class="bi bi-plus-circle me-2"></i> External Vendor
                    </button>
                    <button class="btn btn-geist rounded-4 px-4 py-2 border shadow-sm" data-action="create" data-id="NEW_MAINTENANCE">
                        <i class="bi bi-plus-lg me-2"></i> New Ticket
                    </button>
                </div>
            </div>

            <!-- Operational Intelligence Layer -->
            <div class="row g-4 mb-5" data-aos="fade-up">
                <div class="col-lg-8">
                    <div class="bg-white border rounded-4 shadow-sm h-100 p-4 text-dark">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="fw-bold mb-0">Ticket Resolution Journey</h5>
                            <span class="extra-small text-primary fw-bold">Avg. Resolution: 18h 40m</span>
                        </div>
                        <div class="d-flex justify-content-between position-relative px-4 py-3">
                            <div class="position-absolute top-50 start-0 end-0 translate-middle-y border-top border-dashed" style="z-index: 0; margin: 0 40px;"></div>
                            <div class="text-center position-relative" style="z-index: 1;">
                                <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center mx-auto mb-2" style="width: 32px; height: 32px;"><i class="bi bi-file-earmark-plus small"></i></div>
                                <span class="extra-small fw-bold d-block">Request</span>
                                <span class="extra-small text-muted">0-2h</span>
                            </div>
                            <div class="text-center position-relative" style="z-index: 1;">
                                <div class="rounded-circle bg-white shadow-sm d-flex align-items-center justify-content-center mx-auto mb-2 border" style="width: 32px; height: 32px;"><i class="bi bi-search small"></i></div>
                                <span class="extra-small fw-bold d-block">Triage</span>
                                <span class="extra-small text-muted">2-4h</span>
                            </div>
                            <div class="text-center position-relative" style="z-index: 1;">
                                <div class="rounded-circle bg-white shadow-sm d-flex align-items-center justify-content-center mx-auto mb-2 border text-muted" style="width: 32px; height: 32px;"><i class="bi bi-person-gear small"></i></div>
                                <span class="extra-small fw-bold d-block">Assigned</span>
                                <span class="extra-small text-muted">4-8h</span>
                            </div>
                            <div class="text-center position-relative" style="z-index: 1;">
                                <div class="rounded-circle bg-white shadow-sm d-flex align-items-center justify-content-center mx-auto mb-2 border text-muted" style="width: 32px; height: 32px;"><i class="bi bi-check-circle small"></i></div>
                                <span class="extra-small fw-bold d-block">Resolved</span>
                                <span class="extra-small text-muted">24h Max</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-white border rounded-4 shadow-sm h-100 p-4 text-dark">
                        <h5 class="fw-bold mb-4">Vendor Performance</h5>
                        <div class="list-group list-group-flush gap-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-0 small fw-bold">PlumbFast Inc.</h6>
                                    <div class="text-warning small"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half text-muted"></i></div>
                                </div>
                                <span class="badge bg-light text-dark border extra-small">92% Resp.</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-0 small fw-bold">VoltGuard Electric</h6>
                                    <div class="text-warning small"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star text-muted"></i></div>
                                </div>
                                <span class="badge bg-light text-dark border extra-small">85% Resp.</span>
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
                                    <tr>
                                        <td><span class="small font-mono fw-bold">TKT-890</span></td>
                                        <td>
                                            <div class="small fw-bold">Sarah Jenkins</div>
                                            <div class="extra-small text-muted">Apt 402 • Imperial Heights</div>
                                        </td>
                                        <td><span class="small">Water Leakage in Kitchen</span></td>
                                        <td><span class="badge bg-danger-subtle text-danger extra-small">Urgent</span></td>
                                        <td><span class="badge bg-warning-subtle text-warning extra-small">In Progress</span></td>
                                        <td><span class="extra-small fw-bold">PlumbFast Inc.</span></td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button class="btn btn-sm btn-light border rounded-3 shadow-sm-hover" title="View Details" data-action="view" data-id="TKT-890"><i class="bi bi-eye"></i></button>
                                                <button class="btn btn-sm btn-light border rounded-3 shadow-sm-hover" title="Edit/Manage Ticket" data-action="edit" data-id="TKT-890"><i class="bi bi-pencil"></i></button>
                                                <button class="btn btn-sm btn-success-subtle border text-success rounded-3 shadow-sm-hover" title="Resolve Ticket" data-action="resolve" data-id="TKT-890"><i class="bi bi-check2-circle"></i></button>
                                                <button class="btn btn-sm btn-light-subtle border text-danger rounded-3 shadow-sm-hover" title="Cancel Ticket" data-action="delete" data-id="TKT-890"><i class="bi bi-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="small font-mono fw-bold">TKT-891</span></td>
                                        <td>
                                            <div class="small fw-bold">Arlene McCoy</div>
                                            <div class="extra-small text-muted">Shop 04 • Imperial Heights</div>
                                        </td>
                                        <td><span class="small">AC Maintenance Regular</span></td>
                                        <td><span class="badge bg-primary-subtle text-primary extra-small">Medium</span></td>
                                        <td><span class="badge bg-light text-muted extra-small">Scheduled</span></td>
                                        <td><span class="extra-small fw-bold">Internal Team</span></td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button class="btn btn-sm btn-light border rounded-3 shadow-sm-hover" title="View Details" data-action="view" data-id="TKT-891"><i class="bi bi-eye"></i></button>
                                                <button class="btn btn-sm btn-light border rounded-3 shadow-sm-hover" title="Edit/Manage Ticket" data-action="edit" data-id="TKT-891"><i class="bi bi-pencil"></i></button>
                                                <button class="btn btn-sm btn-success-subtle border text-success rounded-3 shadow-sm-hover" title="Resolve Ticket" data-action="resolve" data-id="TKT-891"><i class="bi bi-check2-circle"></i></button>
                                                <button class="btn btn-sm btn-light-subtle border text-danger rounded-3 shadow-sm-hover" title="Cancel Ticket" data-action="delete" data-id="TKT-891"><i class="bi bi-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <!-- Work Order Hub (PRD 10.3) -->
            <div class="row g-4 mt-1" data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="glass-widget bg-white text-dark">
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
                                        <td class="p-2"><span class="extra-small">$450.00</span></td>
                                        <td class="p-2"><span class="badge bg-success-subtle text-success extra-small">On-site</span></td>
                                        <td class="p-2"><span class="extra-small text-muted">Starts Today 02:00 PM</span></td>
                                    </tr>
                                    <tr>
                                        <td class="p-2"><span class="small fw-bold">WO-2026-05</span></td>
                                        <td class="p-2"><span class="extra-small text-primary text-decoration-line-through opacity-50">TKT-885</span></td>
                                        <td class="p-2"><span class="extra-small fw-bold">VoltGuard Electric</span></td>
                                        <td class="p-2"><span class="extra-small">$1,200.00</span></td>
                                        <td class="p-2"><span class="badge bg-warning-subtle text-warning extra-small">Procurement</span></td>
                                        <td class="p-2"><span class="extra-small text-muted">Pending Materials</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    @endsection