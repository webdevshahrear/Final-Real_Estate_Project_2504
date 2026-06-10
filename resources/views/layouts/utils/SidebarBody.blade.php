{{-- Sidebar Body --}}
<nav class="flex-grow-1 overflow-y-auto nav-sidebar-geist">
    <p class="nav-category">Primary</p>
    <a href="{{ route('admin.dashboard') }}" class="nav-item-geist {{ getActiveLink('admin.dashboard') }}"><i class="bi bi-grid-1x2-fill"></i> Overview</a>
    <a href="{{ route('admin.building.index') }}" class="nav-item-geist {{ getActiveLink('admin.building.*') }}"><i class="bi bi-buildings"></i> Buildings</a>
    <a href="{{ route('admin.units.index') }}" class="nav-item-geist {{ getActiveLink('admin.units.*') }}"><i class="bi bi-door-closed"></i> Units</a>

    <p class="nav-category">Stakeholders</p>
    <a href="{{ route('admin.customers.index') }}" class="nav-item-geist {{ getActiveLink('admin.customers.*') }}"><i class="bi bi-people"></i> Customers</a>
    <a href="{{ route('admin.owners') }}" class="nav-item-geist"><i class="bi bi-person-badge"></i> Owners</a>
    <a href="{{ route('admin.tenants') }}" class="nav-item-geist"><i class="bi bi-people"></i> Tenants</a>

    <p class="nav-category">Marketplace</p>
    <a href="{{ route('admin.properties.index') }}" class="nav-item-geist {{ getActiveLink('admin.properties.*') }}"><i class="bi bi-house"></i> Properties</a>
    <a href="transfers.html" class="nav-item-geist"><i class="bi bi-arrow-left-right"></i> Transfers</a>

    <p class="nav-category">Operations</p>
    <a href="{{ route('admin.billing') }}" class="nav-item-geist"><i class="bi bi-receipt"></i> Billing</a>
    <a href="{{ route('admin.accounts') }}" class="nav-item-geist"><i class="bi bi-wallet2"></i> Accounts</a>
    <a href="{{ route('admin.maintenance') }}" class="nav-item-geist"><i class="bi bi-tools"></i> Maintenance <span
            class="badge bg-danger ms-auto rounded-pill">4</span></a>
    <a href="{{ route('admin.notices') }}" class="nav-item-geist"><i class="bi bi-megaphone"></i> Notice Board</a>

    <p class="nav-category">Marketplace</p>
    <a href="{{ route('listings') }}" class="nav-item-geist"><i class="bi bi-tags"></i> Listings</a>
    <a href="{{ route('admin.transfers') }}" class="nav-item-geist"><i class="bi bi-arrow-left-right"></i> Transfers</a>

    <p class="nav-category">Intelligence</p>
    <a href="{{ route('admin.reports') }}" class="nav-item-geist"><i class="bi bi-bar-chart-line"></i> Reports</a>
    <a href="{{ route('admin.documents') }}" class="nav-item-geist"><i class="bi bi-file-earmark-text"></i> Documents</a>

    <p class="nav-category">System</p>
    <a href="{{ route('admin.visitors') }}" class="nav-item-geist"><i class="bi bi-shield-check"></i> Visitors</a>
    <a href="{{ route('admin.user-roles') }}" class="nav-item-geist"><i class="bi bi-person-gear"></i> User Roles</a>
    <a href="{{ route('admin.settings') }}" class="nav-item-geist"><i class="bi bi-gear"></i> Settings</a>
</nav>

