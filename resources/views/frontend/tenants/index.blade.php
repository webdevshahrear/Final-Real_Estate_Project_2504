@extends('layouts.tennant')
@section('content')
        <!-- Main Content -->
        <div class="container-fluid py-4">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div data-aos="fade-right">
                    <h2 class="fw-bold mb-1">Tenant Registry</h2>
                    <p class="text-muted mb-0">Managing 108 active tenants across all assets.</p>
                </div>
                <div class="d-flex gap-3" data-aos="fade-left">
                    <button class="btn btn-white border rounded-4 px-4 py-2 shadow-sm" data-action="message">
                        <i class="bi bi-filter me-2"></i> Advanced Filters
                    </button>
                    <button class="btn btn-geist rounded-4 px-4 py-2 border shadow-sm" data-action="create" data-id="NEW_TENANT">
                        <i class="bi bi-person-plus me-2"></i> Add Tenant
                    </button>
                </div>
            </div>

            <!-- Resident Intelligence Layer -->
            <div class="row g-4 mb-5" data-aos="fade-up">
                <!-- Resident Life-Cycle Pulse -->
                <div class="col-lg-8">
                    <div class="bg-white border rounded-4 shadow-sm h-100 p-0 overflow-hidden">
                        <div class="p-4 border-bottom d-flex justify-content-between align-items-center">
                            <h5 class="fw-bold mb-0">Resident Life-Cycle Pulse</h5>
                            <span class="badge bg-primary-navy text-white extra-small">Sentiment Analyzed</span>
                        </div>
                        <div class="row g-0 h-100">
                            <div class="col-md-7 p-4 border-end">
                                <div class="mb-4">
                                    <h6 class="extra-small text-muted fw-bold uppercase mb-2">Portfolio Retention Rate</h6>
                                    <div class="display-5 fw-bold text-primary-navy">92.4%</div>
                                    <p class="extra-small text-success mb-0"><i class="bi bi-graph-up-arrow"></i> +4.2% YoY (Improved Community Engagement)</p>
                                </div>
                                <div class="row g-2 mb-4">
                                    <div class="col-6">
                                        <div class="p-3 border rounded-4 bg-light shadow-sm-hover transition">
                                            <span class="extra-small text-muted d-block mb-1">Avg. Tenure</span>
                                            <span class="fw-bold text-primary">2.4 Years</span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="p-3 border rounded-4 bg-light shadow-sm-hover transition">
                                            <span class="extra-small text-muted d-block mb-1">Churn Risk (Low)</span>
                                            <span class="fw-bold text-success">3.8%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 p-4 bg-light-subtle d-flex flex-column justify-content-center border-start">
                                <h6 class="fw-bold small mb-3">Community Interaction</h6>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between extra-small mb-1"><span>App Adoption:</span><span class="fw-bold">88%</span></div>
                                    <div class="progress" style="height: 4px;"><div class="progress-bar bg-primary" style="width: 88%;"></div></div>
                                </div>
                                <div>
                                    <div class="d-flex justify-content-between extra-small mb-1"><span>Event Participation:</span><span class="fw-bold">64%</span></div>
                                    <div class="progress" style="height: 4px;"><div class="progress-bar bg-info" style="width: 64%;"></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Occupancy Strength -->
                <div class="col-lg-4">
                    <div class="bg-white border rounded-4 shadow-sm h-100 text-center p-4">
                        <h5 class="fw-bold mb-4 text-start">Household Density</h5>
                        <div class="rounded-circle border border-5 border-primary-navy d-inline-flex align-items-center justify-content-center mb-4" style="width: 100px; height: 100px;">
                            <h4 class="fw-bold mb-0">88%</h4>
                        </div>
                        <h6 class="fw-bold small mb-1">Family Oriented</h6>
                        <p class="extra-small text-muted mb-4">Higher stability and lower turnover observed in 88% of family units.</p>
                        <div class="p-3 bg-light rounded-4 text-start">
                            <span class="extra-small text-muted d-block mb-1">Total Population:</span>
                            <span class="fw-bold text-primary-navy">384 Residents</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tenants Table -->
            <div class="row g-4">
                <div class="col-12">
                    <div class="bg-white border rounded-4 shadow-sm p-4">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="fw-bold mb-0">Active Residents</h5>
                            <div class="input-group shadow-sm rounded-4 overflow-hidden" style="width: 300px;">
                                <span class="input-group-text bg-white border-0"><i class="bi bi-search"></i></span>
                                <input type="text" class="form-control border-0 px-2 small" placeholder="Search by name, flat, phone...">
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover align-middle custom-table-geist">
                                <thead>
                                    <tr>
                                        <th class="extra-small text-muted uppercase">Resident</th>
                                        <th class="extra-small text-muted uppercase">Unit</th>
                                        <th class="extra-small text-muted uppercase">Agreement Status</th>
                                        <th class="extra-small text-muted uppercase">Dues</th>
                                        <th class="extra-small text-muted uppercase">Move In Date</th>
                                        <th class="extra-small text-muted uppercase">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="tenant-avatar bg-primary-navy text-white">SJ</div>
                                                <div>
                                                    <h6 class="mb-0 small fw-bold">Sarah Jenkins</h6>
                                                    <p class="mb-0 extra-small text-muted">+880 1712 345 678</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-light text-dark extra-small">Apt 402 / Imperial Heights</span></td>
                                        <td><span class="badge bg-success-subtle text-success extra-small">Active (Exp: 24 Dec 2026)</span></td>
                                        <td><span class="small fw-bold text-success">$0.00</span></td>
                                        <td><span class="small">12 Jan 2024</span></td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button class="btn btn-sm btn-light border rounded-3 shadow-sm-hover" title="View Agreement" data-action="view" data-id="T-SJ-402"><i class="bi bi-eye"></i></button>
                                                <button class="btn btn-sm btn-light border rounded-3 shadow-sm-hover" title="Edit Resident Info" data-action="edit" data-id="T-SJ-402"><i class="bi bi-pencil"></i></button>
                                                <button class="btn btn-sm btn-light border rounded-3 shadow-sm-hover" title="Send Direct Message" data-action="message" data-id="T-SJ-402"><i class="bi bi-chat-left-dots"></i></button>
                                                <button class="btn btn-sm btn-light-subtle border text-danger rounded-3 shadow-sm-hover" title="Terminate Lease" data-action="terminate" data-id="T-SJ-402"><i class="bi bi-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="tenant-avatar bg-light">JD</div>
                                                <div>
                                                    <h6 class="mb-0 small fw-bold">John Doe</h6>
                                                    <p class="mb-0 extra-small text-muted">+880 1912 999 888</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-light text-dark extra-small">Shop 12 / Skyline Plaza</span></td>
                                        <td><span class="badge bg-danger-subtle text-danger extra-small">Expiring Soon (30 Days)</span></td>
                                        <td><span class="small fw-bold text-danger">$850.00</span></td>
                                        <td><span class="small">05 May 2023</span></td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button class="btn btn-sm btn-light border rounded-3 shadow-sm-hover" title="View Agreement" data-action="view" data-id="T-JD-S12"><i class="bi bi-eye"></i></button>
                                                <button class="btn btn-sm btn-light border rounded-3 shadow-sm-hover" title="Edit Resident Info" data-action="edit" data-id="T-JD-S12"><i class="bi bi-pencil"></i></button>
                                                <button class="btn btn-sm btn-light border rounded-3 shadow-sm-hover" title="Send Direct Message" data-action="message" data-id="T-JD-S12"><i class="bi bi-chat-left-dots"></i></button>
                                                <button class="btn btn-sm btn-light-subtle border text-danger rounded-3 shadow-sm-hover" title="Terminate Lease" data-action="terminate" data-id="T-JD-S12"><i class="bi bi-trash"></i></button>
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