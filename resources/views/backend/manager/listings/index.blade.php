@extends('layouts.backend')

@section('content')
        <!-- Main Content -->
        <main class="main-content-geist">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div data-aos="fade-right">
                    <h2 class="fw-bold mb-1">Marketplace Control</h2>
                    <p class="text-muted mb-0">Managing active sale and rent listings for the public portal.</p>
                </div>
                <div class="d-flex gap-3" data-aos="fade-left">
                    <button class="btn btn-white border rounded-4 px-4 py-2 shadow-sm d-flex align-items-center gap-2 transition-hover" data-action="view" data-id="PORTAL">
                        <i class="bi bi-globe-americas text-primary"></i>
                        <span>Public Portal</span>
                    </button>
                    <button class="btn btn-primary-navy rounded-4 px-4 py-2 shadow-sm d-flex align-items-center gap-2 transition-hover" data-action="create" data-id="LISTING">
                        <i class="bi bi-plus-circle-fill"></i>
                        <span>Post Property</span>
                    </button>
                </div>
            </div>

            <!-- Market Intelligence Layer -->
            <div class="row g-4 mb-5" data-aos="fade-up">
                <!-- Market Demand Heatmap -->
                <div class="col-lg-8">
                    <div class="bg-white border rounded-4 shadow-sm h-100 p-0 overflow-hidden transition-hover translate-y-hover">
                        <div class="p-4 border-bottom d-flex justify-content-between align-items-center bg-light-subtle">
                            <div>
                                <h6 class="fw-bold mb-0">Market Demand & Engagement Intelligence</h6>
                                <p class="extra-small text-muted mb-0">Real-time search volume and high-intent district tracking.</p>
                            </div>
                            <span class="badge bg-primary-navy text-white extra-small px-3 rounded-pill shadow-sm">Live Search Data</span>
                        </div>
                        <div class="row g-0">
                            <div class="col-md-7 p-4 border-end">
                                <h6 class="extra-small text-muted fw-bold uppercase mb-4 opacity-50">High-Intent Districts</h6>
                                <div class="row g-3">
                                    <div class="col-6">
                                        <div class="p-3 border rounded-4 bg-light shadow-sm-inset">
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <span class="small fw-bold text-primary-navy">Gulshan 2</span>
                                                <span class="badge bg-success-subtle text-success extra-small rounded-pill">+14%</span>
                                            </div>
                                            <div class="progress" style="height: 6px; background: rgba(0,0,0,0.05);"><div class="progress-bar bg-success rounded-pill" style="width: 82%;"></div></div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="p-3 border rounded-4 bg-light shadow-sm-inset">
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <span class="small fw-bold text-primary-navy">Banani</span>
                                                <span class="badge bg-primary-subtle text-primary extra-small rounded-pill">+8%</span>
                                            </div>
                                            <div class="progress" style="height: 6px; background: rgba(0,0,0,0.05);"><div class="progress-bar bg-primary rounded-pill" style="width: 64%;"></div></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 p-3 bg-light rounded-4 border shadow-sm-inset">
                                    <h6 class="extra-small fw-bold mb-3 d-flex justify-content-between">
                                        <span>Demand Pulse: 3BHK Luxury</span>
                                        <span class="text-success extra-small">Trending Higher <i class="bi bi-graph-up"></i></span>
                                    </h6>
                                    <div class="d-flex align-items-end gap-2" style="height: 48px;">
                                        <div class="bg-primary-navy opacity-10 flex-grow-1 rounded-top" style="height: 40%;"></div>
                                        <div class="bg-primary-navy opacity-30 flex-grow-1 rounded-top" style="height: 70%;"></div>
                                        <div class="bg-primary-navy opacity-50 flex-grow-1 rounded-top" style="height: 50%;"></div>
                                        <div class="bg-primary-navy flex-grow-1 rounded-top shadow-sm" style="height: 100%;"></div>
                                        <div class="bg-primary-navy opacity-75 flex-grow-1 rounded-top" style="height: 80%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 p-4 bg-light-subtle d-flex flex-column justify-content-center">
                                <h6 class="fw-bold extra-small mb-4 uppercase opacity-50">Audience Interest Matrix</h6>
                                <div class="d-grid gap-2">
                                    <div class="d-flex justify-content-between extra-small p-2 bg-white rounded-3 border shadow-sm transition-hover">
                                        <span class="text-muted">Smart Home Kits</span>
                                        <span class="fw-bold text-primary-navy">84%</span>
                                    </div>
                                    <div class="d-flex justify-content-between extra-small p-2 bg-white rounded-3 border shadow-sm transition-hover">
                                        <span class="text-muted">Concierge Desk</span>
                                        <span class="fw-bold text-primary-navy">72%</span>
                                    </div>
                                    <div class="d-flex justify-content-between extra-small p-2 bg-white rounded-3 border shadow-sm transition-hover">
                                        <span class="text-muted">EV Charging Station</span>
                                        <span class="fw-bold text-primary-navy">48%</span>
                                    </div>
                                </div>
                                <div class="mt-4 text-center">
                                    <p class="extra-small text-muted mb-0"><i class="bi bi-info-circle me-1"></i> Data based on last 30 days of portal activity.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Channel Strength -->
                <div class="col-lg-4">
                    <div class="bg-white border rounded-4 shadow-sm h-100 p-4">
                        <h5 class="fw-bold mb-4">Portal Dominance</h5>
                        <div class="mb-4">
                            <div class="d-flex justify-content-between extra-small mb-1"><span>Imperial Direct</span><span class="fw-bold">62%</span></div>
                            <div class="progress" style="height: 6px;"><div class="progress-bar bg-primary-navy" style="width: 62%;"></div></div>
                        </div>
                        <div class="mb-4">
                            <div class="d-flex justify-content-between extra-small mb-1"><span>Social Marketplace</span><span class="fw-bold">28%</span></div>
                            <div class="progress" style="height: 6px;"><div class="progress-bar bg-primary" style="width: 28%;"></div></div>
                        </div>
                        <div class="p-3 border rounded-4 bg-light text-center">
                            <button class="btn btn- Geist w-100 rounded-3 py-2 extra-small border" data-action="generate-report" title="Ad Performance Optimization">Optimize Ad Spend</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Active Listings -->
            <div class="row g-4" data-aos="fade-up">
                <div class="col-12">
                    <div class="bg-white border rounded-4 shadow-sm p-4">
                        <h5 class="fw-bold mb-4">Inventory Postings</h5>
                        <div class="table-responsive">
                            <table class="table table-hover align-middle custom-table-geist">
                                <thead>
                                    <tr>
                                        <th class="extra-small text-muted uppercase">Property Info</th>
                                        <th class="extra-small text-muted uppercase">Type</th>
                                        <th class="extra-small text-muted uppercase">Listed Price</th>
                                        <th class="extra-small text-muted uppercase">Inquiries</th>
                                        <th class="extra-small text-muted uppercase">Status</th>
                                        <th class="extra-small text-muted uppercase">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="transition">
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="position-relative">
                                                    <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=100&q=80" alt="Gulshan" class="rounded-4 shadow-sm border" style="width: 48px; height: 48px; object-fit: cover;">
                                                    <span class="position-absolute bottom-0 end-0 p-1 bg-success border border-white rounded-circle shadow-sm" style="width: 12px; height: 12px;"></span>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 small fw-bold text-primary-navy">Gulshan Heights • Apt 402</h6>
                                                    <p class="mb-0 extra-small text-muted">Imperial Heights, Gulshan</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-light text-dark extra-small rounded-pill px-3 border shadow-sm">For Sale</span></td>
                                        <td><span class="small fw-bold text-primary-navy">৳1.2M</span></td>
                                        <td><span class="badge bg-primary-subtle text-primary extra-small rounded-pill px-3 shadow-sm">12 Inquiries</span></td>
                                        <td><span class="badge bg-success-subtle text-success extra-small rounded-pill px-3 shadow-sm">Published</span></td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button class="btn btn-sm btn-white border rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="View Listing"><i class="bi bi-eye small"></i></button>
                                                <button class="btn btn-sm btn-white border rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Edit Content"><i class="bi bi-pencil small"></i></button>
                                                <button class="btn btn-sm btn-primary-navy rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Archive Listing"><i class="bi bi-archive small"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="transition">
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="position-relative">
                                                    <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=100&q=80" alt="Banani" class="rounded-4 shadow-sm border" style="width: 48px; height: 48px; object-fit: cover;">
                                                    <span class="position-absolute bottom-0 end-0 p-1 bg-success border border-white rounded-circle shadow-sm" style="width: 12px; height: 12px;"></span>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 small fw-bold text-primary-navy">Banani Duplex • Apt 12B</h6>
                                                    <p class="mb-0 extra-small text-muted">Skyline Plaza, Banani</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-light text-dark extra-small rounded-pill px-3 border shadow-sm">For Rent</span></td>
                                        <td><span class="small fw-bold text-primary-navy">৳1,850/mo</span></td>
                                        <td><span class="badge bg-primary-subtle text-primary extra-small rounded-pill px-3 shadow-sm">4 Inquiries</span></td>
                                        <td><span class="badge bg-success-subtle text-success extra-small rounded-pill px-3 shadow-sm">Published</span></td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button class="btn btn-sm btn-white border rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="View Listing"><i class="bi bi-eye small"></i></button>
                                                <button class="btn btn-sm btn-white border rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Edit Content"><i class="bi bi-pencil small"></i></button>
                                                <button class="btn btn-sm btn-primary-navy rounded-circle shadow-sm transition p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" title="Archive Listing"><i class="bi bi-archive small"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    @endsection