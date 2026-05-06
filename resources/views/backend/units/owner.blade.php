@extends('layouts.backend')

@section('content')
            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div data-aos="fade-right">
                    <h2 class="fw-bold mb-1">My Units</h2>
                    <p class="text-muted mb-0">Full inventory of all units across your Imperial Tower portfolio.</p>
                </div>
                <div class="d-flex gap-3" data-aos="fade-left">
                    <div class="input-group" style="width: 220px;">
                        <span class="input-group-text bg-white border-end-0"><i class="bi bi-search text-muted"></i></span>
                        <input type="text" class="form-control border-start-0 ps-0 extra-small" placeholder="Search unit...">
                    </div>
                    <select class="form-select extra-small rounded-3 border" style="width: 160px;">
                        <option>All Buildings</option>
                        <option>Imperial Tower A</option>
                        <option>Imperial Tower B</option>
                    </select>
                    <select class="form-select extra-small rounded-3 border" style="width: 140px;">
                        <option>All Status</option>
                        <option>Occupied</option>
                        <option>Vacant</option>
                        <option>Listed</option>
                    </select>
                </div>
            </div>

            <!-- KPI Summary -->
            <div class="row g-4 mb-5" data-aos="fade-up">
                <div class="col-md-3">
                    <div class="bg-white border rounded-4 shadow-sm p-4 h-100">
                        <p class="text-muted extra-small fw-bold mb-2 uppercase opacity-50">Total Units</p>
                        <h4 class="fw-bold mb-0">850</h4>
                        <p class="text-muted extra-small mt-2 mb-0">Across 2 Buildings</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-white border rounded-4 shadow-sm p-4 h-100" style="border-left: 4px solid #22c55e !important;">
                        <p class="text-muted extra-small fw-bold mb-2 uppercase opacity-50">Occupied</p>
                        <h4 class="fw-bold mb-0 text-success">838</h4>
                        <div class="progress mt-2" style="height: 4px;">
                            <div class="progress-bar bg-success" style="width: 98.5%;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-white border rounded-4 shadow-sm p-4 h-100">
                        <p class="text-muted extra-small fw-bold mb-2 uppercase opacity-50">Vacant</p>
                        <h4 class="fw-bold mb-0 text-warning">8</h4>
                        <p class="text-warning extra-small mt-2 mb-0">Ready to Lease</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-white border rounded-4 shadow-sm p-4 h-100">
                        <p class="text-muted extra-small fw-bold mb-2 uppercase opacity-50">Active Listings</p>
                        <h4 class="fw-bold mb-0 text-primary">4</h4>
                        <p class="text-muted extra-small mt-2 mb-0">On Marketplace</p>
                    </div>
                </div>
            </div>

            <!-- Units Table -->
            <div class="row g-4" data-aos="fade-up">
                <div class="col-12">
                    <div class="bg-white border rounded-4 shadow-sm p-4">
                        <!-- Tab Filter -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="fw-bold mb-0">Unit Directory</h5>
                            <div class="d-flex gap-2">
                                <button class="filter-chip active extra-small">All</button>
                                <button class="filter-chip extra-small">Tower A</button>
                                <button class="filter-chip extra-small">Tower B</button>
                                <button class="filter-chip extra-small">Vacant</button>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-hover align-middle custom-table-geist">
                                <thead>
                                    <tr class="extra-small text-muted uppercase">
                                        <th>Unit</th>
                                        <th>Building</th>
                                        <th>Type</th>
                                        <th>Size</th>
                                        <th>Tenant</th>
                                        <th>Lease End</th>
                                        <th>Rent/Mo</th>
                                        <th class="text-end">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="small fw-bold text-primary-navy">Apt 101</span></td>
                                        <td><span class="extra-small text-muted">Tower A</span></td>
                                        <td><span class="extra-small">2BHK</span></td>
                                        <td><span class="extra-small">1,100 sqft</span></td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="rounded-circle bg-primary-subtle text-primary d-flex align-items-center justify-content-center" style="width:28px;height:28px;font-size:0.7rem;font-weight:700;">AK</div>
                                                <span class="small">Ahmed Karim</span>
                                            </div>
                                        </td>
                                        <td><span class="extra-small">30 Jun 2026</span></td>
                                        <td><span class="small fw-bold">$1,800</span></td>
                                        <td class="text-end"><span class="badge bg-success-subtle text-success extra-small">Occupied</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="small fw-bold text-primary-navy">Apt 405</span></td>
                                        <td><span class="extra-small text-muted">Tower A</span></td>
                                        <td><span class="extra-small">3BHK</span></td>
                                        <td><span class="extra-small">1,450 sqft</span></td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="rounded-circle bg-success-subtle text-success d-flex align-items-center justify-content-center" style="width:28px;height:28px;font-size:0.7rem;font-weight:700;">SJ</div>
                                                <span class="small">Sarah Jenkins</span>
                                            </div>
                                        </td>
                                        <td><span class="extra-small">31 Dec 2026</span></td>
                                        <td><span class="small fw-bold">$2,800</span></td>
                                        <td class="text-end"><span class="badge bg-success-subtle text-success extra-small">Occupied</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="small fw-bold text-primary-navy">Apt 12B</span></td>
                                        <td><span class="extra-small text-muted">Tower A</span></td>
                                        <td><span class="extra-small">3BHK</span></td>
                                        <td><span class="extra-small">1,200 sqft</span></td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="rounded-circle bg-info-subtle text-info d-flex align-items-center justify-content-center" style="width:28px;height:28px;font-size:0.7rem;font-weight:700;">MC</div>
                                                <span class="small">Michael Chen</span>
                                            </div>
                                        </td>
                                        <td><span class="extra-small text-warning fw-bold">20 Aug 2026</span></td>
                                        <td><span class="small fw-bold">$3,500</span></td>
                                        <td class="text-end"><span class="badge bg-warning-subtle text-warning extra-small">Renewal Due</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="small fw-bold text-primary-navy">Shop 04</span></td>
                                        <td><span class="extra-small text-muted">Tower A</span></td>
                                        <td><span class="extra-small">Commercial</span></td>
                                        <td><span class="extra-small">1,200 sqft</span></td>
                                        <td><span class="small text-muted">—</span></td>
                                        <td><span class="extra-small text-muted">—</span></td>
                                        <td><span class="small fw-bold text-muted">$4,200</span></td>
                                        <td class="text-end"><span class="badge bg-primary-subtle text-primary extra-small">Listed</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="small fw-bold text-primary-navy">Apt 302</span></td>
                                        <td><span class="extra-small text-muted">Tower B</span></td>
                                        <td><span class="extra-small">2BHK</span></td>
                                        <td><span class="extra-small">1,050 sqft</span></td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="rounded-circle bg-warning-subtle text-warning d-flex align-items-center justify-content-center" style="width:28px;height:28px;font-size:0.7rem;font-weight:700;">RF</div>
                                                <span class="small">Robert Fox</span>
                                            </div>
                                        </td>
                                        <td><span class="extra-small">15 Mar 2027</span></td>
                                        <td><span class="small fw-bold">$2,100</span></td>
                                        <td class="text-end"><span class="badge bg-success-subtle text-success extra-small">Occupied</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="small fw-bold text-primary-navy">Apt 801</span></td>
                                        <td><span class="extra-small text-muted">Tower B</span></td>
                                        <td><span class="extra-small">4BHK Penthouse</span></td>
                                        <td><span class="extra-small">2,800 sqft</span></td>
                                        <td><span class="small text-muted">—</span></td>
                                        <td><span class="extra-small text-muted">—</span></td>
                                        <td><span class="small fw-bold text-muted">$7,500</span></td>
                                        <td class="text-end"><span class="badge bg-light text-dark border extra-small">Vacant</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="small fw-bold text-primary-navy">Office 12</span></td>
                                        <td><span class="extra-small text-muted">Tower B</span></td>
                                        <td><span class="extra-small">Commercial</span></td>
                                        <td><span class="extra-small">900 sqft</span></td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="rounded-circle bg-primary-subtle text-primary d-flex align-items-center justify-content-center" style="width:28px;height:28px;font-size:0.7rem;font-weight:700;">EH</div>
                                                <span class="small">Esther Howard</span>
                                            </div>
                                        </td>
                                        <td><span class="extra-small">01 Jan 2027</span></td>
                                        <td><span class="small fw-bold">$3,800</span></td>
                                        <td class="text-end"><span class="badge bg-success-subtle text-success extra-small">Occupied</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <div class="d-flex justify-content-between align-items-center mt-4 pt-3 border-top">
                            <p class="extra-small text-muted mb-0">Showing 7 of 850 units</p>
                        </div>
                    </div>
                </div>
            </div>
@endsection



