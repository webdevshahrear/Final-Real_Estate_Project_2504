@extends('layouts.backend')

@section('content')
        <!-- Main Content -->
        <div class="container-fluid py-4">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div data-aos="fade-right">
                    <h2 class="fw-bold mb-1">Notice Dispatch</h2>
                    <p class="text-muted mb-0">Disseminating critical updates to residents and owners.</p>
                </div>
                <div class="d-flex gap-3" data-aos="fade-left">
                    <button class="btn btn-geist rounded-4 px-4 py-2 border shadow-sm" data-action="create" data-id="NEW_NOTICE">
                        <i class="bi bi-plus-lg me-2"></i> Create Notice
                    </button>
                </div>
            </div>

            <!-- Strategic Communication Hub -->
            <div class="row g-4 mb-5" data-aos="fade-up">
                <!-- SOS Emergency Broadcast -->
                <div class="col-lg-4">
                    <div class="bg-white border rounded-4 shadow-sm h-100 p-4 transition-hover translate-y-hover overflow-hidden position-relative" style="background: linear-gradient(135deg, #fff 0%, #fff5f5 100%); border-color: rgba(220, 53, 69, 0.2) !important;">
                        <div class="position-absolute top-0 end-0 p-3 opacity-10">
                            <i class="bi bi-broadcast fs-1 text-danger"></i>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h6 class="fw-bold mb-0 text-danger d-flex align-items-center gap-2">
                                <span class="d-inline-block rounded-circle bg-danger animate-pulse" style="width: 8px; height: 8px;"></span>
                                SOS Critical Broadcast
                            </h6>
                        </div>
                        <p class="extra-small text-muted mb-4">Instantly disseminate Push, SMS, and Email alerts to all residents for fire, security, or utility emergencies.</p>
                        <div class="p-3 bg-danger rounded-4 shadow-sm text-center cursor-pointer transition-hover" style="background: linear-gradient(135deg, #dc3545 0%, #a71d2a 100%);">
                            <h6 class="text-white fw-bold mb-1 small">ACTIVATE EMERGENCY ALARM</h6>
                            <p class="extra-small text-white opacity-75 mb-0">Single-click global alert system</p>
                        </div>
                    </div>
                </div>

                <!-- Global Impact Pulse -->
                <div class="col-lg-8">
                    <div class="bg-white border rounded-4 shadow-sm h-100 p-0 overflow-hidden transition-hover translate-y-hover">
                        <div class="p-4 border-bottom d-flex justify-content-between align-items-center bg-light-subtle">
                            <div>
                                <h6 class="fw-bold mb-0">Broadcast Impact Pulse</h6>
                                <p class="extra-small text-muted mb-0">Managed communication performance and engagement metrics.</p>
                            </div>
                            <span class="badge bg-primary-navy text-white extra-small px-3 rounded-pill shadow-sm">Live Engagement</span>
                        </div>
                        <div class="row g-0">
                            <div class="col-md-7 p-4 border-end">
                                <div class="mb-4">
                                    <h6 class="extra-small text-muted fw-bold uppercase mb-2 opacity-50">Aggregate Engagement Rate</h6>
                                    <div class="d-flex align-items-baseline gap-2">
                                        <div class="display-5 fw-bold text-primary-navy">78.4%</div>
                                        <span class="badge bg-success-subtle text-success extra-small rounded-pill"><i class="bi bi-arrow-up"></i> 12%</span>
                                    </div>
                                    <p class="extra-small text-muted mt-2 mb-0">Optimized across SMS & Push channels.</p>
                                </div>
                                <div class="row g-2">
                                    <div class="col-4">
                                        <div class="p-3 border rounded-4 bg-light shadow-sm-inset text-center">
                                            <span class="extra-small text-muted d-block mb-1">Email Open</span>
                                            <span class="fw-bold text-primary">64%</span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="p-3 border rounded-4 bg-light shadow-sm-inset text-center">
                                            <span class="extra-small text-muted d-block mb-1">SMS Read</span>
                                            <span class="fw-bold text-success">92%</span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="p-3 border rounded-4 bg-light shadow-sm-inset text-center">
                                            <span class="extra-small text-muted d-block mb-1">Push Recv</span>
                                            <span class="fw-bold text-info">81%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 p-4 bg-light-subtle d-flex flex-column justify-content-center">
                                <h6 class="fw-bold extra-small mb-4 uppercase opacity-50">Receiver Sentiment Health</h6>
                                <div class="mb-4">
                                    <div class="d-flex justify-content-between extra-small mb-2"><span>Acknowledge Rate</span><span class="fw-bold">42%</span></div>
                                    <div class="progress" style="height: 6px; background: rgba(0,0,0,0.05);"><div class="progress-bar bg-success rounded-pill" style="width: 42%;"></div></div>
                                </div>
                                <div class="mb-0">
                                    <div class="d-flex justify-content-between extra-small mb-2"><span>Opt-out Rate</span><span class="fw-bold">0.8%</span></div>
                                    <div class="progress" style="height: 6px; background: rgba(0,0,0,0.05);"><div class="progress-bar bg-danger rounded-pill" style="width: 1%;"></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Active Notices -->
            <div class="row g-4" data-aos="fade-up">
                <div class="col-12">
                    <div class="bg-white border rounded-4 shadow-sm p-4">
                        <h5 class="fw-bold mb-4">Published Announcements</h5>
                        <div class="table-responsive">
                            <table class="table table-hover align-middle custom-table-geist">
                                <thead>
                                    <tr>
                                        <th class="extra-small text-muted uppercase">Dispatch Date</th>
                                        <th class="extra-small text-muted uppercase">Subject</th>
                                        <th class="extra-small text-muted uppercase">Audience</th>
                                        <th class="extra-small text-muted uppercase">Type</th>
                                        <th class="extra-small text-muted uppercase">Status</th>
                                        <th class="extra-small text-muted uppercase">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="transition">
                                        <td><span class="small font-mono fw-bold text-primary-navy">Mar 14, 2026</span></td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <span class="small fw-bold">Scheduled Power Outage</span>
                                                <span class="extra-small text-muted opacity-75">Block B Maintenance Updates</span>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-light text-dark extra-small rounded-pill px-3 border shadow-sm">Gulshan Heights</span></td>
                                        <td><span class="badge bg-danger-subtle text-danger extra-small rounded-pill px-3 shadow-sm border border-danger border-opacity-10">Emergency</span></td>
                                        <td><span class="badge bg-success-subtle text-success extra-small rounded-pill px-3 shadow-sm">Live</span></td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button class="btn btn-sm btn-white border rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="View Preview"><i class="bi bi-eye small"></i></button>
                                                <button class="btn btn-sm btn-white border rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Edit Content"><i class="bi bi-pencil small"></i></button>
                                                <button class="btn btn-sm btn-primary-navy rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Retract Announcement"><i class="bi bi-x-circle small"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="transition">
                                        <td><span class="small font-mono fw-bold text-primary-navy">Mar 10, 2026</span></td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <span class="small fw-bold">Annual General Meeting</span>
                                                <span class="extra-small text-muted opacity-75">Owner Gathering & Dinner Invitation</span>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-light text-dark extra-small rounded-pill px-3 border shadow-sm">All Owners</span></td>
                                        <td><span class="badge bg-success-subtle text-success extra-small rounded-pill px-3 shadow-sm border border-success border-opacity-10">Event</span></td>
                                        <td><span class="badge bg-success-subtle text-success extra-small rounded-pill px-3 shadow-sm">Live</span></td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button class="btn btn-sm btn-white border rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="View Preview"><i class="bi bi-eye small"></i></button>
                                                <button class="btn btn-sm btn-white border rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Edit Content"><i class="bi bi-pencil small"></i></button>
                                                <button class="btn btn-sm btn-primary-navy rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Retract Announcement"><i class="bi bi-x-circle small"></i></button>
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