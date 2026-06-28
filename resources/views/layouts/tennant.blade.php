<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imperial OS - Command Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    
    @stack('css')
</head>

<body class="bg-light">

    <!-- Mobile Header -->
    <header class="dashboard-mobile-header d-lg-none">
        <button class="btn btn-toggle-sidebar text-primary-navy p-0 border-0 bg-transparent">
            <i class="bi bi-list fs-2"></i>
        </button>
        <div class="fw-bold text-primary-navy">Command Center</div>
        <div class="profile-avatar" style="width:32px;height:32px;font-size:0.7rem;">JS</div>
    </header>

    <!-- Sidebar Overlay -->
    <div class="sidebar-overlay"></div>

    <div class="dashboard-wrapper">
        <!-- Sidebar -->
        <aside class="sidebar-geist">
            <div class="px-3 mb-5">
                <a href="{{ url('/') }}" class="navbar-brand text-decoration-none d-flex align-items-center">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" style="margin-right: 8px;">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2L2 19.5H22L12 2Z" fill="#1E3A5F" />
                    </svg>
                    Imperial OS
                </a>
            </div>
            {{-- Sidebar Body --}}
            @include('layouts.utils.SidebarBody')

            <div class="sidebar-profile">
                <div class="d-flex align-items-center gap-3">
                    <div class="profile-avatar">{{ substr(auth()->guard('tennant')->user()->name, 0,1) }}</div>
                    <div class="flex-grow-1 overflow-hidden">
                        <h6 class="profile-name">{{ auth()->guard('tennant')->user()->name }}</h6>
                        <p class="profile-role">Tennant</p>
                    </div>
                </div>
                <button class="logout-btn" id="logoutBtn" title="Sign Out">
                    <i class="bi bi-box-arrow-right"></i>
                    Sign Out
                </button>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="main-content-geist">
            {{-- Dynamic Content Here .... --}}
            @yield('content')
            {{-- Dynamic Content Here .... --}}
        </main>
    </div>

    <!-- Mobile Bottom Navigation -->
    <nav class="mobile-bottom-nav d-lg-none">
        <a href="{{ route('admin.dashboard') }}" class="bottom-nav-item active">
            <i class="bi bi-grid-1x2-fill"></i>
            <span>Overview</span>
        </a>
        <a href="{{ route('admin.building.index') }}" class="bottom-nav-item">
            <i class="bi bi-buildings"></i>
            <span>Properties</span>
        </a>
        <a href="{{ route('admin.billing') }}" class="bottom-nav-item">
            <i class="bi bi-receipt"></i>
            <span>Finance</span>
        </a>
        <a href="{{ route('admin.maintenance') }}" class="bottom-nav-item">
            <i class="bi bi-tools"></i>
            <span>Ops</span>
        </a>
        <a href="{{ route('admin.settings') }}" class="bottom-nav-item">
            <i class="bi bi-person-circle"></i>
            <span>Profile</span>
        </a>
    </nav>
    <form id="logoutForm" action="{{ route('logout') }}" method="POST">
        @csrf
    </form>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('script')
</body>

</html>
