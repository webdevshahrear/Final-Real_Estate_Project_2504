@extends('layouts.backend')

@section('content')
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div data-aos="fade-right">
                    <h2 class="fw-bold mb-1">Financial Integrity</h2>
                    <p class="text-muted mb-0">General ledger and chart of accounts management.</p>
                </div>
                <div class="d-flex gap-3" data-aos="fade-left">
                    <button class="btn btn-white border rounded-4 px-4 py-2 shadow-sm d-flex align-items-center gap-2 transition-hover" data-action="export">
                        <i class="bi bi-printer-fill"></i>
                        <span>Print Ledger</span>
                    </button>
                    <button class="btn btn-primary-navy rounded-4 px-4 py-2 shadow-sm d-flex align-items-center gap-2 transition-hover" data-action="create" data-id="ENTRY">
                        <i class="bi bi-journal-plus"></i>
                        <span>New Journal Entry</span>
                    </button>
                </div>
            </div>

            <!-- Capital & Budget Intelligence Layer -->
            <div class="row g-4 mb-5" data-aos="fade-up">
                <div class="col-lg-8">
                    <div class="bg-white border rounded-4 shadow-sm h-100 p-0 overflow-hidden transition-hover translate-y-hover">
                        <div class="p-4 border-bottom d-flex justify-content-between align-items-center bg-light-subtle">
                            <div>
                                <h6 class="fw-bold mb-0">Double-Entry Reconciliation Intelligence</h6>
                                <p class="extra-small text-muted mb-0">Real-time trial balance verification and equity matching.</p>
                            </div>
                            <span class="badge bg-success-subtle text-success extra-small px-3 rounded-pill shadow-sm border border-success border-opacity-10">System Balanced</span>
                        </div>
                        <div class="row g-0">
                            <div class="col-md-7 p-4 border-end">
                                <div class="mb-4">
                                    <h6 class="extra-small text-muted fw-bold uppercase mb-2">Aggregate Trial Balance</h6>
                                    <div class="d-flex align-items-baseline gap-2">
                                        <div class="display-6 fw-bold text-primary-navy">৳25.42M</div>
                                        <span class="badge bg-success-subtle text-success extra-small rounded-pill"><i class="bi bi-check-circle-fill"></i> Zero Variance</span>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col-6">
                                        <div class="p-3 border rounded-4 bg-light shadow-sm-inset text-center">
                                            <span class="extra-small text-muted d-block mb-1">Total Assets</span>
                                            <span class="fw-bold text-primary">৳84.2M</span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="p-3 border rounded-4 bg-light shadow-sm-inset text-center">
                                            <span class="extra-small text-muted d-block mb-1">Total Liabilities</span>
                                            <span class="fw-bold text-danger">৳58.8M</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 p-4 bg-light-subtle d-flex flex-column justify-content-center">
                                <h6 class="fw-bold extra-small mb-4 uppercase opacity-50">Ledger Integrity Metrics</h6>
                                <div class="mb-4">
                                    <div class="d-flex justify-content-between extra-small mb-2"><span>Equity Matching</span><span class="fw-bold">100%</span></div>
                                    <div class="progress" style="height: 6px; background: rgba(0,0,0,0.05);"><div class="progress-bar bg-success rounded-pill" style="width: 100%;"></div></div>
                                </div>
                                <div class="mb-0">
                                    <div class="d-flex justify-content-between extra-small mb-2"><span>Journal Compliance</span><span class="fw-bold">98%</span></div>
                                    <div class="progress" style="height: 6px; background: rgba(0,0,0,0.05);"><div class="progress-bar bg-primary rounded-pill" style="width: 98%;"></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-white border rounded-4 shadow-sm h-100 p-4">
                        <h5 class="fw-bold mb-4">Capital Reserve Pulse</h5>
                        <div class="p-4 rounded-5 bg-primary-navy text-white text-center position-relative overflow-hidden mb-4">
                            <div class="position-relative z-1">
                                <p class="extra-small text-white-50 uppercase mb-2">Emergency Fund</p>
                                <h3 class="fw-bold mb-0">৳4.2M</h3>
                                <p class="extra-small text-success mt-1">Fully Funded</p>
                            </div>
                            <div class="position-absolute bottom-0 start-0 w-100 h-25 bg-white opacity-10"></div>
                        </div>
                        <button class="btn btn- Geist w-100 rounded-3 py-2 extra-small border">View Reserve Policy</button>
                    </div>
                </div>
            </div>

            <!-- Account Balances -->
            <div class="row g-4 mb-5" data-aos="fade-up">
                <div class="col-md-4">
                    <div class="bg-white border rounded-4 shadow-sm border-start border-success border-4 p-4">
                        <p class="extra-small text-muted uppercase fw-bold mb-2">Operational Income</p>
                        <h4 class="fw-bold mb-0 text-success">৳242,500.00</h4>
                        <p class="extra-small text-muted mt-2"><i class="bi bi-arrow-up text-success"></i> 14% vs Last Month</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-white border rounded-4 shadow-sm border-start border-danger border-4 p-4">
                        <p class="extra-small text-muted uppercase fw-bold mb-2">Total Expenses</p>
                        <h4 class="fw-bold mb-0 text-danger">৳84,120.00</h4>
                        <p class="extra-small text-muted mt-2"><i class="bi bi-arrow-down text-danger"></i> 3% Decoupling</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-white border rounded-4 shadow-sm border-start border-primary border-4 p-4">
                        <p class="extra-small text-muted uppercase fw-bold mb-2">Retained Earnings</p>
                        <h4 class="fw-bold mb-0">৳158,380.00</h4>
                        <p class="extra-small text-muted mt-2">Cash on Hand</p>
                    </div>
                </div>
            </div>

            <!-- Ledger Table -->
            <div class="row g-4" data-aos="fade-up">
                <div class="col-12">
                    <div class="bg-white border rounded-4 shadow-sm p-4">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="fw-bold mb-0">Recent Ledger Hits</h5>
                            <div class="d-flex gap-2">
                                <select class="form-select border-0 shadow-sm rounded-4 px-3 extra-small" style="width: 160px;">
                                    <option>All Accounts</option>
                                    <option>Asset Management</option>
                                    <option>Utilities Fund</option>
                                </select>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover align-middle custom-table-geist">
                                <thead>
                                    <tr>
                                        <th class="extra-small text-muted uppercase">Date</th>
                                        <th class="extra-small text-muted uppercase">Account Header</th>
                                        <th class="extra-small text-muted uppercase">Description</th>
                                        <th class="extra-small text-muted uppercase">Type</th>
                                        <th class="extra-small text-muted uppercase">Debit</th>
                                        <th class="extra-small text-muted uppercase">Credit</th>
                                        <th class="extra-small text-muted uppercase">Balance</th>
                                        <th class="extra-small text-muted uppercase">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="transition">
                                        <td><span class="small font-mono fw-bold text-primary-navy">Apr 15, 2026</span></td>
                                        <td><span class="small fw-bold">Service Fee Income</span></td>
                                        <td><span class="extra-small text-muted">Maintenance Fee - Apt 402</span></td>
                                        <td><span class="badge bg-success-subtle text-success extra-small rounded-pill px-3">Credit</span></td>
                                        <td><span class="small text-muted opacity-50">-</span></td>
                                        <td><span class="small fw-bold">৳10,250</span></td>
                                        <td><span class="small fw-bold text-primary-navy">৳242,500</span></td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button class="btn btn-sm btn-white border rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="View Detail"><i class="bi bi-eye small"></i></button>
                                                <button class="btn btn-sm btn-primary-navy rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Audit Link"><i class="bi bi-shield-check small"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="transition">
                                        <td><span class="small font-mono fw-bold text-primary-navy">Apr 14, 2026</span></td>
                                        <td><span class="small fw-bold">Utility Expense</span></td>
                                        <td><span class="extra-small text-muted">DESCO Electricity - Common</span></td>
                                        <td><span class="badge bg-danger-subtle text-danger extra-small rounded-pill px-3">Debit</span></td>
                                        <td><span class="small fw-bold text-danger">৳8,420</span></td>
                                        <td><span class="small text-muted opacity-50">-</span></td>
                                        <td><span class="small fw-bold text-primary-navy">৳232,250</span></td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button class="btn btn-sm btn-white border rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="View Detail"><i class="bi bi-eye small"></i></button>
                                                <button class="btn btn-sm btn-primary-navy rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Audit Link"><i class="bi bi-shield-check small"></i></button>
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
