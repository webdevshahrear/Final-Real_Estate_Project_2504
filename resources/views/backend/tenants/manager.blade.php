@extends('layouts.backend')

@section('content')
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div data-aos="fade-right">
                    <h2 class="fw-bold mb-1">Tenant Registry</h2>
                    <p class="text-muted mb-0">Managing 108 active tenants across all assets.</p>
                </div>
                <div class="d-flex gap-3" data-aos="fade-left">
                    <div class="dropdown">
                        <button class="btn btn-white border rounded-4 px-4 py-2 shadow-sm d-flex align-items-center gap-2 transition-hover" data-bs-toggle="dropdown">
                            <i class="bi bi-funnel"></i>
                            <span>Filter Inventory</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg rounded-4 extra-small p-2">
                            <li><a class="dropdown-item py-2 rounded-3" href="#">Active Residents</a></li>
                            <li><a class="dropdown-item py-2 rounded-3" href="#">Lease Expiring Soon</a></li>
                            <li><a class="dropdown-item py-2 rounded-3" href="#">Pending Dues</a></li>
                        </ul>
                    </div>
                    <button class="btn btn-primary-navy rounded-4 px-4 py-2 shadow-sm d-flex align-items-center gap-2 transition-hover" data-action="create" data-id="TENANT">
                        <i class="bi bi-person-plus-fill"></i>
                        <span>Add New Resident</span>
                    </button>
                </div>
            </div>

            <!-- Resident Intelligence Layer -->
            <div class="row g-4 mb-5" data-aos="fade-up">
                <!-- Resident Life-Cycle Pulse -->
                <div class="col-lg-8">
                    <div class="bg-white border rounded-4 shadow-sm h-100 p-0 overflow-hidden transition-hover translate-y-hover">
                        <div class="p-4 border-bottom d-flex justify-content-between align-items-center bg-light-subtle">
                            <div>
                                <h6 class="fw-bold mb-0">Resident Lifecycle & Engagement</h6>
                                <p class="extra-small text-muted mb-0">Aggregate sentiment and retention metrics.</p>
                            </div>
                            <span class="badge bg-primary-navy text-white extra-small px-3 rounded-pill shadow-sm">AI Pulse Active</span>
                        </div>
                        <div class="row g-0">
                            <div class="col-md-7 p-4 border-end">
                                <div class="mb-4">
                                    <h6 class="extra-small text-muted fw-bold uppercase mb-2 opacity-50">Portfolio Retention Rate</h6>
                                    <div class="d-flex align-items-baseline gap-2">
                                        <div class="display-5 fw-bold text-primary-navy">92.4%</div>
                                        <span class="badge bg-success-subtle text-success extra-small rounded-pill"><i class="bi bi-arrow-up"></i> 4.2%</span>
                                    </div>
                                    <p class="extra-small text-muted mt-2 mb-0">Year-over-year community stability growth.</p>
                                </div>
                                <div class="row g-2 mb-0">
                                    <div class="col-6">
                                        <div class="p-3 border rounded-4 bg-light shadow-sm-inset text-center">
                                            <span class="extra-small text-muted d-block mb-1">Avg. Tenure</span>
                                            <span class="fw-bold text-primary">2.4 Years</span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="p-3 border rounded-4 bg-light shadow-sm-inset text-center">
                                            <span class="extra-small text-muted d-block mb-1">Churn Risk</span>
                                            <span class="fw-bold text-success text-uppercase small">Negligible</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 p-4 bg-light-subtle d-flex flex-column justify-content-center">
                                <h6 class="fw-bold extra-small mb-4 uppercase opacity-50">Resident Digital Engagement</h6>
                                <div class="mb-4">
                                    <div class="d-flex justify-content-between extra-small mb-2"><span>Portal Adoption</span><span class="fw-bold">88%</span></div>
                                    <div class="progress" style="height: 6px; background: rgba(0,0,0,0.05);"><div class="progress-bar bg-primary-navy rounded-pill" style="width: 88%;"></div></div>
                                </div>
                                <div>
                                    <div class="d-flex justify-content-between extra-small mb-2"><span>Community Events</span><span class="fw-bold">64%</span></div>
                                    <div class="progress" style="height: 6px; background: rgba(0,0,0,0.05);"><div class="progress-bar bg-accent-blue rounded-pill" style="width: 64%;"></div></div>
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
            <div class="row g-4" data-aos="fade-up">
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
                                    <tr class="transition">
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="tenant-avatar bg-primary-navy text-white shadow-sm fw-bold">SJ</div>
                                                <div>
                                                    <h6 class="mb-0 small fw-bold text-primary-navy">Sarah Jenkins</h6>
                                                    <p class="mb-0 extra-small text-muted">+880 1712 345 678</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <span class="badge bg-light text-dark extra-small border rounded-pill mb-1">Apt 402</span>
                                                <span class="extra-small text-muted opacity-75">Imperial Heights</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="badge bg-success-subtle text-success extra-small rounded-pill px-2">Active</span>
                                                <span class="extra-small text-muted">Ends Dec 2026</span>
                                            </div>
                                        </td>
                                        <td><span class="small fw-bold text-success text-uppercase">Paid Clear</span></td>
                                        <td><span class="small text-muted">Jan 12, 2024</span></td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button class="btn btn-sm btn-white border rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="View Agreement"><i class="bi bi-file-earmark-text small"></i></button>
                                                <button class="btn btn-sm btn-white border rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Send Alert"><i class="bi bi-bell small text-warning"></i></button>
                                                <button class="btn btn-sm btn-primary-navy rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Manage Profile"><i class="bi bi-person-gear small"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="transition">
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="tenant-avatar bg-light border text-muted shadow-sm fw-bold">JD</div>
                                                <div>
                                                    <h6 class="mb-0 small fw-bold text-primary-navy">John Doe</h6>
                                                    <p class="mb-0 extra-small text-muted">+880 1912 999 888</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <span class="badge bg-light text-dark extra-small border rounded-pill mb-1">Shop 12</span>
                                                <span class="extra-small text-muted opacity-75">Skyline Plaza</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="badge bg-danger-subtle text-danger extra-small rounded-pill px-2">Expiring Soon</span>
                                                <span class="extra-small text-muted">30 Days Left</span>
                                            </div>
                                        </td>
                                        <td><span class="small fw-bold text-danger">$850.00 Due</span></td>
                                        <td><span class="small text-muted">May 05, 2023</span></td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button class="btn btn-sm btn-white border rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Renew Lease"><i class="bi bi-arrow-repeat small text-primary"></i></button>
                                                <button class="btn btn-sm btn-white border rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Send Demand"><i class="bi bi-cash-stack small text-danger"></i></button>
                                                <button class="btn btn-sm btn-primary-navy rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Manage Profile"><i class="bi bi-person-gear small"></i></button>
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



