<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenant Sign In — The Imperial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #0a192f 0%, #1e3a5f 60%, #0d2d5e 100%);
            display: flex; align-items: center; justify-content: center;
            padding: 2rem 1rem;
        }
        .auth-wrapper {
            display: flex; width: 100%; max-width: 900px;
            border-radius: 28px; overflow: hidden;
            box-shadow: 0 40px 80px rgba(0,0,0,0.4);
        }
        .auth-left {
            flex: 1;
            background: linear-gradient(160deg, #0f2b4c 0%, #1a4080 100%);
            padding: 3rem 2.5rem;
            display: flex; flex-direction: column; justify-content: space-between;
            position: relative; overflow: hidden;
        }
        .auth-left::before {
            content: ''; position: absolute;
            width: 350px; height: 350px;
            background: radial-gradient(circle, rgba(43,123,232,0.25), transparent 70%);
            top: -100px; right: -100px; border-radius: 50%;
        }
        .auth-left .brand {
            display: flex; align-items: center; gap: 10px;
            color: #fff; font-size: 1.1rem; font-weight: 700;
            text-decoration: none; z-index: 1; position: relative;
        }
        .auth-left .left-content { position: relative; z-index: 1; }
        .auth-left h2 {
            color: #fff; font-size: 1.9rem; font-weight: 800;
            letter-spacing: -0.03em; margin-bottom: 1rem;
        }
        .auth-left p.sub { color: rgba(255,255,255,0.6); font-size: 0.88rem; line-height: 1.7; margin-bottom: 2rem; }
        .step-badge {
            display: inline-flex; align-items: center; gap: 8px;
            background: rgba(43,123,232,0.2); border: 1px solid rgba(43,123,232,0.4);
            color: #93c5fd; font-size: 0.72rem; font-weight: 700;
            padding: 0.4em 1em; border-radius: 100px; letter-spacing: 0.05em;
            margin-bottom: 1.5rem;
        }
        .feature-item {
            display: flex; align-items: center; gap: 12px;
            color: rgba(255,255,255,0.8); font-size: 0.85rem; margin-bottom: 0.8rem;
        }
        .feature-item i {
            width: 32px; height: 32px; background: rgba(255,255,255,0.08);
            border-radius: 8px; display: flex; align-items: center; justify-content: center;
            font-size: 1rem; flex-shrink: 0; color: #60a5fa;
        }
        .auth-right {
            flex: 1; background: #fff; padding: 3rem 2.5rem;
            display: flex; flex-direction: column; justify-content: center;
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
        .form-control:focus { border-color: #1e3a5f; box-shadow: 0 0 0 3px rgba(30,58,95,0.08); }
        .form-control.is-invalid { border-color: #dc2626; }
        .btn-signin {
            background: #1e3a5f; color: #fff; border: none;
            border-radius: 12px; padding: 0.85rem 1.5rem;
            font-size: 0.95rem; font-weight: 700; width: 100%;
            transition: all 0.25s ease; cursor: pointer;
        }
        .btn-signin:hover { background: #2b7be8; transform: translateY(-2px); box-shadow: 0 8px 24px rgba(30,58,95,0.25); }
        .divider {
            display: flex; align-items: center; gap: 12px;
            color: #d1d5db; font-size: 0.75rem; margin: 1.2rem 0;
        }
        .divider::before, .divider::after { content: ''; flex: 1; height: 1px; background: #e5e7eb; }
        .btn-google {
            background: #fff; color: #374151; border: 1.5px solid #e5e7eb;
            border-radius: 12px; padding: 0.7rem; font-size: 0.875rem;
            font-weight: 600; width: 100%; display: flex; align-items: center;
            justify-content: center; gap: 10px; transition: all 0.2s ease;
            cursor: pointer; text-decoration: none;
        }
        .btn-google:hover { background: #f9fafb; border-color: #d1d5db; color: #374151; }
        .alert-success-box {
            background: #f0fdf4; border: 1px solid #bbf7d0;
            border-radius: 12px; padding: 0.8rem 1rem; font-size: 0.82rem;
            color: #166534; margin-bottom: 1.5rem; display: flex; align-items: center; gap: 8px;
        }
        .alert-error-box {
            background: #fef2f2; border: 1px solid #fecaca;
            border-radius: 12px; padding: 0.8rem 1rem; font-size: 0.82rem;
            color: #991b1b; margin-bottom: 1.5rem; display: flex; align-items: center; gap: 8px;
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
                    <i class="bi bi-2-circle-fill"></i> STEP 2 OF 3 — SIGN IN
                </div>
                <h2>Welcome back,<br>Imperial Resident.</h2>
                <p class="sub">Sign in to your resident portal to track your bills, maintenance requests and more.</p>
                <div class="feature-item">
                    <i class="bi bi-receipt"></i> Monthly billing overview
                </div>
                <div class="feature-item">
                    <i class="bi bi-tools"></i> Maintenance request tracking
                </div>
                <div class="feature-item">
                    <i class="bi bi-megaphone"></i> Building notices & updates
                </div>
                <div class="feature-item">
                    <i class="bi bi-file-earmark-text"></i> Digital documents
                </div>
            </div>
            <p style="color:rgba(255,255,255,0.35); font-size:0.72rem; position:relative; z-index:1;">
                © {{ date('Y') }} The Imperial. All rights reserved.
            </p>
        </div>

        <!-- Right Panel -->
        <div class="auth-right">
            <h3>Resident Sign In</h3>
            <p class="subtitle">Access your Imperial Resident Portal.</p>

            @if(session('success'))
                <div class="alert-success-box">
                    <i class="bi bi-check-circle-fill flex-shrink-0"></i>
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert-error-box">
                    <i class="bi bi-exclamation-circle-fill flex-shrink-0"></i>
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('tenant.login.post') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">EMAIL ADDRESS</label>
                    <input type="email" name="email"
                        class="form-control @error('email') is-invalid @enderror"
                        placeholder="name@example.com"
                        value="{{ old('email') }}" required autofocus>
                </div>
                <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <label class="form-label mb-0">PASSWORD</label>
                        <a href="#" style="font-size:0.75rem; color:#2b7be8; text-decoration:none; font-weight:600;">Forgot password?</a>
                    </div>
                    <input type="password" name="password"
                        class="form-control @error('password') is-invalid @enderror"
                        placeholder="Your password" required>
                </div>
                <div class="mb-4 d-flex align-items-center gap-2">
                    <input type="checkbox" name="remember" id="rememberMe" class="form-check-input" style="width:16px;height:16px;">
                    <label for="rememberMe" style="font-size:0.82rem;color:#6b7280;cursor:pointer;">Remember me for 30 days</label>
                </div>
                <button type="submit" class="btn-signin">
                    <i class="bi bi-box-arrow-in-right me-2"></i>Sign In to Portal
                </button>
            </form>

            <div class="divider">OR</div>

            <a href="{{ route('user.google.login') }}" class="btn-google">
                <img width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/3840px-Google_%22G%22_logo.svg.png" alt="Google">
                Continue with Google
            </a>

            <p class="text-center mt-4" style="font-size:0.85rem;color:#9ca3af;">
                New to Imperial?
                <a href="{{ route('tenant.register') }}" class="fw-semibold text-decoration-none" style="color:#1e3a5f;">Create Account</a>
            </p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>