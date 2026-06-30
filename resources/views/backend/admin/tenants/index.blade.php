@extends('layouts.backend')

@section('content')
<div class="container-fluid py-4">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-5" data-aos="fade-right">
        <div>
            <h2 class="fw-bold mb-1 text-primary-navy">Tenant Registry</h2>
            <p class="text-muted mb-0">Manage onboarding, approvals, and monthly bills for Imperial tenants.</p>
        </div>
        <div class="d-flex gap-3" data-aos="fade-left">
            <form action="{{ route('admin.tenants.generate-bills') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary-navy rounded-4 px-4 py-2 border shadow-sm text-white">
                    <i class="bi bi-receipt me-2"></i> Generate Next Month's Bills
                </button>
            </form>
        </div>
    </div>

    <!-- Feedback Alerts -->
    @if(session('success'))
        <div class="alert alert-success border-0 shadow-sm rounded-4 mb-4 p-3 d-flex align-items-center gap-2">
            <i class="bi bi-check-circle-fill text-success fs-5"></i>
            <span class="fw-medium">{{ session('success') }}</span>
        </div>
    @endif

    <!-- Registry Navigation Tabs -->
    <ul class="nav nav-pills nav-geist mb-4" id="tenantTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active rounded-pill px-4 py-2 fw-semibold position-relative" id="pending-tab" data-bs-toggle="tab" data-bs-target="#pending" type="button" role="tab">
                Pending Approval
                @if(count($pendingTenants) > 0)
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.65rem;">
                        {{ count($pendingTenants) }}
                    </span>
                @endif
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link rounded-pill px-4 py-2 fw-semibold" id="approved-tab" data-bs-toggle="tab" data-bs-target="#approved" type="button" role="tab">
                Approved Residents
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link rounded-pill px-4 py-2 fw-semibold" id="rejected-tab" data-bs-toggle="tab" data-bs-target="#rejected" type="button" role="tab">
                Rejected Applications
            </button>
        </li>
    </ul>

    <!-- Tabs Content -->
    <div class="tab-content bg-white border rounded-4 shadow-sm p-4" id="tenantTabsContent">
        
        <!-- 1. PENDING APPROVAL TAB -->
        <div class="tab-pane fade show active" id="pending" role="tabpanel" aria-labelledby="pending-tab">
            <h5 class="fw-bold text-primary-navy mb-4">Pending Approvals</h5>
            @if(count($pendingTenants) == 0)
                <div class="text-center py-5">
                    <div style="font-size: 3rem;" class="mb-3">🎉</div>
                    <h6 class="fw-bold text-muted">No pending tenant applications</h6>
                    <p class="text-muted small">All tenant accounts are reviewed and processed.</p>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-hover align-middle custom-table-geist">
                        <thead>
                            <tr class="extra-small text-muted uppercase">
                                <th>Onboarding Tenant</th>
                                <th>Contact details</th>
                                <th>Requested Unit ID</th>
                                <th>Assign Unit & Approve</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pendingTenants as $tenant)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="profile-avatar bg-warning bg-opacity-10 text-warning" style="width: 42px; height: 42px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                                                {{ strtoupper(substr($tenant->name, 0, 2)) }}
                                            </div>
                                            <div>
                                                <h6 class="mb-0 small fw-bold text-primary-navy">{{ $tenant->name }}</h6>
                                                <span class="extra-small text-muted">Registered {{ $tenant->created_at->diffForHumans() }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="small fw-semibold text-primary-navy">{{ $tenant->email }}</div>
                                        <div class="extra-small text-muted">{{ $tenant->phone ?? 'No phone' }}</div>
                                    </td>
                                    <td>
                                        @if($tenant->unit_id)
                                            <span class="badge bg-light text-dark border">Unit ID: {{ $tenant->unit_id }}</span>
                                        @else
                                            <span class="text-muted small">No specific unit requested</span>
                                        @endif
                                    </td>
                                    <td style="max-width: 250px;">
                                        <form action="{{ route('admin.tenants.approve', $tenant->id) }}" method="POST" id="approveForm-{{ $tenant->id }}">
                                            @csrf
                                            <select name="unit_id" class="form-select form-select-sm rounded-pill border-light-subtle small" required>
                                                <option value="" disabled selected>Select unit to assign...</option>
                                                @foreach($availableUnits as $unit)
                                                    <option value="{{ $unit->id }}" {{ $tenant->unit_id == $unit->id ? 'selected' : '' }}>
                                                        {{ $unit->building->name ?? 'Building' }} - {{ $unit->unit_type ?? 'Flat' }} (Rent: ৳{{ number_format($unit->amount) }})
                                                    </option>
                                                @endforeach
                                            </select>
                                        </form>
                                    </td>
                                    <td class="text-end">
                                        <div class="d-flex justify-content-end gap-2">
                                            <button type="submit" form="approveForm-{{ $tenant->id }}" class="btn btn-sm btn-success rounded-pill px-3 fw-bold extra-small">
                                                <i class="bi bi-check2 me-1"></i> Approve
                                            </button>
                                            
                                            <form action="{{ route('admin.tenants.reject', $tenant->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to reject this application?')">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-outline-danger rounded-pill px-3 fw-bold extra-small">
                                                    <i class="bi bi-x-lg me-1"></i> Reject
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>

        <!-- 2. APPROVED RESIDENTS TAB -->
        <div class="tab-pane fade" id="approved" role="tabpanel" aria-labelledby="approved-tab">
            <h5 class="fw-bold text-primary-navy mb-4">Active Approved Residents</h5>
            @if(count($approvedTenants) == 0)
                <div class="text-center py-5">
                    <div style="font-size: 3rem;" class="mb-3">🏢</div>
                    <h6 class="fw-bold text-muted">No approved residents registered yet</h6>
                    <p class="text-muted small">Approve pending tenants to register them as active residents.</p>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-hover align-middle custom-table-geist">
                        <thead>
                            <tr class="extra-small text-muted uppercase">
                                <th>Resident</th>
                                <th>Contact details</th>
                                <th>Assigned Flat / Building</th>
                                <th>Monthly Rent</th>
                                <th>Outstanding Bill Status</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($approvedTenants as $tenant)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="profile-avatar bg-primary bg-opacity-10 text-primary" style="width: 42px; height: 42px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                                                {{ strtoupper(substr($tenant->name, 0, 2)) }}
                                            </div>
                                            <div>
                                                <h6 class="mb-0 small fw-bold text-primary-navy">{{ $tenant->name }}</h6>
                                                <span class="extra-small text-success">● Active Resident</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="small fw-semibold text-primary-navy">{{ $tenant->email }}</div>
                                        <div class="extra-small text-muted">{{ $tenant->phone ?? 'No phone' }}</div>
                                    </td>
                                    <td>
                                        @if($tenant->unit)
                                            <div class="small fw-bold text-primary-navy">Unit ID: {{ $tenant->unit->id }} ({{ $tenant->unit->unit_type }})</div>
                                            <div class="extra-small text-muted">{{ $tenant->unit->building->name ?? 'N/A' }}</div>
                                        @else
                                            <span class="text-danger small">No unit assigned</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($tenant->unit)
                                            <span class="small fw-bold text-primary-navy">৳{{ number_format($tenant->unit->amount) }}</span>
                                        @else
                                            <span class="text-muted small">-</span>
                                        @endif
                                    </td>
                                    <td>
                                        @php
                                            $currentBill = $tenant->currentBill();
                                        @endphp
                                        @if($currentBill)
                                            <span class="badge bg-danger-subtle text-danger extra-small px-3 py-1.5 rounded-pill fw-bold">
                                                UNPAID: ৳{{ number_format($currentBill->total_amount) }}
                                            </span>
                                        @else
                                            <span class="badge bg-success-subtle text-success extra-small px-3 py-1.5 rounded-pill fw-bold">
                                                All Cleared
                                            </span>
                                        @endif
                                    </td>
                                    <td class="text-end">
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-light border rounded-3 shadow-sm-hover" title="View Agreement"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-sm btn-light border rounded-3 shadow-sm-hover" title="Edit Resident Info"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-light border rounded-3 shadow-sm-hover" title="Send Message"><i class="bi bi-chat-left-dots"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>

        <!-- 3. REJECTED APPLICATIONS TAB -->
        <div class="tab-pane fade" id="rejected" role="tabpanel" aria-labelledby="rejected-tab">
            <h5 class="fw-bold text-primary-navy mb-4">Rejected Applications</h5>
            @if(count($rejectedTenants) == 0)
                <div class="text-center py-5">
                    <h6 class="fw-bold text-muted">No rejected applications</h6>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-hover align-middle custom-table-geist">
                        <thead>
                            <tr class="extra-small text-muted uppercase">
                                <th>Onboarding Tenant</th>
                                <th>Contact details</th>
                                <th>Date Applied</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rejectedTenants as $tenant)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="profile-avatar bg-danger bg-opacity-10 text-danger" style="width: 42px; height: 42px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                                                {{ strtoupper(substr($tenant->name, 0, 2)) }}
                                            </div>
                                            <div>
                                                <h6 class="mb-0 small fw-bold text-primary-navy">{{ $tenant->name }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="small fw-semibold text-primary-navy">{{ $tenant->email }}</div>
                                        <div class="extra-small text-muted">{{ $tenant->phone ?? 'No phone' }}</div>
                                    </td>
                                    <td>
                                        <span class="small text-muted">{{ $tenant->created_at->format('d M, Y') }}</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-danger-subtle text-danger extra-small">Rejected</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>

    </div>
</div>
@endsection