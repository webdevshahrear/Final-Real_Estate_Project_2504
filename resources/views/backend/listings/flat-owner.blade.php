@extends('layouts.backend')

@section('content')

        <!-- Main Content -->
        <main class="main-content-geist">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div data-aos="fade-right">
                    <h2 class="fw-bold mb-1">Marketplace Listings</h2>
                    <p class="text-muted mb-0">Track engagement and inquiries for your available properties.</p>
                </div>
                <div class="d-flex gap-3" data-aos="fade-left">
                    <button class="btn btn-geist rounded-4 px-4 py-2 border shadow-sm" data-action="create" data-id="LISTING">
                        <i class="bi bi-plus-lg me-2"></i> Create New Listing
                    </button>
                </div>
            </div>

            <!-- Listing Stats -->
            <div class="row g-4 mb-5" data-aos="fade-up">
                <div class="col-md-4">
                    <div class="glass-widget">
                        <p class="text-muted extra-small fw-bold uppercase mb-1">Active Listings</p>
                        <h3 class="fw-bold mb-0">1</h3>
                        <p class="text-primary extra-small mt-2 mb-0">Currently Public</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="glass-widget">
                        <p class="text-muted extra-small fw-bold uppercase mb-1">Total Impressions</p>
                        <h3 class="fw-bold mb-0">1,240</h3>
                        <p class="text-success extra-small mt-2 mb-0"><i class="bi bi-arrow-up"></i> 15% this week</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="glass-widget">
                        <p class="text-muted extra-small fw-bold uppercase mb-1">Hot Inquiries</p>
                        <h3 class="fw-bold mb-0">5</h3>
                        <p class="text-warning extra-small mt-2 mb-0">Action Required</p>
                    </div>
                </div>
            </div>

            <!-- Active Listings Table -->
            <div class="glass-widget" data-aos="fade-up">
                <h5 class="fw-bold mb-4">My Estate Adverts</h5>
                <div class="table-responsive">
                    <table class="table table-hover align-middle custom-table-geist">
                        <thead>
                            <tr class="extra-small text-muted uppercase">
                                <th>Property</th>
                                <th>Type</th>
                                <th>Ask Price/Rent</th>
                                <th>Engagement</th>
                                <th>Status</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="bg-light rounded-3 p-1"><i class="bi bi-shop fs-4 text-primary"></i></div>
                                        <div>
                                            <h6 class="mb-0 small fw-bold">Shop 04, Tower A</h6>
                                            <p class="mb-0 extra-small text-muted">Retail Space • 1,200 SQFT</p>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-light text-dark extra-small">RENTAL</span></td>
                                <td><span class="small fw-bold text-primary-navy">$4,200/mo</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="icon-box bg-light-blue p-1 px-2 rounded-2 extra-small text-primary"><i class="bi bi-eye"></i> 850</div>
                                        <div class="icon-box bg-light-blue p-1 px-2 rounded-2 extra-small text-primary"><i class="bi bi-chat"></i> 24</div>
                                    </div>
                                </td>
                                <td><span class="badge bg-success-subtle text-success extra-small">ACTIVE</span></td>
                                <td class="text-end">
                                    <button class="btn btn-white border rounded-circle p-2 shadow-sm" data-action="edit"><i class="bi bi-pencil"></i></button>
                                    <button class="btn btn-danger-subtle border-0 rounded-circle p-2 ms-2"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Inquiry Pipeline -->
            <div class="glass-widget mt-5" data-aos="fade-up">
                <h5 class="fw-bold mb-4">Recent Hot Inquiries</h5>
                <div class="list-group list-group-flush gap-3">
                    <div class="d-flex align-items-center justify-content-between p-3 border rounded-4 bg-light shadow-sm-hover transition">
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-white shadow-sm d-flex align-items-center justify-content-center fw-bold text-primary" style="width: 40px; height: 40px;">RK</div>
                            <div>
                                <h6 class="mb-0 small fw-bold">Rahat Khan</h6>
                                <p class="mb-0 extra-small text-muted">Interested in Retail Space Lease (MT-04)</p>
                            </div>
                        </div>
                        <div class="text-end">
                            <span class="extra-small text-muted d-block mb-1">2 hours ago</span>
                            <button class="btn btn-primary-navy btn-sm extra-small rounded-pill px-3">Reply</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

   @endsection