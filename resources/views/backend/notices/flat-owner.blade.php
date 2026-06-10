@extends('layouts.backend')

@section('content')
        <!-- Main Content -->
        <div class="container-fluid py-4">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div data-aos="fade-right">
                    <h2 class="fw-bold mb-1">Administrative Notices</h2>
                    <p class="text-muted mb-0">Direct communications from the central building management.</p>
                </div>
                <div class="d-flex gap-3" data-aos="fade-left">
                    <button class="btn btn-white border rounded-4 px-4 py-2 shadow-sm" data-action="message">
                         Mark all as read
                    </button>
                </div>
            </div>

            <!-- Notice Feed -->
            <div class="glass-widget mb-5" data-aos="fade-up">
                <div class="d-flex flex-column gap-3">
                    <div class="p-4 border rounded-5 bg-white shadow-sm-hover transition position-relative border-primary">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="d-flex align-items-center gap-3">
                                <div class="bg-primary text-white p-2 px-3 rounded-4"><i class="bi bi-info-circle"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-0">Biometric Verification Required</h6>
                                    <p class="extra-small text-muted">Posted 2 hours ago • Admin Office</p>
                                </div>
                            </div>
                            <span class="badge bg-primary extra-small">IMPORTANT</span>
                        </div>
                        <p class="small text-muted mb-3">All flat owners are requested to update their biometric data at the central reception by Friday. This is mandatory for the new structural security system deployment.</p>
                        <button class="btn btn-sm btn-light border extra-small px-3 rounded-pill fw-bold" data-action="view">Read Full Memo</button>
                    </div>

                    <div class="p-4 border rounded-5 bg-white shadow-sm-hover transition position-relative">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="d-flex align-items-center gap-3">
                                <div class="bg-success text-white p-2 px-3 rounded-4"><i class="bi bi-shield-check"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-0">Annual Fire Drill - Tower A</h6>
                                    <p class="extra-small text-muted">Posted 1 day ago • Security Team</p>
                                </div>
                            </div>
                            <span class="badge bg-success-subtle text-success extra-small">SAFETY</span>
                        </div>
                        <p class="small text-muted mb-3">The annual mandatory fire drill for Tower A is scheduled for Saturday Morning (10:00 AM). Resident cooperation is highly appreciated.</p>
                        <button class="btn btn-sm btn-light border extra-small px-3 rounded-pill fw-bold" data-action="view">Safety Protocol PDF</button>
                    </div>

                    <div class="p-4 border rounded-5 bg-white shadow-sm-hover transition position-relative opacity-50">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="d-flex align-items-center gap-3">
                                <div class="bg-secondary text-white p-2 px-3 rounded-4"><i class="bi bi-mailbox"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-0">Community Garden Re-Opening</h6>
                                    <p class="extra-small text-muted">Posted 5 days ago • Facilities</p>
                                </div>
                            </div>
                        </div>
                        <p class="small text-muted mb-0">The renovation of the Tower B terrace garden is complete. Access keys are now active for all registered owners.</p>
                    </div>
                </div>
            </div>
        </div>
@endsection