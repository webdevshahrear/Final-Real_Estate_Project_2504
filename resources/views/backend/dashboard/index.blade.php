@extends('layouts.backend')
@section('content')
<!-- Quick Actions -->
<div class="row g-3 mb-4" data-aos="fade-up">
    <div class="col-12">
        <p class="text-uppercase small fw-bold text-muted mb-3 opacity-50" style="letter-spacing: 1px;">Quick Actions
        </p>
        <div class="d-flex flex-wrap gap-2">
            <button class="btn btn-white border rounded-4 px-4 py-2 shadow-sm flex-fill" data-action="create"
                data-id="NEW_TENANT">
                <i class="bi bi-person-plus me-2 text-primary"></i> Add Tenant
            </button>
            <button class="btn btn-white border rounded-4 px-4 py-2 shadow-sm flex-fill"
                data-action="generate_invoices">
                <i class="bi bi-file-earmark-plus me-2 text-success"></i> Generate Invoices
            </button>
            <button class="btn btn-white border rounded-4 px-4 py-2 shadow-sm flex-fill" data-action="create"
                data-id="NEW_NOTICE">
                <i class="bi bi-megaphone me-2 text-warning"></i> Post Notice
            </button>
            <button class="btn btn-white border rounded-4 px-4 py-2 shadow-sm flex-fill" data-action="link_reports">
                <i class="bi bi-file-earmark-bar-graph me-2 text-info"></i> View Reports
            </button>
        </div>
    </div>
</div>

<!-- Critical Alert Hub (PRD 17.1 Integration) -->
<div class="row g-4 mb-5" data-aos="fade-up">
    <div class="col-12">
        <div
            class="bg-white border border-danger shadow-sm rounded-4 py-3 px-4 d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center gap-4">
                <div class="rounded-circle bg-danger p-2 px-3 text-white"><i class="bi bi-exclamation-octagon"></i>
                </div>
                <div>
                    <h6 class="mb-0 fw-bold text-danger">Critical Alerts Detected</h6>
                    <p class="mb-0 extra-small text-danger opacity-75">3 issues require immediate executive clearance.
                    </p>
                </div>
            </div>
            <div class="d-flex gap-3">
                <div
                    class="alert-pill bg-white border border-danger-subtle rounded-pill px-3 py-1 extra-small text-danger fw-bold d-flex align-items-center gap-2">
                    <i class="bi bi-currency-dollar"></i> $4,250 High Arrears
                </div>
                <div
                    class="alert-pill bg-white border border-danger-subtle rounded-pill px-3 py-1 extra-small text-danger fw-bold d-flex align-items-center gap-2">
                    <i class="bi bi-clock-history"></i> 2 Leases Expiring
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Stats Grid -->
<div class="row g-4 mb-3">
    <div class="col-md-4 col-lg-2" data-aos="fade-up" data-aos-delay="0">
        <div class="bg-white border rounded-4 shadow-sm h-100 p-3 p-xl-4">
            <p class="text-muted extra-small fw-bold mb-2 uppercase opacity-50">Buildings</p>
            <h4 class="fw-bold mb-0">12</h4>
            <p class="text-muted extra-small mt-2 mb-0">Across 3 Cities</p>
        </div>
    </div>
    <div class="col-md-4 col-lg-2" data-aos="fade-up" data-aos-delay="100">
        <div class="bg-white border rounded-4 shadow-sm h-100 p-3 p-xl-4">
            <p class="text-muted extra-small fw-bold mb-2 uppercase opacity-50">Total Units</p>
            <h4 class="fw-bold mb-0">142</h4>
            <p class="text-success extra-small mt-2 mb-0">+4 this month</p>
        </div>
    </div>
    <div class="col-md-4 col-lg-2" data-aos="fade-up" data-aos-delay="200">
        <div class="bg-white border rounded-4 shadow-sm h-100 p-3 p-xl-4">
            <p class="text-muted extra-small fw-bold mb-2 uppercase opacity-50">Occupancy</p>
            <h4 class="fw-bold mb-0">94.3%</h4>
            <div class="progress mt-2" style="height: 4px;">
                <div class="progress-bar bg-success" role="progressbar" style="width: 94%;"></div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-lg-2" data-aos="fade-up" data-aos-delay="300">
        <div class="bg-white border rounded-4 shadow-sm h-100 p-3 p-xl-4">
            <p class="text-muted extra-small fw-bold mb-2 uppercase opacity-50">Vacant</p>
            <h4 class="fw-bold mb-0">8</h4>
            <p class="text-warning extra-small mt-2 mb-0">Ready to Lease</p>
        </div>
    </div>
    <div class="col-md-4 col-lg-2" data-aos="fade-up" data-aos-delay="400">
        <div class="bg-white border rounded-4 shadow-sm h-100 p-3 p-xl-4">
            <p class="text-muted extra-small fw-bold mb-2 uppercase opacity-50">Pending Dues</p>
            <h4 class="fw-bold mb-0">$12,450</h4>
            <p class="text-danger extra-small mt-2 mb-0">12 Overdue</p>
        </div>
    </div>
    <div class="col-md-4 col-lg-2" data-aos="fade-up" data-aos-delay="500">
        <div class="bg-white border rounded-4 shadow-sm h-100 p-3 p-xl-4">
            <p class="text-muted extra-small fw-bold mb-2 uppercase opacity-50">Collection</p>
            <h4 class="fw-bold mb-0">$84,200</h4>
            <p class="text-success extra-small mt-2 mb-0">82% Collected</p>
        </div>
    </div>
</div>

<!-- Analytics Section -->
<div class="row g-4 mb-5">
    <!-- Financial Performance -->
    <div class="col-lg-8" data-aos="fade-up">
        <div class="bg-white border rounded-4 shadow-sm h-100 p-4 text-dark">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h5 class="fw-bold mb-0">Financial Performance</h5>
                    <p class="extra-small text-muted mb-0">Revenue vs Expense comparison (12 Months)</p>
                </div>
                <div class="dropdown">
                    <button class="btn btn-sm btn-white border rounded-pill px-3 shadow-sm-hover">2026 Fiscal <i
                            class="bi bi-chevron-down ms-1"></i></button>
                </div>
            </div>
            <div id="revenueExpenseChart" style="min-height: 350px;"></div>
        </div>
    </div>

    <!-- Occupancy Donut Chart -->
    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="bg-white border rounded-4 shadow-sm h-100 d-flex flex-column p-4 text-dark">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="fw-bold mb-0">Occupancy Rate</h5>
                <span
                    class="badge bg-success-subtle text-success border border-success-subtle rounded-pill extra-small px-3">Healthy</span>
            </div>

            <div class="flex-grow-1 d-flex justify-content-center align-items-center">
                <div id="occupancyDonutChart" style="min-height: 250px; width: 100%;"></div>
            </div>

            <div class="mt-4 pt-3 border-top">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <span class="small fw-bold text-muted">
                        <div class="d-inline-block rounded-circle me-2"
                            style="width: 8px; height: 8px; background: #1E3A5F"></div>Sold Units
                    </span>
                    <span class="small fw-bold text-primary-navy">84</span>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <span class="small fw-bold text-muted">
                        <div class="d-inline-block rounded-circle me-2 bg-success" style="width: 8px; height: 8px;">
                        </div>Rented
                    </span>
                    <span class="small fw-bold text-success">50</span>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="small fw-bold text-muted">
                        <div class="d-inline-block rounded-circle me-2 bg-warning" style="width: 8px; height: 8px;">
                        </div>Vacant
                    </span>
                    <span class="small fw-bold text-warning">8</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Operational Tables Grid -->
<div class="row g-4 mb-5">
    <!-- Recent Payments -->
    <div class="col-lg-12">
        <div class="bg-white border rounded-4 shadow-sm p-4 text-dark">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h5 class="fw-bold mb-1">Recent Payments</h5>
                    <p class="extra-small text-muted mb-0">Latest 5 financial transactions securely processed.</p>
                </div>
                <a href="{{ route('admin.billing') }}"
                    class="btn btn-sm btn-geist text-white rounded-pill px-3 shadow-sm-hover border-accents-2">View
                    Financial Ledger</a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover align-middle custom-table-geist mb-0">
                    <thead>
                        <tr>
                            <th class="extra-small text-muted uppercase">Recipient</th>
                            <th class="extra-small text-muted uppercase">Property / Unit</th>
                            <th class="extra-small text-muted uppercase">Method</th>
                            <th class="extra-small text-muted uppercase">Transaction ID</th>
                            <th class="extra-small text-muted uppercase">Amount</th>
                            <th class="extra-small text-muted uppercase text-end">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="rounded-circle bg-primary-subtle text-primary d-flex align-items-center justify-content-center"
                                        style="width: 32px; height: 32px; font-weight: 700; font-size: 0.8rem;">SJ</div>
                                    <span class="small fw-bold">Sarah Jenkins</span>
                                </div>
                            </td>
                            <td><span class="badge bg-light text-dark extra-small border">Imperial Res. / Apt 402</span>
                            </td>
                            <td><span class="small"><i class="bi bi-wallet2 text-muted me-2"></i>bKash</span></td>
                            <td><span class="extra-small text-muted" style="font-family: monospace;">TXN-849204</span>
                            </td>
                            <td><span class="small fw-bold text-dark">$1,200.00</span></td>
                            <td class="text-end"><span
                                    class="badge bg-success-subtle border border-success-subtle text-success extra-small">Paid
                                    Successfully</span></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="rounded-circle bg-info-subtle text-info d-flex align-items-center justify-content-center"
                                        style="width: 32px; height: 32px; font-weight: 700; font-size: 0.8rem;">RF</div>
                                    <span class="small fw-bold">Robert Fox</span>
                                </div>
                            </td>
                            <td><span class="badge bg-light text-dark extra-small border">Commercial / Shop 12</span>
                            </td>
                            <td><span class="small"><i class="bi bi-bank2 text-muted me-2"></i>Bank Transfer</span></td>
                            <td><span class="extra-small text-muted" style="font-family: monospace;">TXN-849203</span>
                            </td>
                            <td><span class="small fw-bold text-dark">$3,500.00</span></td>
                            <td class="text-end"><span
                                    class="badge bg-success-subtle border border-success-subtle text-success extra-small">Paid
                                    Successfully</span></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="rounded-circle bg-warning-subtle text-warning d-flex align-items-center justify-content-center"
                                        style="width: 32px; height: 32px; font-weight: 700; font-size: 0.8rem;">EH</div>
                                    <span class="small fw-bold">Esther Howard</span>
                                </div>
                            </td>
                            <td><span class="badge bg-light text-dark extra-small border">Oasis View / Apt 504</span>
                            </td>
                            <td><span class="small"><i class="bi bi-cash-stack text-muted me-2"></i>Cash Receipt</span>
                            </td>
                            <td><span class="extra-small text-muted" style="font-family: monospace;">RCP-112</span></td>
                            <td><span class="small fw-bold text-dark">$950.00</span></td>
                            <td class="text-end"><span
                                    class="badge bg-success-subtle border border-success-subtle text-success extra-small">Paid
                                    Successfully</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Overdue Invoices -->
    <div class="col-lg-6">
        <div class="bg-white border rounded-4 shadow-sm h-100 p-4 text-dark">
            <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
                <div>
                    <h5 class="fw-bold mb-1">Overdue Invoices</h5>
                    <p class="extra-small text-muted mb-0">Action required for pending collections.</p>
                </div>
                <span
                    class="badge bg-danger-subtle border border-danger-subtle text-danger extra-small px-3 rounded-pill d-flex align-items-center gap-1"><i
                        class="bi bi-exclamation-circle-fill"></i> 12 Overdue</span>
            </div>
            <div class="table-responsive">
                <table class="table table-borderless align-middle custom-table-geist mb-0">
                    <tbody>
                        <tr class="border-bottom border-light">
                            <td>
                                <span class="small fw-bold text-primary-navy d-block">INV-0024</span>
                                <span class="extra-small text-muted">John Doe</span>
                            </td>
                            <td><span class="badge bg-light text-dark border extra-small">Apt 101</span></td>
                            <td><span class="small text-danger fw-bold">$850.00</span></td>
                            <td class="text-end">
                                <button class="btn btn-sm btn-light border extra-small" data-action="view"
                                    data-id="INV-0024">Remind</button>
                            </td>
                        </tr>
                        <tr class="border-bottom border-light">
                            <td>
                                <span class="small fw-bold text-primary-navy d-block">INV-0028</span>
                                <span class="extra-small text-muted">Arlene McCoy</span>
                            </td>
                            <td><span class="badge bg-light text-dark border extra-small">Shop 05</span></td>
                            <td><span class="small text-danger fw-bold">$1,200.00</span></td>
                            <td class="text-end">
                                <button class="btn btn-sm btn-light border extra-small" data-action="view"
                                    data-id="INV-0028">Remind</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small fw-bold text-primary-navy d-block">INV-0031</span>
                                <span class="extra-small text-muted">Cody Fisher</span>
                            </td>
                            <td><span class="badge bg-light text-dark border extra-small">Office 102</span></td>
                            <td><span class="small text-danger fw-bold">$2,400.00</span></td>
                            <td class="text-end">
                                <button class="btn btn-sm btn-light border extra-small" data-action="view"
                                    data-id="INV-0031">Remind</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Pending Approvals (PRD 17.1) -->
    <div class="col-lg-6">
        <div class="bg-white border rounded-4 shadow-sm h-100 p-4 text-dark">
            <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
                <div>
                    <h5 class="fw-bold mb-1">Pending Approvals</h5>
                    <p class="extra-small text-muted mb-0">Transfers and Listings awaiting review.</p>
                </div>
                <span
                    class="badge bg-primary-subtle border border-primary-subtle text-primary extra-small px-3 rounded-pill">4
                    New Requests</span>
            </div>
            <div class="list-group list-group-flush gap-3 mt-1">
                <div
                    class="list-group-item bg-light-subtle border rounded-3 d-flex justify-content-between align-items-center p-3 shadow-sm-hover border-accents-2">
                    <div class="d-flex align-items-center gap-3">
                        <div class="rounded-circle bg-white shadow-sm d-flex align-items-center justify-content-center"
                            style="width: 36px; height: 36px;"><i class="bi bi-arrow-left-right text-primary"></i></div>
                        <div>
                            <h6 class="mb-0 small fw-bold">Ownership Transfer</h6>
                            <p class="mb-0 extra-small text-muted">Unit 12B • Awaiting Document Review</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2">
                        <button class="btn btn-sm btn-white border shadow-sm" title="Approve Request"
                            data-action="approve" data-id="REQ-101"><i class="bi bi-check2 text-success"
                                style="font-weight: 800;"></i></button>
                        <button class="btn btn-sm btn-white border shadow-sm" title="Reject Request"
                            data-action="reject" data-id="REQ-101"><i class="bi bi-x text-danger"
                                style="font-weight: 800;"></i></button>
                    </div>
                </div>
                <div
                    class="list-group-item bg-light-subtle border rounded-3 d-flex justify-content-between align-items-center p-3 shadow-sm-hover border-accents-2">
                    <div class="d-flex align-items-center gap-3">
                        <div class="rounded-circle bg-white shadow-sm d-flex align-items-center justify-content-center"
                            style="width: 36px; height: 36px;"><i class="bi bi-tag text-info"></i></div>
                        <div>
                            <h6 class="mb-0 small fw-bold">New Sale Listing</h6>
                            <p class="mb-0 extra-small text-muted">Bldg A • Apt 405 • Moderation Queue</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2">
                        <button class="btn btn-sm btn-white border shadow-sm" title="Approve Request"
                            data-action="approve" data-id="REQ-202"><i class="bi bi-check2 text-success"
                                style="font-weight: 800;"></i></button>
                        <button class="btn btn-sm btn-white border shadow-sm" title="Reject Request"
                            data-action="reject" data-id="REQ-202"><i class="bi bi-x text-danger"
                                style="font-weight: 800;"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Global Activity Feed (Audit Trail) -->
<div class="row g-4 mb-5">
    <div class="col-12">
        <div class="bg-white border rounded-4 shadow-sm p-4 text-dark">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="fw-bold mb-0">Organization Audit Trail</h5>
                <button class="btn btn-sm btn-white border rounded-pill px-3" data-action="export"
                    data-id="AUDIT_LOG">Download Full Log</button>
            </div>
            <div class="timeline-geist px-2">
                <div class="timeline-item-geist mb-3 pb-3 border-bottom d-flex gap-4 position-relative">
                    <div class="pulse-line"></div>
                    <span class="extra-small text-muted opacity-50 fw-bold" style="min-width: 80px;">10:24 AM</span>
                    <div class="rounded-circle bg-primary-navy text-white d-flex align-items-center justify-content-center shadow-sm"
                        style="width: 24px; height: 24px; z-index: 2;"><i class="bi bi-check2 small"></i></div>
                    <div>
                        <p class="mb-0 small fw-bold text-dark">System: Monthly Invoices Batch #042 generated
                            successfully (142 Units).</p>
                        <p class="mb-0 extra-small text-muted">Action by Automatic Task Scheduler</p>
                    </div>
                </div>
                <div class="timeline-item-geist mb-3 pb-3 border-bottom d-flex gap-4 position-relative">
                    <span class="extra-small text-muted opacity-50 fw-bold" style="min-width: 80px;">09:15 AM</span>
                    <div class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center shadow-sm"
                        style="width: 24px; height: 24px; z-index: 2;"><i class="bi bi-person small"></i></div>
                    <div>
                        <p class="mb-0 small fw-bold text-dark">Manager recorded lease renewal for Esther Howard
                            (Imperial Res.)</p>
                        <p class="mb-0 extra-small text-muted">Action by Manager (James S.)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
