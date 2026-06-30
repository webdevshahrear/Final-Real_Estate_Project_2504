<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Tenant Account — The Imperial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #0a192f 0%, #1e3a5f 60%, #0d2d5e 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
        }
        .auth-wrapper {
            display: flex;
            width: 100%;
            max-width: 960px;
            min-height: 600px;
            border-radius: 28px;
            overflow: hidden;
            box-shadow: 0 40px 80px rgba(0,0,0,0.4);
        }
        /* Left panel */
        .auth-left {
            flex: 1;
            background: linear-gradient(160deg, #0f2b4c 0%, #1a4080 100%);
            padding: 3rem 2.5rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
        }
        .auth-left::before {
            content: '';
            position: absolute;
            width: 350px; height: 350px;
            background: radial-gradient(circle, rgba(43,123,232,0.25), transparent 70%);
            top: -100px; right: -100px; border-radius: 50%;
        }
        .auth-left::after {
            content: '';
            position: absolute;
            width: 250px; height: 250px;
            background: radial-gradient(circle, rgba(22,163,74,0.15), transparent 70%);
            bottom: -80px; left: -60px; border-radius: 50%;
        }
        .auth-left .brand {
            display: flex; align-items: center; gap: 10px;
            color: #fff; font-size: 1.1rem; font-weight: 700;
            text-decoration: none; z-index: 1; position: relative;
        }
        .auth-left .brand svg path { fill: #fff; }
        .auth-left .left-content { position: relative; z-index: 1; }
        .auth-left h2 {
            color: #fff; font-size: 2rem; font-weight: 800;
            letter-spacing: -0.03em; line-height: 1.2; margin-bottom: 1rem;
        }
        .auth-left p { color: rgba(255,255,255,0.65); font-size: 0.9rem; line-height: 1.7; margin-bottom: 2rem; }
        .feature-item {
            display: flex; align-items: center; gap: 12px;
            color: rgba(255,255,255,0.85); font-size: 0.85rem;
            margin-bottom: 0.85rem;
        }
        .feature-item i {
            width: 32px; height: 32px; background: rgba(255,255,255,0.1);
            border-radius: 8px; display: flex; align-items: center; justify-content: center;
            font-size: 1rem; flex-shrink: 0; color: #60a5fa;
        }
        .step-badge {
            display: inline-flex; align-items: center; gap: 8px;
            background: rgba(22,163,74,0.2); border: 1px solid rgba(22,163,74,0.4);
            color: #4ade80; font-size: 0.72rem; font-weight: 700;
            padding: 0.4em 1em; border-radius: 100px; letter-spacing: 0.05em;
            margin-bottom: 1.5rem;
        }
        /* Right panel */
        .auth-right {
            flex: 1.1;
            background: #fff;
            padding: 3rem 2.5rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            overflow-y: auto;
        }
        .auth-right h3 {
            font-size: 1.6rem; font-weight: 800; color: #0f172a;
            letter-spacing: -0.03em; margin-bottom: 0.3rem;
        }
        .auth-right .subtitle { color: #6b7280; font-size: 0.875rem; margin-bottom: 1.8rem; }
        .form-label {
            font-size: 0.7rem; font-weight: 700; letter-spacing: 0.08em;
            color: #6b7280; text-transform: uppercase; margin-bottom: 0.4rem;
        }
        .form-control {
            border: 1.5px solid #e5e7eb; border-radius: 12px;
            padding: 0.7rem 1rem; font-size: 0.9rem; color: #0f172a;
            transition: all 0.25s ease;
        }
        .form-control:focus {
            border-color: #1e3a5f; box-shadow: 0 0 0 3px rgba(30,58,95,0.08);
        }
        .form-control.is-invalid { border-color: #dc2626; }
        .pre-filled-badge {
            position: relative;
        }
        .pre-filled-badge::after {
            content: '✓ Pre-filled';
            position: absolute; right: 12px; top: 50%; transform: translateY(-50%);
            font-size: 0.65rem; font-weight: 700; color: #16a34a;
            background: #dcfce7; padding: 2px 8px; border-radius: 100px;
        }
        .btn-signup {
            background: #1e3a5f; color: #fff; border: none;
            border-radius: 12px; padding: 0.85rem 1.5rem;
            font-size: 0.95rem; font-weight: 700; width: 100%;
            transition: all 0.25s ease; cursor: pointer; letter-spacing: -0.01em;
        }
        .btn-signup:hover {
            background: #2b7be8;
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(30,58,95,0.25);
        }
        .divider {
            display: flex; align-items: center; gap: 12px;
            color: #d1d5db; font-size: 0.75rem; margin: 1.2rem 0;
        }
        .divider::before, .divider::after {
            content: ''; flex: 1; height: 1px; background: #e5e7eb;
        }
        .btn-google {
            background: #fff; color: #374151; border: 1.5px solid #e5e7eb;
            border-radius: 12px; padding: 0.7rem; font-size: 0.875rem;
            font-weight: 600; width: 100%; display: flex; align-items: center;
            justify-content: center; gap: 10px; transition: all 0.2s ease;
            cursor: pointer; text-decoration: none;
        }
        .btn-google:hover { background: #f9fafb; border-color: #d1d5db; color: #374151; }
        .alert-prefill {
            background: #eff6ff; border: 1px solid #bfdbfe;
            border-radius: 12px; padding: 0.75rem 1rem;
            font-size: 0.8rem; color: #1e40af; margin-bottom: 1.5rem;
            display: flex; align-items: flex-start; gap: 8px;
        }
        .alert-success-custom {
            background: #f0fdf4; border: 1px solid #bbf7d0;
            border-radius: 12px; padding: 0.75rem 1rem;
            font-size: 0.8rem; color: #166534; margin-bottom: 1.5rem;
            display: flex; align-items: center; gap: 8px;
        }
        @media (max-width: 768px) {
            .auth-left { display: none; }
            .auth-wrapper { max-width: 480px; border-radius: 20px; }
            .auth-right { padding: 2rem 1.5rem; }
        }
    </style>
</head>
<body>
    <div class="auth-wrapper">
        <!-- Left Panel -->
        <div class="auth-left">
            <a href="{{ url('/') }}" class="brand">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2L2 19.5H22L12 2Z" fill="#fff"/>
                </svg>
                THE IMPERIAL
            </a>
            <div class="left-content">
                <div class="step-badge">
                    <i class="bi bi-1-circle-fill"></i> STEP 1 OF 3 — CREATE ACCOUNT
                </div>
                <h2>Your home is waiting.<br>Let's get you in.</h2>
                <p>Create your Imperial Resident account to confirm your viewing appointment and start your tenancy journey.</p>
                <div class="feature-item">
                    <i class="bi bi-calendar2-check"></i>
                    Viewing appointment auto-confirmed
                </div>
                <div class="feature-item">
                    <i class="bi bi-shield-lock"></i>
                    Secure digital lease signing
                </div>
                <div class="feature-item">
                    <i class="bi bi-credit-card"></i>
                    Easy monthly rent payment
                </div>
                <div class="feature-item">
                    <i class="bi bi-tools"></i>
                    Maintenance request portal
                </div>
            </div>
            <p style="color:rgba(255,255,255,0.35); font-size:0.72rem; position:relative; z-index:1;">
                © {{ date('Y') }} The Imperial. All rights reserved.
            </p>
        </div>

        <!-- Right Panel -->
        <div class="auth-right">
            <h3>Create Your Account</h3>
            <p class="subtitle">Register as a tenant to manage your residence.</p>

            @if(session('success'))
                <div class="alert-success-custom">
                    <i class="bi bi-check-circle-fill"></i>
                    {{ session('success') }}
                </div>
            @endif

            @if(session('viewing_name') || session('viewing_unit_id'))
                <div class="alert-prefill">
                    <i class="bi bi-info-circle-fill flex-shrink-0 mt-1"></i>
                    <span>Your viewing request details have been <strong>pre-filled</strong> below. Just add a password to complete registration.</span>
                </div>
            @endif

            <form action="{{ route('tenant.register.post') }}" method="POST">
                @csrf
                <input type="hidden" name="unit_id" value="{{ session('viewing_unit_id') }}">

                <div class="row g-3">
                    <div class="col-12">
                        <label class="form-label">FULL NAME</label>
                        <div class="position-relative {{ session('viewing_name') ? 'pre-filled-badge' : '' }}">
                            <input type="text" name="name"
                                class="form-control @error('name') is-invalid @enderror"
                                placeholder="Your full name"
                                value="{{ old('name', session('viewing_name')) }}" required>
                        </div>
                        @error('name')
                            <div class="text-danger" style="font-size:0.75rem;margin-top:4px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label class="form-label">PHONE NUMBER</label>
                        <div class="position-relative {{ session('viewing_phone') ? 'pre-filled-badge' : '' }}">
                            <input type="tel" name="phone"
                                class="form-control @error('phone') is-invalid @enderror"
                                placeholder="+880 1XXXXXXXXX"
                                value="{{ old('phone', session('viewing_phone')) }}">
                        </div>
                        @error('phone')
                            <div class="text-danger" style="font-size:0.75rem;margin-top:4px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label class="form-label">EMAIL ADDRESS</label>
                        <input type="email" name="email"
                            class="form-control @error('email') is-invalid @enderror"
                            placeholder="name@example.com"
                            value="{{ old('email') }}" required>
                        @error('email')
                            <div class="text-danger" style="font-size:0.75rem;margin-top:4px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">PASSWORD</label>
                        <input type="password" name="password"
                            class="form-control @error('password') is-invalid @enderror"
                            placeholder="Min. 6 characters" required>
                        @error('password')
                            <div class="text-danger" style="font-size:0.75rem;margin-top:4px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">CONFIRM PASSWORD</label>
                        <input type="password" name="password_confirmation"
                            class="form-control"
                            placeholder="Repeat password" required>
                    </div>

                    <div class="col-12 mt-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="termsCheck" required>
                            <label class="form-check-label" for="termsCheck" style="font-size:0.82rem;color:#6b7280;">
                                I agree to the <a href="{{ route('terms-conditions') }}" target="_blank" class="text-decoration-none fw-semibold" style="color:#1e3a5f;">Terms & Conditions</a>
                            </label>
                        </div>
                    </div>

                    <div class="col-12 mt-1">
                        <button type="submit" class="btn-signup">
                            <i class="bi bi-person-check me-2"></i>Create Tenant Account
                        </button>
                    </div>
                </div>
            </form>

            <div class="divider">OR</div>

            <a href="{{ route('user.google.login') }}" class="btn-google">
                <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/3840px-Google_%22G%22_logo.svg.png" alt="Google">
                Continue with Google
            </a>

            <p class="text-center mt-4" style="font-size:0.85rem;color:#9ca3af;">
                Already have an account?
                <a href="{{ route('tenant.login') }}" class="fw-semibold text-decoration-none" style="color:#1e3a5f;">Sign In</a>
            </p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>