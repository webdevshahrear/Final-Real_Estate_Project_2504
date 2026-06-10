<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sovereign Access - Imperial OS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

</head>
<body class="bg-black-auth">


    <div class="auth-container">
        <!-- Visual Section -->
        <div class="auth-visual-section">
            <div class="mesh-overlay"></div>
            <div class="visual-overlay-dark"></div>
            
            <div class="visual-content" data-aos="fade-up">
                <div class="status-pill">
                    <div class="dot-glow"></div>
                    NODE STATUS: OPERATIONAL
                </div>
                
                <h1 class="display-3 fw-bold text-white mb-4 font-cinzel">The Imperial Ledger<span class="text-info">.</span></h1>
                <p class="lead text-white opacity-50 mb-5 fw-light" style="letter-spacing: 0.5px;">A sovereign intelligence layer for high-net-worth real estate operations. Unified financials, AI-driven maintenance, and cross-border asset management in one cinematic viewport.</p>
                
                <div class="row g-4 mt-2">
                    <div class="col-md-6">
                        <div class="floating-widget">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="extra-small text-info fw-bold uppercase">System Latency</span>
                                <i class="bi bi-cpu text-white opacity-25"></i>
                            </div>
                            <div class="h3 fw-bold text-white mb-0">1.4ms</div>
                            <div class="extra-small text-white opacity-25 uppercase mt-1">Fiber-Optic Backbone</div>
                        </div>
                    </div>
                    <div class="col-md-6" style="animation-delay: 2s;">
                        <div class="floating-widget">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="extra-small text-warning fw-bold uppercase">Asset Value</span>
                                <i class="bi bi-graph-up-arrow text-white opacity-25"></i>
                            </div>
                            <div class="h3 fw-bold text-white mb-0">$2.4Bn</div>
                            <div class="extra-small text-white opacity-25 uppercase mt-1">Portfolio Under Management</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Section -->
        <div class="auth-form-section" data-aos="fade-left">
            <div class="login-card-cyber">
                <div class="mb-5">
                    <a href="{{ url('/') }}" class="text-decoration-none d-flex align-items-center gap-3">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2L2 19.5H22L12 2Z" fill="#fff"/>
                        </svg>
                        <span class="h5 fw-bold text-white mb-0 font-cinzel tracking-widest" style="letter-spacing: 3px;">IMPERIAL OS</span>
                    </a>
                </div>

                <h2 class="fw-bold text-white mb-1">Authenticated Access</h2>
                <p class="text-white opacity-40 small mb-4">Select your security node to initialize.</p>

                <div class="role-selector-cyber">
                    <div class="role-chip active" onclick="setRole(this, 'admin')">
                        <i class="bi bi-shield-lock"></i>
                        <span>Admin</span>
                    </div>
                    <div class="role-chip" onclick="setRole(this, 'owner')">
                        <i class="bi bi-building"></i>
                        <span>Prop Owner</span>
                    </div>
                    <div class="role-chip" onclick="setRole(this, 'flat-owner')">
                        <i class="bi bi-key"></i>
                        <span>Flat Owner</span>
                    </div>
                    <div class="role-chip" onclick="setRole(this, 'manager')">
                        <i class="bi bi-briefcase"></i>
                        <span>Manager</span>
                    </div>
                    <div class="role-chip" onclick="setRole(this, 'tenant')">
                        <i class="bi bi-houses"></i>
                        <span>Tenant</span>
                    </div>
                </div>

                <form id="loginForm" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="cyber-input-group">
                        <label class="cyber-label">Node Identifier</label>
                        <input name="email" type="email" class="cyber-input" placeholder="id@imperial.ledger" required>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="cyber-input-group">
                        <label class="cyber-label">Security Key</label>
                        <input name="password" type="password" class="cyber-input" placeholder="••••••••" required>
                    </div>

                    <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-3 mb-5">
                        <div class="form-check m-0">
                            <input class="form-check-input bg-transparent border-secondary" type="checkbox" id="persist">
                            <label class="form-check-label extra-small text-white opacity-40" for="persist">Trust this device for 30 days</label>
                        </div>
                        <a href="#" class="extra-small text-info fw-bold text-decoration-none" data-bs-toggle="modal" data-bs-target="#recoverModal">Recover Node?</a>
                    </div>

                    <button type="submit" class="btn-access-cyber" onclick="handleLogin()">
                        INITIALIZE ACCESS <i class="bi bi-cpu fs-5"></i>
                    </button>

                    <p class="text-center mt-5 extra-small text-white opacity-20">
                        © 2026 Sovereign Assets Inc.<br>
                        Protected by Post-Quantum Cryptography.
                    </p>
                </form>
            </div>
        </div>
    </div>

    <!-- Recover Modal -->
    <div class="modal fade" id="recoverModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 rounded-5 shadow-lg bg-dark text-white p-4" style="background: radial-gradient(#1f2937, #000) !important;">
                <div class="modal-body p-4 text-center">
                    <div class="status-pill mb-4"><i class="bi bi-shield-check me-2"></i> SECURITY RECOVERY</div>
                    <h4 class="fw-bold font-cinzel mb-3">Access Recovery</h4>
                    <p class="text-white opacity-50 small mb-4">Enter your node identifier to receive an encrypted recovery key.</p>
                    
                    <form id="recoverForm" class="text-start">
                        <label class="cyber-label">Registered Node ID</label>
                        <input type="text" class="cyber-input mb-4" placeholder="master@source.io">
                        <button type="button" class="btn-access-cyber" onclick="handleRecovery(this)">Dispatch Key</button>
                    </form>

                    <div id="recoverySuccess" class="d-none animate__animated animate__fadeIn">
                        <i class="bi bi-patch-check-fill text-success fs-1 mb-3"></i>
                        <h5 class="fw-bold text-white">Encryption Dispatched</h5>
                        <p class="text-white opacity-40 small mb-4">A one-time security key was sent to your secondary node.</p>
                        <button class="btn btn-outline-light w-100 rounded-pill py-2" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        function setRole(element, role) {
            document.querySelectorAll('.role-chip').forEach(chip => chip.classList.remove('active'));
            element.classList.add('active');
            
            // Optional: Change UI based on role
            const emailInput = document.querySelector('input[name="email"]');
            if (role === 'admin') emailInput.placeholder = 'admin@imperial.ledger';
            else if (role === 'manager') emailInput.placeholder = 'manager@imperial.ledger';
            else emailInput.placeholder = role + '@imperial.ledger';
        }

        function handleLogin() {
            // This function is called before form submission
            // You can add validation or animation here
            const btn = document.querySelector('.btn-access-cyber');
            btn.innerHTML = 'INITIALIZING... <i class="bi bi-hourglass-split ms-2"></i>';
        }

        function handleRecovery(btn) {
            const form = document.getElementById('recoverForm');
            const success = document.getElementById('recoverySuccess');
            
            btn.disabled = true;
            btn.innerHTML = 'DISPATCHING... <i class="bi bi-hourglass-split ms-2"></i>';
            
            setTimeout(() => {
                form.classList.add('d-none');
                success.classList.remove('d-none');
            }, 1500);
        }
    </script>
    

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/8801711223344" class="wa-float" target="_blank" title="Chat on WhatsApp">
        <span class="wa-tooltip">Chat with us!</span>
        <i class="bi bi-whatsapp"></i>
    </a>
</body>
</html>

