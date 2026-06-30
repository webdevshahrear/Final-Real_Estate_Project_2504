@extends('layouts.backend')
@section('content')
        <!-- Main Content -->
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div data-aos="fade-right">
                    <h2 class="fw-bold mb-1">Owners Registry</h2>
                    <p class="text-muted mb-0">Managing 42 property and flat owners.</p>
                </div>
                <div class="d-flex gap-3" data-aos="fade-left">
                    <button class="btn btn-white border rounded-4 px-4 py-2 shadow-sm" data-action="export">
                        <i class="bi bi-download me-2"></i> Export List
                    </button>
                    <button class="btn btn-geist rounded-4 px-4 py-2 border shadow-sm" data-action="create" data-id="NEW_OWNER">
                        <i class="bi bi-plus-lg me-2"></i> New Owner
                    </button>
                </div>
            </div>

            <!-- Investor Intelligence Layer -->
            <div class="row g-4 mb-5" data-aos="fade-up">
                <!-- Investor Yield Matrix -->
                <div class="col-lg-8">
                    <div class="bg-white border rounded-4 shadow-sm h-100 p-0 overflow-hidden">
                        <div class="p-4 border-bottom d-flex justify-content-between align-items-center">
                            <h5 class="fw-bold mb-0">Investor Yield Matrix</h5>
                            <span class="badge bg-primary-navy text-white extra-small">Portfolio Performance</span>
                        </div>
                        <div class="row g-0 h-100">
                            <div class="col-md-7 p-4 border-end">
                                <div class="mb-4">
                                    <h6 class="extra-small text-muted fw-bold uppercase mb-2">Aggregate Portfolio ROI</h6>
                                    <div class="display-5 fw-bold text-primary-navy">12.4% <span class="fs-6 text-success"><i class="bi bi-caret-up-fill"></i> 1.2%</span></div>
                                    <p class="extra-small text-muted mb-0">Exceeding benchmark by 420 bps</p>
                                </div>
                                <div class="row g-2 mb-4">
                                    <div class="col-6">
                                        <div class="p-3 border rounded-4 bg-light shadow-sm-hover transition">
                                            <span class="extra-small text-muted d-block mb-1">Capital Appreciation</span>
                                            <span class="fw-bold text-primary">$2.4M</span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="p-3 border rounded-4 bg-light shadow-sm-hover transition">
                                            <span class="extra-small text-muted d-block mb-1">Rental Yield (Net)</span>
                                            <span class="fw-bold text-success">8.2%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 p-4 bg-light-subtle d-flex flex-column justify-content-center border-start">
                                <h6 class="fw-bold small mb-3">Payout Distribution</h6>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between extra-small mb-1"><span>Automated Sync:</span><span class="fw-bold">94%</span></div>
                                    <div class="progress" style="height: 4px;"><div class="progress-bar bg-success" style="width: 94%;"></div></div>
                                </div>
                                <div>
                                    <div class="d-flex justify-content-between extra-small mb-1"><span>Manual Review:</span><span class="fw-bold">6%</span></div>
                                    <div class="progress" style="height: 4px;"><div class="progress-bar bg-warning" style="width: 6%;"></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- KYC Velocity -->
                <div class="col-lg-4">
                    <div class="bg-white border rounded-4 shadow-sm h-100 p-4">
                        <h5 class="fw-bold mb-4">Ownership Compliance</h5>
                        <div class="rounded-circle border border-5 border-success d-inline-flex align-items-center justify-content-center mb-4 mx-auto d-flex" style="width: 100px; height: 100px;">
                            <h4 class="fw-bold mb-0">98%</h4>
                        </div>
                        <div class="p-3 bg-light rounded-4 text-center">
                            <h6 class="extra-small fw-bold mb-1">FIPS 201 Compliant</h6>
                            <p class="extra-small text-muted mb-0">All NIDs verified against national database.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Bar -->
            <div class="row g-4 mb-5">
                <div class="col-md-3">
                    <div class="bg-white border rounded-4 shadow-sm p-4">
                        <p class="extra-small text-muted uppercase fw-bold mb-2">Property Owners</p>
                        <h4 class="fw-bold mb-0">12</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-white border rounded-4 shadow-sm p-4">
                        <p class="extra-small text-muted uppercase fw-bold mb-2">Flat Owners</p>
                        <h4 class="fw-bold mb-0">30</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-white border rounded-4 shadow-sm p-4">
                        <p class="extra-small text-muted uppercase fw-bold mb-2">Active Payouts</p>
                        <h4 class="fw-bold mb-0">$142,500</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-white border rounded-4 shadow-sm p-4">
                        <p class="extra-small text-muted uppercase fw-bold mb-2">Verification Pending</p>
                        <h4 class="fw-bold mb-0 text-warning">3</h4>
                    </div>
                </div>
            </div>

            <!-- Owners Table -->
            <div class="row g-4">
                <div class="col-12">
                    <div class="bg-white border rounded-4 shadow-sm p-4">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="fw-bold mb-0">Stakeholders List</h5>
                            <div class="input-group shadow-sm rounded-4 overflow-hidden" style="width: 300px;">
                                <span class="input-group-text bg-white border-0"><i class="bi bi-search"></i></span>
                                <input type="text" class="form-control border-0 px-2 small" placeholder="Search by name, nid, phone...">
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover align-middle custom-table-geist">
                                <thead>
                                    <tr>
                                        <th class="extra-small text-muted uppercase">Owner Name</th>
                                        <th class="extra-small text-muted uppercase">Role</th>
                                        <th class="extra-small text-muted uppercase">Properties</th>
                                        <th class="extra-small text-muted uppercase">NID / Docs</th>
                                        <th class="extra-small text-muted uppercase">Status</th>
                                        <th class="extra-small text-muted uppercase">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="owner-avatar">JS</div>
                                                <div>
                                                    <h6 class="mb-0 small fw-bold">John Stevens</h6>
                                                    <p class="mb-0 extra-small text-muted">john.s@example.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="small font-mono">Property Owner</span></td>
                                        <td><span class="badge bg-light text-dark extra-small">2 Buildings (24 Units)</span></td>
                                        <td><span class="text-success"><i class="bi bi-check-circle-fill me-1"></i> Verified</span></td>
                                        <td><span class="badge bg-success-subtle text-success extra-small">Active</span></td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button class="btn btn-sm btn-light border rounded-3 shadow-sm-hover" title="View Property Portfolio" data-action="view" data-id="O-JS-01"><i class="bi bi-eye"></i></button>
                                                <button class="btn btn-sm btn-light border rounded-3 shadow-sm-hover" title="Edit Owner Details" data-action="edit" data-id="O-JS-01"><i class="bi bi-pencil"></i></button>
                                                <button class="btn btn-sm btn-light border rounded-3 shadow-sm-hover" title="View Transaction History" data-action="message" data-id="O-JS-01"><i class="bi bi-journal-text"></i></button>
                                                <button class="btn btn-sm btn-light-subtle border text-danger rounded-3 shadow-sm-hover" title="Archive Stakeholder" data-action="archive" data-id="O-JS-01"><i class="bi bi-archive"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="owner-avatar">MT</div>
                                                <div>
                                                    <h6 class="mb-0 small fw-bold">Mark Thompson</h6>
                                                    <p class="mb-0 extra-small text-muted">mark.t@example.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="small font-mono">Flat Owner</span></td>
                                        <td><span class="badge bg-light text-dark extra-small">Apt 402, Shop 04</span></td>
                                        <td><span class="text-warning"><i class="bi bi-hourglass-split me-1"></i> Pending NID</span></td>
                                        <td><span class="badge bg-success-subtle text-success extra-small">Active</span></td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button class="btn btn-sm btn-light border rounded-3 shadow-sm-hover" title="View Property Portfolio" data-action="view" data-id="O-MT-02"><i class="bi bi-eye"></i></button>
                                                <button class="btn btn-sm btn-light border rounded-3 shadow-sm-hover" title="Edit Owner Details" data-action="edit" data-id="O-MT-02"><i class="bi bi-pencil"></i></button>
                                                <button class="btn btn-sm btn-light border rounded-3 shadow-sm-hover" title="View Transaction History" data-action="message" data-id="O-MT-02"><i class="bi bi-journal-text"></i></button>
                                                <button class="btn btn-sm btn-light-subtle border text-danger rounded-3 shadow-sm-hover" title="Archive Stakeholder" data-action="archive" data-id="O-MT-02"><i class="bi bi-archive"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection
