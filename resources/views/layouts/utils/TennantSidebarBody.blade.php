{{-- Tenant Sidebar Body --}}
<nav class="flex-grow-1 overflow-y-auto nav-sidebar-geist">
    <p class="nav-category">My Home</p>
    <a href="{{ route('admin.dashboard.tenant') }}" class="nav-item-geist {{ request()->routeIs('admin.dashboard.tenant') ? 'active' : '' }}">
        <i class="bi bi-grid-1x2-fill"></i> Overview
    </a>

    <p class="nav-category">Finance</p>
    <a href="{{ route('admin.billing.tenant') }}" class="nav-item-geist {{ request()->routeIs('admin.billing.tenant') ? 'active' : '' }}">
        <i class="bi bi-receipt"></i> Billing
    </a>
    <a href="{{ route('admin.payment-history.tenant') }}" class="nav-item-geist {{ request()->routeIs('admin.payment-history.tenant') ? 'active' : '' }}">
        <i class="bi bi-clock-history"></i> Payment History
    </a>

    <p class="nav-category">Services</p>
    <a href="{{ route('admin.maintenance.tenant') }}" class="nav-item-geist {{ request()->routeIs('admin.maintenance.tenant') ? 'active' : '' }}">
        <i class="bi bi-tools"></i> Maintenance
    </a>
    <a href="{{ route('admin.notices.tenant') }}" class="nav-item-geist {{ request()->routeIs('admin.notices.tenant') ? 'active' : '' }}">
        <i class="bi bi-megaphone"></i> Building Notices
    </a>

    <p class="nav-category">Account</p>
    <a href="{{ route('admin.documents.tenant') }}" class="nav-item-geist {{ request()->routeIs('admin.documents.tenant') ? 'active' : '' }}">
        <i class="bi bi-folder2-open"></i> My Documents
    </a>
    <a href="{{ route('admin.settings.tenant') }}" class="nav-item-geist {{ request()->routeIs('admin.settings.tenant') ? 'active' : '' }}">
        <i class="bi bi-gear"></i> Portal Settings
    </a>
</nav>
