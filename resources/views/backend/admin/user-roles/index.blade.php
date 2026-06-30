@extends('layouts.backend')

@section('content')
<div class="container-fluid py-4">
    <!-- Premium Hero Section -->
    <div class="premium-hero rounded-5 p-5 mb-5 shadow-lg" data-aos="zoom-out-up">
        <div class="mesh-grid"></div>
        <div class="floating-blob" style="top: -100px; right: -100px; background: rgba(56, 189, 248, 0.15);"></div>
        
        <div class="position-relative z-1 d-flex justify-content-between align-items-end">
            <div>
                <div class="d-flex align-items-center gap-3 mb-4">
                    <span class="badge bg-primary bg-opacity-10 text-primary uppercase-bold px-3 py-2 border border-primary border-opacity-20">Identity Management</span>
                    <span class="text-white-50 small">RBAC & Governance Protocols</span>
                </div>
                <h1 class="display-3 fw-bold text-white tracking-tighter mb-3">Access <span class="text-info">Management</span></h1>
                <p class="text-white-50 lead mb-0" style="max-width: 600px;">Defining granular permissions, managing administrative roles, and monitoring authentication integrity.</p>
            </div>
            <button class="btn btn-info px-4 py-3 rounded-pill fw-bold shadow-lg" data-action="create" data-id="NEW_USER">
                <i class="bi bi-person-plus-fill me-2"></i> PROVISION NEW USER
            </button>
        </div>
    </div>

    <!-- Access Intelligence Layer -->
    <div class="row g-4 mb-5" data-aos="fade-up">
        <div class="col-lg-8">
            <div class="glass-card-premium rounded-5 p-0 overflow-hidden">
                <div class="p-4 border-bottom border-white d-flex justify-content-between align-items-center bg-white bg-opacity-30">
                    <h5 class="fw-bold mb-0 tracking-tighter">Permission Granularity Pulse</h5>
                    <span class="badge bg-primary-navy text-white uppercase-bold px-3 py-2">Dynamic RBAC Sync</span>
                </div>
                <div class="row g-0">
                    <div class="col-md-7 p-4 border-end border-white">
                        <div class="mb-5">
                            <p class="uppercase-bold text-muted mb-2 opacity-60">Effective Access Depth</p>
                            <div class="display-5 fw-bold text-primary-navy tracking-tighter">420+ <span class="fs-4 text-muted opacity-50">Rules</span></div>
                            <p class="extra-small text-muted mb-0 mt-2"><i class="bi bi-shield-check-fill text-success me-1"></i> Zero-Trust Policy Active</p>
                        </div>
                        <div class="p-4 rounded-4 bg-white bg-opacity-40 border border-white shadow-sm">
                            <h6 class="uppercase-bold mb-3 opacity-60">Role Overlap Analysis</h6>
                            <div class="progress rounded-pill shadow-sm" style="height: 10px;">
                                <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" style="width: 15%;"></div>
                            </div>
                            <div class="d-flex justify-content-between extra-small mt-2">
                                <span class="text-muted">Conflict probability: 15%</span>
                                <span class="fw-bold text-primary">MINIMIZED</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 p-4 bg-white bg-opacity-20 d-flex flex-column justify-content-center">
                        <h6 class="uppercase-bold mb-4 opacity-60">Audit Integrity Metrics</h6>
                        <div class="mb-4">
                            <div class="d-flex justify-content-between extra-small mb-2">
                                <span class="text-muted">Log Tamper Proof:</span>
                                <span class="fw-bold text-success">100% SECURE</span>
                            </div>
                            <div class="progress rounded-pill shadow-sm" style="height: 6px;">
                                <div class="progress-bar bg-success" style="width: 100%;"></div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex justify-content-between extra-small mb-2">
                                <span class="text-muted">Anomalous Sign-ins:</span>
                                <span class="fw-bold text-success">0 DETECTED</span>
                            </div>
                            <div class="progress rounded-pill shadow-sm" style="height: 6px;">
                                <div class="progress-bar bg-success" style="width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4">
            <div class="glass-card-premium rounded-5 p-4 h-100 text-center d-flex flex-column justify-content-between">
                <div class="text-start mb-4">
                    <h5 class="fw-bold mb-1 tracking-tighter">MFA Adoption</h5>
                    <p class="extra-small text-muted">Governance enforcement tracking.</p>
                </div>
                
                <div class="position-relative d-inline-flex align-items-center justify-content-center my-4 mx-auto">
                    <svg width="140" height="140">
                        <circle cx="70" cy="70" r="60" fill="none" stroke="rgba(220, 38, 38, 0.1)" stroke-width="12"></circle>
                        <circle cx="70" cy="70" r="60" fill="none" stroke="#ef4444" stroke-width="12" stroke-dasharray="377" stroke-dashoffset="23" stroke-linecap="round"></circle>
                    </svg>
                    <div class="position-absolute text-center">
                        <h2 class="fw-bold mb-0 tracking-tighter">94%</h2>
                        <span class="extra-small uppercase-bold opacity-50">ACTIVE</span>
                    </div>
                </div>

                <div class="px-3">
                    <h6 class="fw-bold small mb-2">Security Hardening active</h6>
                    <p class="extra-small text-muted mb-4">Mandatory for Super Admins and Financial controllers.</p>
                    <button class="btn btn-white border w-100 rounded-pill py-3 fw-bold extra-small shadow-sm">
                        <i class="bi bi-arrow-repeat me-2"></i> ENFORCE GLOBAL RESET
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- User Table -->
    <div class="glass-card-premium rounded-5 p-4" data-aos="fade-up">
        <h5 class="fw-bold mb-5 tracking-tighter ps-2">Provisioned Administrators</h5>
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr class="uppercase-bold text-muted opacity-50">
                        <th class="ps-4">User Identity</th>
                        <th>Governance Role</th>
                        <th>Access Scope</th>
                        <th>Last Presence</th>
                        <th class="text-end pe-4">System Actions</th>
                    </tr>
                </thead>
                <tbody class="border-top-0">
                    <tr>
                        <td class="ps-4">
                            <div class="d-flex align-items-center gap-3">
                                <div class="rounded-4 bg-primary-navy d-flex align-items-center justify-content-center text-white fw-bold shadow" style="width: 45px; height: 45px;">JS</div>
                                <div>
                                    <h6 class="mb-0 small fw-bold">James Sterling</h6>
                                    <p class="mb-0 extra-small text-muted">james@imperial.os</p>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-3 py-2 border border-primary border-opacity-10">SUPER ADMIN</span></td>
                        <td><span class="extra-small fw-bold text-primary-navy">FULL INFRASTRUCTURE ACCESS</span></td>
                        <td><span class="small fw-bold">JUST NOW</span></td>
                        <td class="text-end pe-4">
                            <div class="d-flex justify-content-end gap-2">
                                <button class="btn btn-white btn-sm border rounded-pill px-3 extra-small fw-bold shadow-sm" title="Permissions"><i class="bi bi-shield-lock"></i></button>
                                <button class="btn btn-white btn-sm border rounded-pill px-3 extra-small fw-bold shadow-sm" title="Edit"><i class="bi bi-pencil"></i></button>
                                <button class="btn btn-outline-danger btn-sm rounded-pill px-3 extra-small fw-bold shadow-sm" title="Revoke"><i class="bi bi-slash-circle"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="ps-4">
                            <div class="d-flex align-items-center gap-3">
                                <div class="rounded-4 bg-light d-flex align-items-center justify-content-center text-dark fw-bold shadow-sm" style="width: 45px; height: 45px;">AM</div>
                                <div>
                                    <h6 class="mb-0 small fw-bold">Annette Murphy</h6>
                                    <p class="mb-0 extra-small text-muted">annette@imperial.os</p>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-secondary bg-opacity-10 text-secondary rounded-pill px-3 py-2 border border-secondary border-opacity-10">ACCOUNTANT</span></td>
                        <td><span class="extra-small text-muted">Financials, Billing, Assets</span></td>
                        <td><span class="small text-muted">2 HOURS AGO</span></td>
                        <td class="text-end pe-4">
                            <div class="d-flex justify-content-end gap-2">
                                <button class="btn btn-white btn-sm border rounded-pill px-3 extra-small fw-bold shadow-sm"><i class="bi bi-shield-lock"></i></button>
                                <button class="btn btn-white btn-sm border rounded-pill px-3 extra-small fw-bold shadow-sm"><i class="bi bi-pencil"></i></button>
                                <button class="btn btn-outline-danger btn-sm rounded-pill px-3 extra-small fw-bold shadow-sm"><i class="bi bi-slash-circle"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
