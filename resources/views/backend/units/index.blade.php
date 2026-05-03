@extends('layouts.backend')
@section('content')
<!-- Asset Intelligence Layer -->
{{-- <div class="row g-4 mb-5" data-aos="fade-up">
    <!-- Unit ROI Matrix -->
    <div class="col-lg-7">
        <div class="bg-white border rounded-4 shadow-sm h-100 p-0 overflow-hidden">
            <div class="p-4 border-bottom d-flex justify-content-between align-items-center">
                <h5 class="fw-bold mb-0">Unit ROI Efficiency Matrix</h5>
                <div class="d-flex gap-2">
                    <span class="badge bg-light text-dark extra-small border">Revenue Score</span>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <tbody class="extra-small">
                        <tr class="border-bottom">
                            <td class="ps-4 py-3"><span class="fw-bold">Apt 402</span><br><span
                                    class="text-muted">Imperial Heights</span></td>
                            <td>
                                <div class="progress" style="height: 4px; width: 60px;">
                                    <div class="progress-bar bg-success" style="width: 92%;"></div>
                                </div>
                            </td>
                            <td><span class="fw-bold">৳120K/mo</span></td>
                            <td class="text-success pe-4 fw-bold">+8.2% Yield</td>
                        </tr>
                        <tr class="border-bottom">
                            <td class="ps-4 py-3"><span class="fw-bold">Off 801</span><br><span
                                    class="text-muted">Skyline Plaza</span></td>
                            <td>
                                <div class="progress" style="height: 4px; width: 60px;">
                                    <div class="progress-bar bg-primary" style="width: 76%;"></div>
                                </div>
                            </td>
                            <td><span class="fw-bold">৳540K/mo</span></td>
                            <td class="text-primary pe-4 fw-bold">+6.4% Yield</td>
                        </tr>
                        <tr>
                            <td class="ps-4 py-3"><span class="fw-bold">Shop 04</span><br><span
                                    class="text-muted">Imperial Heights</span></td>
                            <td>
                                <div class="progress" style="height: 4px; width: 60px;">
                                    <div class="progress-bar bg-warning" style="width: 45%;"></div>
                                </div>
                            </td>
                            <td><span class="fw-bold">৳320K/mo</span></td>
                            <td class="text-warning pe-4 fw-bold">+4.1% Yield</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Utility Consumption Heatmap -->
    <div class="col-lg-5">
        <div class="bg-white border rounded-4 shadow-sm h-100 p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="fw-bold mb-0">Grid Consumption Pulse</h5>
                <i class="bi bi-lightning-charge text-warning"></i>
            </div>
            <div class="d-flex align-items-end gap-1 h-100 mb-4" style="min-height: 120px;">
                <div class="bg-primary-navy rounded-top opacity-25" style="width: 10%; height: 40%;"></div>
                <div class="bg-primary-navy rounded-top opacity-25" style="width: 10%; height: 60%;"></div>
                <div class="bg-primary-navy rounded-top opacity-50" style="width: 10%; height: 80%;"></div>
                <div class="bg-primary-navy rounded-top opacity-75" style="width: 10%; height: 50%;"></div>
                <div class="bg-primary-navy rounded-top" style="width: 10%; height: 90%;"></div>
                <div class="bg-primary-navy rounded-top" style="width: 10%; height: 100%;"></div>
                <div class="bg-primary-navy rounded-top opacity-75" style="width: 10%; height: 70%;"></div>
            </div>
            <div class="d-flex justify-content-between extra-small text-muted mt-2">
                <span>MON</span>
                <span>WED</span>
                <span>FRI</span>
                <span class="fw-bold text-dark">SUN (PEAK)</span>
            </div>
        </div>
    </div>
</div> --}}

<!-- Filters & Building Selector -->
<div class="row g-4 mb-5" data-aos="fade-up">
    <div class="col-lg-12">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div>
                <h2 class="h3 fw-bold text-primary-navy mb-0">Units</h2>
                
            </div>
            <a href="{{ route('admin.units.create') }}" class="btn btn-primary px-4 rounded-pill shadow-sm">
                <i class="bi bi-plus-lg me-2"></i>Add new Unit
            </a>
        </div>
        <div class="bg-white border rounded-4 shadow-sm p-4">
            <div class="d-flex flex-wrap gap-3 align-items-center justify-content-between">
                <div class="d-flex gap-2">
                    <select class="form-select border-0 shadow-sm rounded-4 px-4" style="width: 220px;">
                        <option>All Buildings</option>
                        <option>Imperial Heights</option>
                        <option>Skyline Plaza</option>
                        <option>Emerald Gardens</option>
                    </select>
                    <select class="form-select border-0 shadow-sm rounded-4 px-4" style="width: 150px;">
                        <option>All Floors</option>
                        <option>Ground Floor</option>
                        <option>1st Floor</option>
                        <option>2nd Floor</option>
                    </select>
                </div>
                <div class="d-flex gap-2">
                    <div class="btn-group shadow-sm rounded-4">
                        <button class="btn btn-white border-0 active px-3"><i class="bi bi-grid"></i></button>
                        <button class="btn btn-white border-0 px-3"><i class="bi bi-list-task"></i></button>
                    </div>
                    <div class="input-group shadow-sm rounded-4 overflow-hidden" style="width: 300px;">
                        <span class="input-group-text bg-white border-0"><i class="bi bi-search"></i></span>
                        <input type="text" class="form-control border-0 px-2" placeholder="Search Unit # or Tenant...">
                    </div>
                </div>
            </div>
        </div>

        {{-- UNits list --}}
    </div>
</div>
@endsection