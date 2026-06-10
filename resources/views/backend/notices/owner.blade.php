@extends('layouts.backend')

@section('content')
        <!-- Main Content -->
        <div class="container-fluid py-4">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div data-aos="fade-right">
                    <h2 class="fw-bold mb-1">Official Notices</h2>
                    <p class="text-muted mb-0">Direct administrative broadcasts and estate-wide announcements.</p>
                </div>
                <div class="d-flex gap-3" data-aos="fade-left">
                    <button class="btn btn-white border rounded-4 px-4 py-2 shadow-sm" data-action="message">
                         Mark all as read
                    </button>
                </div>
            </div>

            <!-- Notice Grid -->
            <div class="row g-4" data-aos="fade-up">
                <div class="col-md-6 col-lg-4">
                    <div class="glass-widget h-100 p-4 border-primary position-relative shadow-sm-hover transition">
                        <span class="badge bg-primary extra-small mb-3">URGENT</span>
                        <h6 class="fw-bold mb-2">Annual General Meeting 2026</h6>
                        <p class="extra-small text-muted mb-4 opacity-75">Notice is hereby given for the AGM to discuss building upgrades and fiscal budget for Tower A & B. Your presence is highly requested.</p>
                        <hr class="opacity-10 mb-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="extra-small text-muted fw-bold">18 APR • 10:00 AM</span>
                            <button class="btn btn-sm btn-link text-decoration-none extra-small blue-text" data-action="view">View PDF</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="glass-widget h-100 p-4 border-warning position-relative shadow-sm-hover transition">
                        <span class="badge bg-warning text-dark extra-small mb-3">OPERATIONAL</span>
                        <h6 class="fw-bold mb-2">Solar Panel Phase 2 Upgrade</h6>
                        <p class="extra-small text-muted mb-4 opacity-75">Work is scheduled to commence on Tower B's rooftop. Temporary power fluctuations may occur in communal areas between 2-4 PM.</p>
                        <hr class="opacity-10 mb-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="extra-small text-muted fw-bold">20 APR • 2:00 PM</span>
                            <button class="btn btn-sm btn-link text-decoration-none extra-small blue-text" data-action="view">View Log</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="glass-widget h-100 p-4 position-relative shadow-sm-hover transition">
                        <span class="badge bg-secondary extra-small mb-3">GREETING</span>
                        <h6 class="fw-bold mb-2">Eid-Ul-Fitr Celebrations</h6>
                        <p class="extra-small text-muted mb-4 opacity-75">The Imperial Management team wishes you and your family a blessed Eid. Community dinner is planned at the Grand Banquet Hall on Day 2.</p>
                        <hr class="opacity-10 mb-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="extra-small text-muted fw-bold">TBA • NIGHT 2</span>
                            <button class="btn btn-sm btn-link text-decoration-none extra-small blue-text" data-action="view">Invite Detail</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Global Broadcast Log -->
            <div class="glass-widget mt-5" data-aos="fade-up">
                <h5 class="fw-bold mb-4">Historical Announcements</h5>
                <div class="list-group list-group-flush gap-3">
                    <div class="d-flex align-items-center justify-content-between p-3 border rounded-4 bg-light-subtle shadow-sm-hover transition">
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-white shadow-sm d-flex align-items-center justify-content-center text-primary" style="width: 40px; height: 40px;"><i class="bi bi-shield-check"></i></div>
                            <div>
                                <h6 class="mb-0 small fw-bold">Biometric Security Update Complete</h6>
                                <p class="mb-0 extra-small text-muted">All entry points at Tower A now fully support Fingerprint & Face ID.</p>
                            </div>
                        </div>
                        <span class="extra-small text-muted">12 Apr 2026</span>
                    </div>
                    <div class="d-flex align-items-center justify-content-between p-3 border rounded-4 bg-light-subtle shadow-sm-hover transition">
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-white shadow-sm d-flex align-items-center justify-content-center text-primary" style="width: 40px; height: 40px;"><i class="bi bi-receipt"></i></div>
                            <div>
                                <h6 class="mb-0 small fw-bold">March Rental Audit Released</h6>
                                <p class="mb-0 extra-small text-muted">Download your building performance audit from the statements section.</p>
                            </div>
                        </div>
                        <span class="extra-small text-muted">05 Apr 2026</span>
                    </div>
                </div>
            </div>
        </div>
@endsection