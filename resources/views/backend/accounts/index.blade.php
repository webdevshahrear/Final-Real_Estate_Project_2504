@extends('layouts.backend')

@section('content')

        <!-- Main Content -->
        <div class="container-fluid py-4">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div data-aos="fade-right">
                    <h2 class="fw-bold mb-1">Financial Integrity</h2>
                    <p class="text-muted mb-0">General ledger and chart of accounts management.</p>
                </div>
                <div class="d-flex gap-3" data-aos="fade-left">
                    <button class="btn btn-white border rounded-4 px-4 py-2 shadow-sm" data-action="export">
                        <i class="bi bi-printer me-2"></i> Print Ledger
                    </button>
                    <button class="btn btn-geist rounded-4 px-4 py-2 border shadow-sm" data-action="create" data-id="NEW_JOURNAL_ENTRY">
                        <i class="bi bi-plus-lg me-2"></i> Journal Entry
                    </button>
                </div>
            </div>

            <!-- Capital & Budget Intelligence Layer -->
            <div class="row g-4 mb-5" data-aos="fade-up">
                <div class="col-lg-8">
                    <div class="bg-white border rounded-4 shadow-sm h-100 p-0 overflow-hidden">
                        <div class="p-4 border-bottom d-flex justify-content-between align-items-center">
                            <h5 class="fw-bold mb-0">Double-Entry Reconciliation Pulse</h5>
                            <span class="badge bg-success-subtle text-success extra-small border border-success border-opacity-10">Ledger Balanced</span>
                        </div>
                        <div class="row g-0 h-100">
                            <div class="col-md-7 p-4 border-end">
                                <div class="mb-4">
                                    <h6 class="extra-small text-muted fw-bold uppercase mb-2">Aggregate Trial Balance</h6>
                                    <div class="d-flex align-items-end gap-3">
                                        <div class="display-6 fw-bold text-primary-navy">৳25.4M</div>
                                        <div class="extra-small text-success pb-2"><i class="bi bi-patch-check-fill"></i> Zero Variance</div>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col-6">
                                        <div class="p-2 border rounded-3 bg-light extra-small">
                                            <span class="text-muted d-block mb-1">Total Assets:</span>
                                            <span class="fw-bold">৳84.2M</span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="p-2 border rounded-3 bg-light extra-small">
                                            <span class="text-muted d-block mb-1">Total Liabilities:</span>
                                            <span class="fw-bold">৳58.8M</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 p-4 bg-light-subtle d-flex flex-column justify-content-center">
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between extra-small mb-1"><span>Equity Matching:</span><span class="fw-bold">100%</span></div>
                                    <div class="progress" style="height: 4px;"><div class="progress-bar bg-success" style="width: 100%;"></div></div>
                                </div>
                                <div>
                                    <div class="d-flex justify-content-between extra-small mb-1"><span>Journal Integrity:</span><span class="fw-bold text-primary">Solid</span></div>
                                    <div class="progress" style="height: 4px;"><div class="progress-bar bg-primary" style="width: 98%;"></div></div>
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
                        <h4 class="fw-bold mb-0 text-success">$242,500.00</h4>
                        <p class="extra-small text-muted mt-2"><i class="bi bi-arrow-up text-success"></i> 14% vs Last Month</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-white border rounded-4 shadow-sm border-start border-danger border-4 p-4">
                        <p class="extra-small text-muted uppercase fw-bold mb-2">Total Expenses</p>
                        <h4 class="fw-bold mb-0 text-danger">$84,120.00</h4>
                        <p class="extra-small text-muted mt-2"><i class="bi bi-arrow-down text-danger"></i> 3% Decoupling</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-white border rounded-4 shadow-sm border-start border-primary border-4 p-4">
                        <p class="extra-small text-muted uppercase fw-bold mb-2">Retained Earnings</p>
                        <h4 class="fw-bold mb-0">$158,380.00</h4>
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
                                    <tr>
                                        <td><span class="small font-mono">15 Apr 2026</span></td>
                                        <td><span class="small fw-bold">Service Fee Income</span></td>
                                        <td><span class="extra-small">Maintenance Fee - Apt 402</span></td>
                                        <td><span class="badge bg-success-subtle text-success extra-small">Credit</span></td>
                                        <td>-</td>
                                        <td><span class="small">$85.00</span></td>
                                        <td><span class="small fw-bold">$242,500.00</span></td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button class="btn btn-sm btn-light border rounded-3 shadow-sm-hover" title="View Transaction Proof" data-action="view" data-id="TRX-101"><i class="bi bi-eye"></i></button>
                                                <button class="btn btn-sm btn-light border rounded-3 shadow-sm-hover" title="Audit Entry" data-action="edit" data-id="TRX-101"><i class="bi bi-shield-check"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="small font-mono">14 Apr 2026</span></td>
                                        <td><span class="small fw-bold">Utility Expense</span></td>
                                        <td><span class="extra-small">DESCO Electricity Bill - Common Area</span></td>
                                        <td><span class="badge bg-danger-subtle text-danger extra-small">Debit</span></td>
                                        <td><span class="small">$1,240.00</span></td>
                                        <td>-</td>
                                        <td><span class="small fw-bold">$242,415.00</span></td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button class="btn btn-sm btn-light border rounded-3 shadow-sm-hover" title="View Transaction Proof" data-action="view" data-id="TRX-102"><i class="bi bi-eye"></i></button>
                                                <button class="btn btn-sm btn-light border rounded-3 shadow-sm-hover" title="Audit Entry" data-action="edit" data-id="TRX-102"><i class="bi bi-shield-check"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
@endsection
