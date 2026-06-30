@extends('layouts.backend')

@section('content')
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div data-aos="fade-right">
                    <h2 class="fw-bold mb-1">Owners Registry</h2>
                    <p class="text-muted mb-0">Managing 42 property and flat owners.</p>
                </div>
                <div class="d-flex gap-3" data-aos="fade-left">
                    <button class="btn btn-white border rounded-4 px-4 py-2 shadow-sm d-flex align-items-center gap-2 transition-hover" data-action="export">
                        <i class="bi bi-file-earmark-arrow-down"></i>
                        <span>Export Data</span>
                    </button>
                    <button class="btn btn-primary-navy rounded-4 px-4 py-2 shadow-sm d-flex align-items-center gap-2 transition-hover" data-action="create" data-id="OWNER">
                        <i class="bi bi-person-plus-fill"></i>
                        <span>Add New Owner</span>
                    </button>
                </div>
            </div>

            <!-- Investor Intelligence Layer -->
            <div class="row g-4 mb-5" data-aos="fade-up">
                <!-- Investor Yield Matrix -->
                <div class="col-lg-8">
                    <div class="bg-white border rounded-4 shadow-sm h-100 p-0 overflow-hidden transition-hover translate-y-hover">
                        <div class="p-4 border-bottom d-flex justify-content-between align-items-center bg-light-subtle">
                            <div>
                                <h6 class="fw-bold mb-0">Investor Yield & ROI Analytics</h6>
                                <p class="extra-small text-muted mb-0">Managed portfolio performance vs market benchmarks.</p>
                            </div>
                            <span class="badge bg-primary-navy text-white extra-small px-3 rounded-pill shadow-sm">Real-time Performance</span>
                        </div>
                        <div class="row g-0">
                            <div class="col-md-7 p-4 border-end">
                                <div class="mb-4">
                                    <h6 class="extra-small text-muted fw-bold uppercase mb-2 opacity-50">Aggregate Portfolio ROI</h6>
                                    <div class="d-flex align-items-baseline gap-2">
                                        <div class="display-5 fw-bold text-primary-navy">12.4%</div>
                                        <span class="badge bg-success-subtle text-success extra-small rounded-pill"><i class="bi bi-arrow-up"></i> 1.2%</span>
                                    </div>
                                    <p class="extra-small text-muted mt-2 mb-0">Exceeding benchmark by 420 bps.</p>
                                </div>
                                <div class="row g-2 mb-0">
                                    <div class="col-6">
                                        <div class="p-3 border rounded-4 bg-light shadow-sm-inset text-center">
                                            <span class="extra-small text-muted d-block mb-1">Capital Appreciation</span>
                                            <span class="fw-bold text-primary">$2.4M</span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="p-3 border rounded-4 bg-light shadow-sm-inset text-center">
                                            <span class="extra-small text-muted d-block mb-1">Net Rental Yield</span>
                                            <span class="fw-bold text-success">8.2%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 p-4 bg-light-subtle d-flex flex-column justify-content-center">
                                <h6 class="fw-bold extra-small mb-4 uppercase opacity-50">Payout Distribution Health</h6>
                                <div class="mb-4">
                                    <div class="d-flex justify-content-between extra-small mb-2"><span>Automated Sync</span><span class="fw-bold">94%</span></div>
                                    <div class="progress" style="height: 6px; background: rgba(0,0,0,0.05);"><div class="progress-bar bg-success rounded-pill" style="width: 94%;"></div></div>
                                </div>
                                <div>
                                    <div class="d-flex justify-content-between extra-small mb-2"><span>Manual Processing</span><span class="fw-bold">6%</span></div>
                                    <div class="progress" style="height: 6px; background: rgba(0,0,0,0.05);"><div class="progress-bar bg-warning rounded-pill" style="width: 6%;"></div></div>
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
            <div class="row g-4 mb-5" data-aos="fade-up">
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
            <div class="row g-4" data-aos="fade-up">
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



