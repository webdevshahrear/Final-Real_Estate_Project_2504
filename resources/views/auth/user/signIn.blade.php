<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        /* Custom CSS to center the form vertically and horizontally */
        body {
            background-color: #f4f7f6;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        /* Styling the login container */
        .login-card {
            max-width: 400px;
            width: 100%;
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            background-color: #ffffff;
        }

        /* Custom styling for the Google button to match its brand guidelines */
        .btn-google {
            background-color: #ffffff;
            color: #5f6368;
            border: 1px solid #dadce0;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            font-weight: 500;
            transition: background-color 0.2s;
        }

        .btn-google:hover {
            background-color: #f8f9fa;
            color: #5f6368;
        }

        /* Styling the 'OR' divider */
        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            color: #adb5bd;
            font-size: 0.875rem;
        }

        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #e9ecef;
        }
    </style>
</head>

<body>

    <div class="login-card">
        <h3 class="text-center mb-4 fw-bold">Welcome Back</h3>

        <form>
            <div class="mb-3">
                <label for="emailInput" class="form-label">Email address</label>
                <input type="email" class="form-control" id="emailInput" placeholder="name@example.com" required>
            </div>

            <div class="mb-3">
                <div class="d-flex justify-content-between">
                    <label for="passwordInput" class="form-label">Password</label>
                    <a href="#" class="text-decoration-none small">Forgot password?</a>
                </div>
                <input type="password" class="form-control" id="passwordInput" placeholder="Enter your password"
                    required>
            </div>

            <div class="mb-4 form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label small" for="rememberMe">Remember me</label>
            </div>

            <button type="submit" class="btn btn-primary w-100 mb-3">Log In</button>
        </form>

        <div class="divider mb-3">
            <span class="mx-3">OR</span>
        </div>

        <a href="{{ route('user.google.login') }}" class="btn btn-google w-100 d-flex align-items-center">
           <img width="30" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/3840px-Google_%22G%22_logo.svg.png" alt=""> Continue with Google
        </a>

        <div class="text-center mt-4">
            <p class="mb-0 small">Don't have an account? <a href="#" class="text-decoration-none fw-semibold">Sign
                    up</a></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>