@extends('layouts.backend')

@section('content')
            <!-- Premium Hero Section -->
            <div class="premium-hero rounded-5 p-5 mb-5 shadow-lg position-relative overflow-hidden" data-aos="zoom-out-up">
                <div class="mesh-grid"></div>
                <div class="floating-blob" style="top: -100px; right: -100px; background: rgba(56, 189, 248, 0.2);"></div>
                
                <div class="position-relative z-1 d-flex justify-content-between align-items-end">
                    <div>
                        <div class="d-flex align-items-center gap-3 mb-4">
                            <span class="badge bg-primary bg-opacity-10 text-primary uppercase-bold px-3 py-2 border border-primary border-opacity-20 shadow-sm">Manager Console</span>
                            <span class="text-white-50 small fw-bold">Live Operational Intelligence</span>
                        </div>
                        <h1 class="display-3 fw-bold text-white tracking-tighter mb-3">System <span class="text-info">Overview</span></h1>
                        <p class="text-white-50 lead mb-0" style="max-width: 650px;">Orchestrating structural assets, financial flows, and resident satisfaction with institutional precision.</p>
                    </div>
                    <div class="d-flex gap-3">
                        <div class="btn-group">
                            <button class="btn btn-white border border-white border-opacity-20 bg-white bg-opacity-10 text-white rounded-4 p-3 px-4 shadow-lg backdrop-blur-md dropdown-toggle fw-bold" data-bs-toggle="dropdown">
                                Imperial Tower A <i class="bi bi-chevron-down ms-2 small opacity-50"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg rounded-4 p-2 mt-2">
                                <li><a class="dropdown-item rounded-3 small py-2 fw-bold" href="#"><i class="bi bi-building me-2 text-primary"></i> Imperial Tower A</a></li>
                                <li><a class="dropdown-item rounded-3 small py-2 fw-bold" href="#"><i class="bi bi-building me-2 text-primary"></i> Imperial Tower B</a></li>
                                <li><a class="dropdown-item rounded-3 small py-2 fw-bold" href="#"><i class="bi bi-building-fill me-2 text-primary"></i> Grand Plaza</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Summary Bar (Premium Geist Cards) -->
            <div class="row g-4 mb-5" data-aos="fade-up">
                <div class="col-md-3">
                    <div class="bg-white border rounded-4 shadow-sm p-4 h-100 transition-hover translate-y-hover">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <p class="text-muted extra-small fw-bold mb-0 uppercase opacity-50">Active Tenants</p>
                            <div class="rounded-circle bg-primary-subtle p-2"><i class="bi bi-people text-primary small"></i></div>
                        </div>
                        <h4 class="fw-bold mb-0Counter">1,240</h4>
                        <div class="d-flex align-items-center gap-2 mt-2">
                            <span class="badge bg-success-subtle text-success extra-small"><i class="bi bi-arrow-up"></i> 12</span>
                            <span class="text-muted extra-small">New this week</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-white border rounded-4 shadow-sm p-4 h-100 transition-hover translate-y-hover">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <p class="text-muted extra-small fw-bold mb-0 uppercase opacity-50">Collections</p>
                            <div class="rounded-circle bg-success-subtle p-2"><i class="bi bi-cash-stack text-success small"></i></div>
                        </div>
                        <h4 class="fw-bold mb-0">$45.2K</h4>
                        <div class="progress mt-3" style="height: 4px; background: rgba(0,0,0,0.05);">
                            <div class="progress-bar bg-success" style="width: 82%;"></div>
                        </div>
                        <p class="text-muted extra-small mt-2 mb-0">82% of Monthly Target</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-white border rounded-4 shadow-sm p-4 h-100 transition-hover translate-y-hover" style="border-top: 4px solid var(--accent-red) !important;">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <p class="text-muted extra-small fw-bold mb-0 uppercase opacity-50">Complaints</p>
                            <div class="rounded-circle bg-danger-subtle p-2"><i class="bi bi-exclamation-triangle text-danger small"></i></div>
                        </div>
                        <h4 class="fw-bold mb-0">12</h4>
                        <div class="d-flex align-items-center gap-2 mt-2">
                            <span class="text-danger extra-small fw-bold">4 High Priority</span>
                            <span class="text-muted extra-small">• 2 Assigned</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-white border rounded-4 shadow-sm p-4 h-100 transition-hover translate-y-hover">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <p class="text-muted extra-small fw-bold mb-0 uppercase opacity-50">Lease Renewals</p>
                            <div class="rounded-circle bg-warning-subtle p-2"><i class="bi bi-calendar-check text-warning small"></i></div>
                        </div>
                        <h4 class="fw-bold mb-0">5</h4>
                        <p class="text-warning extra-small mt-2 mb-0 fw-bold">Action Required: 30 Days</p>
                    </div>
                </div>
            </div>

            <!-- Quick Access Manager Grid -->
            <div class="row g-4 mb-5" data-aos="fade-up">
                <div class="col-md-4">
                    <div class="bg-white border rounded-4 shadow-sm p-4 h-100">
                        <h6 class="fw-bold mb-3"><i class="bi bi-lightning text-warning me-2"></i> Field Actions</h6>
                        <div class="d-grid gap-2">
                            <button class="btn btn-light-subtle text-start py-3 px-3 border border-subtle rounded-4 transition shadow-sm-hover" data-action="create" data-id="PAYMENT">
                                <div class="d-flex align-items-center">
                                    <div class="stats-icon bg-white shadow-sm p-2 rounded-3 me-3"><i class="bi bi-cash-stack text-success"></i></div>
                                    <div>
                                        <div class="fw-bold small">Record Bulk Payment</div>
                                        <div class="extra-small text-muted">Offline collections log</div>
                                    </div>
                                </div>
                            </button>
                            <button class="btn btn-light-subtle text-start py-3 px-3 border border-subtle rounded-4 transition shadow-sm-hover" data-action="edit" data-id="MAINTENANCE">
                                <div class="d-flex align-items-center">
                                    <div class="stats-icon bg-white shadow-sm p-2 rounded-3 me-3"><i class="bi bi-tools text-primary"></i></div>
                                    <div>
                                        <div class="fw-bold small">Update Maintenance</div>
                                        <div class="extra-small text-muted">Change ticket status</div>
                                    </div>
                                </div>
                            </button>
                            <button class="btn btn-light-subtle text-start py-3 px-3 border border-subtle rounded-4 transition shadow-sm-hover" data-action="message">
                                <div class="d-flex align-items-center">
                                    <div class="stats-icon bg-white shadow-sm p-2 rounded-3 me-3"><i class="bi bi-megaphone text-danger"></i></div>
                                    <div>
                                        <div class="fw-bold small">Post Area Notice</div>
                                        <div class="extra-small text-muted">Broadcast to building</div>
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="bg-white border rounded-4 shadow-sm p-4 h-100">
                         <div class="d-flex justify-content-between align-items-center mb-4">
                            <div>
                                <h6 class="fw-bold mb-1">Today's Collections Due</h6>
                                <p class="extra-small text-muted mb-0">Pending balance verification for active leases.</p>
                            </div>
                            <button class="btn btn-sm btn-light border px-3 rounded-pill extra-small"><i class="bi bi-file-earmark-pdf me-1"></i> Export PDF</button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-sm align-middle custom-table-geist border-top-0">
                                <thead>
                                    <tr class="extra-small text-muted uppercase">
                                        <th class="border-0">Tenant Identity</th>
                                        <th class="border-0">Premise</th>
                                        <th class="border-0">Balance Due</th>
                                        <th class="border-0">Lifecycle State</th>
                                        <th class="border-0 text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="transition">
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="rounded-circle bg-light d-flex align-items-center justify-content-center extra-small fw-bold text-muted border" style="width: 24px; height: 24px;">DM</div>
                                                <span class="small fw-bold">David Miller</span>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-light text-dark extra-small rounded-pill">Apt 302</span></td>
                                        <td><span class="small fw-bold text-primary-navy">$2,400</span></td>
                                        <td><span class="badge bg-danger-subtle text-danger extra-small rounded-pill">Severe Overdue</span></td>
                                        <td class="text-end"><button class="btn btn-dark btn-sm px-3 extra-small rounded-pill" data-action="message">Send Alert</button></td>
                                    </tr>
                                    <tr class="transition">
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="rounded-circle bg-light d-flex align-items-center justify-content-center extra-small fw-bold text-muted border" style="width: 24px; height: 24px;">SJ</div>
                                                <span class="small fw-bold">Sarah Jenkins</span>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-light text-dark extra-small rounded-pill">Apt 405</span></td>
                                        <td><span class="small fw-bold text-primary-navy">$1,200</span></td>
                                        <td><span class="badge bg-warning-subtle text-warning extra-small rounded-pill">Grace Period</span></td>
                                        <td class="text-end"><button class="btn btn-light border btn-sm px-3 extra-small rounded-pill" data-action="message">Soft Remind</button></td>
                                    </tr>
                                    <tr class="transition">
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="rounded-circle bg-light d-flex align-items-center justify-content-center extra-small fw-bold text-muted border" style="width: 24px; height: 24px;">MS</div>
                                                <span class="small fw-bold">Mark Sloan</span>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-light text-dark extra-small rounded-pill">Shop 04</span></td>
                                        <td><span class="small fw-bold text-primary-navy">$4,500</span></td>
                                        <td><span class="badge bg-danger-subtle text-danger extra-small rounded-pill">Overdue</span></td>
                                        <td class="text-end"><button class="btn btn-dark btn-sm px-3 extra-small rounded-pill" data-action="message">Send Alert</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Complaints & Notifications (PRD 17.2) -->
            <div class="row g-4">
                <div class="col-lg-7" data-aos="fade-up">
                    <div class="bg-white border rounded-4 shadow-sm p-4 h-100">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h6 class="fw-bold mb-0">New Complaints</h6>
                            <button class="btn btn-sm btn-link text-decoration-none extra-small">View All</button>
                        </div>
                        <div class="list-group list-group-flush gap-3">
                            <div class="d-flex align-items-start gap-3 p-3 border rounded-4 bg-light-subtle shadow-sm-hover transition translate-y-hover">
                                <div class="stats-icon bg-danger text-white rounded-3 p-2 px-3 fw-bold small shadow-sm">!</div>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                        <h6 class="mb-0 small fw-bold">Elevator Malfunction</h6>
                                        <span class="badge bg-danger-subtle text-danger extra-small rounded-pill">Critical</span>
                                    </div>
                                    <p class="mb-3 extra-small text-muted">Tower A, Central Elevator. Resident reported sudden stop at floor 12. Dispatching technician.</p>
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-white border px-3 py-1 extra-small rounded-pill shadow-sm transition" data-action="resolve">Assign Team</button>
                                        <button class="btn btn-white border px-3 py-1 extra-small rounded-pill shadow-sm transition" data-action="message">Notify Resident</button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-start gap-3 p-3 border rounded-4 bg-light-subtle shadow-sm-hover transition translate-y-hover">
                                <div class="stats-icon bg-warning text-dark rounded-3 p-2 px-3 fw-bold small shadow-sm">?</div>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                        <h6 class="mb-0 small fw-bold">Water Leakage</h6>
                                        <span class="badge bg-warning-subtle text-warning extra-small rounded-pill">Urgent</span>
                                    </div>
                                    <p class="mb-3 extra-small text-muted">Apt 504. Ceiling dampness reported in kitchen area. Likely pipe burst in service shaft.</p>
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-white border px-3 py-1 extra-small rounded-pill shadow-sm transition" data-action="resolve">Inspect Unit</button>
                                        <button class="btn btn-white border px-3 py-1 extra-small rounded-pill shadow-sm transition" data-action="message">Contact Owner</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-primary-navy border border-white border-opacity-10 rounded-4 shadow-sm p-4 h-100 text-white d-flex flex-column">
                        <h6 class="fw-bold mb-4 opacity-75">Recent Move-ins</h6>
                        <div class="list-group list-group-flush gap-3">
                            <div class="d-flex align-items-center gap-3 p-2 rounded-4 transition-hover bg-white-5 shadow-sm-hover">
                                <div class="flex-shrink-0">
                                    <div class="rounded-circle bg-white text-primary-navy d-flex align-items-center justify-content-center fw-bold small shadow" style="width: 40px; height: 40px;">EF</div>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-0 small fw-bold text-white">Elena Fisher</h6>
                                    <p class="mb-0 extra-small opacity-50">Tower A • Apt 902 • Moved today</p>
                                </div>
                                <button class="btn btn-link text-white-50 p-2 rounded-circle hover-bg-white-10" data-action="view"><i class="bi bi-file-earmark-person"></i></button>
                            </div>
                            <div class="d-flex align-items-center gap-3 p-2 rounded-4 transition-hover bg-white-5 shadow-sm-hover">
                                <div class="flex-shrink-0">
                                    <div class="rounded-circle bg-white text-primary-navy d-flex align-items-center justify-content-center fw-bold small shadow" style="width: 40px; height: 40px;">SC</div>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-0 small fw-bold text-white">Sullivan Cruz</h6>
                                    <p class="mb-0 extra-small opacity-50">Grand Plaza • Shop 12 • Moved yesterday</p>
                                </div>
                                <button class="btn btn-link text-white-50 p-2 rounded-circle hover-bg-white-10" data-action="view"><i class="bi bi-file-earmark-person"></i></button>
                            </div>
                        </div>
                        <div class="mt-auto pt-5">
                            <div class="p-3 bg-white-10 rounded-4">
                                <h6 class="fw-bold small mb-2">Notice Verification</h6>
                                <p class="extra-small opacity-75 mb-3">8 new tenant agreements are pending your digital signature.</p>
                                <button class="btn btn-light w-100 rounded-3 py-2 extra-small fw-bold">Review Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection



