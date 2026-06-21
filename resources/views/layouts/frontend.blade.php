<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Rentals - The Imperial</title>
    <meta name="description"
        content="Find verified luxury rental apartments in Gulshan, Banani, Dhanmondi and Uttara. Managed by The Imperial's professional team.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #f0f4f8;
        }

        .listing-hero {
            padding: 160px 0 80px;
            background: linear-gradient(135deg, #0d2a1f 0%, #064e3b 55%, #065f46 100%);
            position: relative;
            overflow: hidden;
        }

        .listing-hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 15% 50%, rgba(16, 185, 129, 0.2) 0%, transparent 60%),
                radial-gradient(circle at 85% 20%, rgba(52, 211, 153, 0.12) 0%, transparent 50%);
        }

        .grid-bg {
            position: absolute;
            inset: 0;
            background-image: linear-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
            background-size: 60px 60px;
        }

        .hero-type-tabs {
            display: inline-flex;
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 100px;
            padding: 4px;
            gap: 2px;
            backdrop-filter: blur(10px);
            margin-bottom: 2rem;
        }

        .hero-type-tab {
            padding: 8px 22px;
            border-radius: 100px;
            font-size: 0.78rem;
            font-weight: 700;
            color: rgba(255, 255, 255, 0.5);
            text-decoration: none;
            transition: all 0.25s;
            letter-spacing: 0.04em;
        }

        .hero-type-tab:hover {
            color: rgba(255, 255, 255, 0.85);
        }

        .hero-type-tab.active {
            background: #fff;
            color: #064e3b;
        }

        .hero-badge-pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 5px 14px;
            background: rgba(255, 255, 255, 0.07);
            border: 1px solid rgba(255, 255, 255, 0.14);
            border-radius: 100px;
            font-size: 0.67rem;
            font-weight: 700;
            color: rgba(255, 255, 255, 0.65);
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 1.25rem;
        }

        .hero-badge-pill .dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #34d399;
            box-shadow: 0 0 6px #34d399;
        }

        .hero-title {
            font-size: clamp(2rem, 5vw, 3.25rem);
            font-weight: 800;
            color: #fff;
            letter-spacing: -0.03em;
            line-height: 1.1;
            margin-bottom: 1rem;
        }

        .hero-title span {
            color: #6ee7b7;
        }

        .hero-stats {
            display: flex;
            gap: 2.5rem;
            margin-top: 2.5rem;
            flex-wrap: wrap;
        }

        .h-stat .val {
            font-size: 1.6rem;
            font-weight: 800;
            color: #fff;
            line-height: 1;
        }

        .h-stat .lbl {
            font-size: 0.65rem;
            color: rgba(255, 255, 255, 0.4);
            text-transform: uppercase;
            letter-spacing: 0.08em;
            margin-top: 4px;
        }

        .filter-panel {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 22px;
            padding: 1.75rem;
            position: sticky;
            top: 90px;
        }

        .filter-label {
            font-size: 0.65rem;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: #9ca3af;
            font-weight: 700;
            margin-bottom: 0.6rem;
        }

        .filter-input {
            width: 100%;
            background: #f8fafc;
            border: 1.5px solid #e5e7eb;
            border-radius: 10px;
            padding: 0.65rem 0.9rem;
            font-size: 0.85rem;
            color: #1e3a5f;
            outline: none;
            transition: border-color 0.2s;
            font-family: inherit;
        }

        .filter-input:focus {
            border-color: #10b981;
        }

        .bed-btn {
            flex: 1;
            padding: 0.45rem 0;
            border: 1.5px solid #e5e7eb;
            border-radius: 8px;
            background: #f8fafc;
            font-size: 0.8rem;
            font-weight: 700;
            color: #6b7280;
            cursor: pointer;
            transition: all 0.2s;
            text-align: center;
        }

        .bed-btn.active,
        .bed-btn:hover {
            background: #064e3b;
            color: #fff;
            border-color: #064e3b;
        }

        .btn-apply-filter {
            width: 100%;
            background: linear-gradient(135deg, #064e3b, #10b981);
            color: #fff;
            border: none;
            border-radius: 12px;
            padding: 0.85rem;
            font-weight: 700;
            font-size: 0.85rem;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 0.5rem;
        }

        .btn-apply-filter:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(6, 78, 59, 0.3);
        }

        .btn-clear-filter {
            width: 100%;
            background: transparent;
            color: #9ca3af;
            border: none;
            border-radius: 12px;
            padding: 0.6rem;
            font-weight: 600;
            font-size: 0.78rem;
            cursor: pointer;
            transition: color 0.2s;
        }

        .btn-clear-filter:hover {
            color: #dc2626;
        }

        .prop-card {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
            cursor: pointer;
            text-decoration: none;
            color: inherit;
            display: block;
            position: relative;
        }

        .prop-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 50px rgba(6, 78, 59, 0.13);
            border-color: #10b981;
            color: inherit;
        }

        .prop-img-wrap {
            position: relative;
            overflow: hidden;
            height: 230px;
        }

        .prop-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .prop-card:hover .prop-img-wrap img {
            transform: scale(1.07);
        }

        .prop-badge {
            position: absolute;
            top: 14px;
            left: 14px;
            padding: 5px 13px;
            border-radius: 100px;
            font-size: 0.65rem;
            font-weight: 800;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }

        .badge-rent {
            background: #064e3b;
            color: #fff;
        }

        .prop-wish {
            position: absolute;
            top: 14px;
            right: 14px;
            width: 34px;
            height: 34px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
            color: #9ca3af;
            cursor: pointer;
            transition: all 0.2s;
        }

        .prop-wish:hover {
            background: #fff;
            color: #dc2626;
        }

        .prop-verified {
            position: absolute;
            bottom: 14px;
            right: 14px;
            background: rgba(22, 163, 74, 0.9);
            color: #fff;
            padding: 3px 10px;
            border-radius: 100px;
            font-size: 0.6rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .prop-body {
            padding: 1.2rem 1.4rem 1.4rem;
        }

        .prop-price {
            font-size: 1.35rem;
            font-weight: 800;
            color: #064e3b;
            letter-spacing: -0.02em;
            margin-bottom: 0.25rem;
        }

        .prop-price-sub {
            font-size: 0.78rem;
            font-weight: 500;
            color: #9ca3af;
        }

        .prop-title {
            font-size: 0.95rem;
            font-weight: 700;
            color: #1e3a5f;
            margin-bottom: 0.3rem;
            line-height: 1.35;
        }

        .prop-loc {
            font-size: 0.78rem;
            color: #9ca3af;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .prop-specs {
            display: flex;
            gap: 1rem;
            padding-top: 0.85rem;
            border-top: 1px solid #f1f5f9;
        }

        .prop-spec {
            font-size: 0.75rem;
            font-weight: 600;
            color: #6b7280;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .prop-spec i {
            color: #10b981;
            font-size: 0.85rem;
        }

        .prop-avail {
            position: absolute;
            bottom: 14px;
            left: 14px;
            background: rgba(6, 78, 59, 0.85);
            color: #fff;
            padding: 3px 10px;
            border-radius: 100px;
            font-size: 0.6rem;
            font-weight: 700;
        }

        .listing-toolbar {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            padding: 0.85rem 1.25rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.5rem;
        }

        .view-btn {
            width: 34px;
            height: 34px;
            border: 1.5px solid #e5e7eb;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s;
            background: #f8fafc;
            font-size: 0.9rem;
            color: #6b7280;
        }

        .view-btn.active,
        .view-btn:hover {
            background: #064e3b;
            color: #fff;
            border-color: #064e3b;
        }

        .pager {
            display: flex;
            gap: 6px;
            align-items: center;
            justify-content: center;
            margin-top: 3rem;
        }

        .page-pill {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.82rem;
            font-weight: 700;
            border: 1.5px solid #e5e7eb;
            background: #fff;
            color: #6b7280;
            cursor: pointer;
            transition: all 0.2s;
        }

        .page-pill.active,
        .page-pill:hover {
            background: #064e3b;
            color: #fff;
            border-color: #064e3b;
        }

        .page-pill.disabled {
            opacity: 0.4;
            cursor: not-allowed;
        }

        .no-results {
            text-align: center;
            padding: 5rem 1rem;
            display: none;
        }
    </style>
</head>

<body>
    <!-- Floating Pill Navbar -->
    <nav class="navbar-geist">
        <!-- Left: Hamburger (Mobile) & Logo (Desktop) -->
        <div class="d-flex align-items-center position-relative z-1">
            <button
                class="navbar-mobile-toggle d-md-none me-3 btn btn-light rounded-circle shadow-sm border border-light-subtle d-flex align-items-center justify-content-center transition"
                style="width: 44px; height: 44px;" aria-label="Toggle Menu">
                <i class="bi bi-list text-primary-navy" style="font-size: 1.5rem;"></i>
            </button>
            <a href="{{ url('/') }}"
                class="navbar-brand text-decoration-none d-none d-md-flex align-items-center font-cinzel text-primary-navy fw-bold tracking-wide">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" style="margin-right: 8px;">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2L2 19.5H22L12 2Z" fill="#1E3A5F" />
                </svg>
                THE IMPERIAL
            </a>
        </div>

        <!-- Desktop Nav Links -->
        <ul class="nav-links d-none d-md-flex mb-0 mx-auto position-relative z-1">
            <li><a href="{{ url('/') }}" class="nav-link">Home</a></li>
            <li><a href="{{ route('about') }}" class="nav-link">About</a></li>
            <li><a href="{{ route('services') }}" class="nav-link">Services</a></li>
            <li><a href="{{ route('flats-for-sale') }}" class="nav-link active">Properties</a></li>
        </ul>

        <!-- Mobile Centered Logo -->
        <a href="{{ url('/') }}"
            class="navbar-brand text-decoration-none d-flex d-md-none align-items-center position-absolute top-50 start-50 translate-middle z-0 font-cinzel text-primary-navy fw-bold tracking-wide">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" style="margin-right: 6px;">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2L2 19.5H22L12 2Z" fill="#1E3A5F" />
            </svg>
            IMPERIAL
        </a>

        <!-- Right: Actions -->
        <div class="d-flex align-items-center gap-2 position-relative z-1">
            <a href="{{ route('login') }}" class="btn-geist-secondary d-none d-sm-block text-uppercase fw-bold"
                style="padding: 0.5rem 1.2rem; font-size: 0.75rem; letter-spacing: 1px;">Portal</a>
            <a href="{{ route('contact') }}" class="btn-geist text-uppercase fw-bold"
                style="padding: 0.5rem 1.2rem; font-size: 0.75rem; letter-spacing: 1px;">Inquiry</a>
        </div>
    </nav>

    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu-overlay d-lg-none">
        <button
            class="navbar-mobile-toggle position-absolute top-0 end-0 m-4 btn btn-outline-light rounded-circle shadow-lg d-flex align-items-center justify-content-center"
            style="width: 48px; height: 48px; border-width: 2px;" aria-label="Close Menu">
            <i class="bi bi-x-lg fs-5"></i>
        </button>

        <!-- Elegant Crest inside menu -->
        <div class="mb-5 text-center mobile-nav-link" style="transition-delay: 0.1s;">
            <svg width="42" height="42" viewBox="0 0 24 24" fill="none" class="mb-3 drop-shadow">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2L2 19.5H22L12 2Z" fill="#ffffff" />
            </svg>
            <div class="font-cinzel text-white fs-4 tracking-wide fw-bold">THE IMPERIAL</div>
            <div class="text-white-50 mt-1" style="font-size: 0.7rem; letter-spacing: 2px; text-transform: uppercase;">
                Residences & Suites</div>
        </div>

        <div class="d-flex flex-column align-items-center flex-grow-1 justify-content-center w-100">
            <a href="{{ url('/') }}" class="mobile-nav-link" style="transition-delay: 0.1s;">Home</a>
            <a href="{{ route('about') }}" class="mobile-nav-link" style="transition-delay: 0.2s;">About</a>
            <a href="{{ route('services') }}" class="mobile-nav-link" style="transition-delay: 0.3s;">Services</a>
            <a href="{{ route('flats-for-sale') }}" class="mobile-nav-link"
                style="transition-delay: 0.4s;">Properties</a>
            <a href="{{ route('contact') }}" class="mobile-nav-link" style="transition-delay: 0.5s;">Contact</a>
        </div>

        <div class="w-100 px-4 pb-5 mobile-nav-link" style="transition-delay: 0.6s; max-width: 320px;">
            <a href="{{ route('contact') }}"
                class="btn btn-light rounded-pill py-3 fw-bold border-0 shadow-lg w-100 text-primary-navy tracking-wide mb-3">SCHEDULE
                VIEWING</a>
            <a href="{{ route('login') }}"
                class="btn btn-outline-light rounded-pill py-3 fw-bold w-100 tracking-wide border-2 bg-dark bg-opacity-25 backdrop-blur">RESIDENT
                PORTAL</a>
        </div>
    </div>

    @yield('frontend')

    <footer class="geist-footer">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <a href="{{ url('/') }}" class="navbar-brand text-decoration-none d-flex align-items-center mb-3">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" style="margin-right:8px;">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2L2 19.5H22L12 2Z" fill="#1E3A5F" />
                        </svg>
                        The Imperial
                    </a>
                    <p class="text-muted small pe-lg-5">The enterprise operating system for luxury real estate — premium
                        asset management.</p>
                </div>
                <div class="col-lg-2 col-6 mb-4">
                    <h6 class="footer-title">Properties</h6>
                    <a href="{{ route('flats-for-sale') }}" class="footer-link">For Sale</a>
                    <a href="{{ route('flats-for-rent') }}" class="footer-link">For Rent</a>
                    <a href="{{ route('commercial-spaces') }}" class="footer-link">Commercial</a>
                </div>
                <div class="col-lg-2 col-6 mb-4">
                    <h6 class="footer-title">Resources</h6>
                    <a href="{{ route('faq') }}" class="footer-link">Support Desk</a>
                    <a href="{{ route('contact') }}" class="footer-link">Concierge</a>
                </div>
                <div class="col-lg-4 text-lg-end pt-3 pt-lg-0">
                    <div class="d-inline-flex align-items-center bg-white border px-3 py-2 rounded-pill shadow-sm">
                        <span class="spinner-grow spinner-grow-sm text-success me-2" role="status"></span>
                        <span class="font-mono small text-muted">ALL SYSTEMS OPERATIONAL</span>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center border-top mt-5 pt-4"
                style="border-color:var(--accents-2)!important;">
                <p class="text-muted small mb-0">© 2026 Imperial Inc.</p>
                <div class="mt-3 mt-md-0 font-mono small d-flex gap-4">
                    <a href="#" class="text-muted text-decoration-none">Privacy</a>
                    <a href="#" class="text-muted text-decoration-none">Terms</a>
                </div>
            </div>
        </div>
    </footer>

    <a href="https://wa.me/8801711223344" class="wa-float" target="_blank">
        <span class="wa-tooltip">Chat with us!</span>
        <i class="bi bi-whatsapp"></i>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        AOS.init({ once: true, duration: 700, offset: 60 });
            let activeBed = '3';
            function setBed(btn, val) { document.querySelectorAll('.bed-btn').forEach(b => b.classList.remove('active')); btn.classList.add('active'); activeBed = val; applyFilters(); }
            function applyFilters() {
                const loc = document.getElementById('locSearch').value.toLowerCase();
                const type = document.getElementById('typeFilter').value.toLowerCase();
                const min = parseFloat(document.getElementById('minPrice').value) || 0;
                const max = parseFloat(document.getElementById('maxPrice').value) || 999999;
                let visible = 0;
                document.querySelectorAll('#propGrid > .col-md-6').forEach(card => {
                    const show = (loc === '' || card.dataset.location.toLowerCase().includes(loc)) &&
                                 (type === '' || card.dataset.type.toLowerCase().includes(type)) &&
                                 parseInt(card.dataset.beds) >= parseInt(activeBed) &&
                                 parseFloat(card.dataset.price) >= min && parseFloat(card.dataset.price) <= max;
                    card.style.display = show ? '' : 'none';
                    if (show) visible++;
                });
                document.getElementById('noResults').style.display = visible === 0 ? 'block' : 'none';
                document.getElementById('resultCount').innerHTML = `Showing <strong>${visible}</strong> of 62 managed rentals`;
            }
            function clearFilters() { ['locSearch','minPrice','maxPrice'].forEach(id => document.getElementById(id).value = ''); document.getElementById('typeFilter').value = ''; activeBed = '1'; document.querySelectorAll('.bed-btn').forEach(b => b.classList.remove('active')); document.querySelectorAll('.bed-btn')[0].classList.add('active'); applyFilters(); }
            function setView(type) { document.querySelectorAll('#propGrid > .col-md-6').forEach(c => c.className = type === 'list' ? 'col-12' : 'col-md-6'); }
    </script>
</body>

</html>