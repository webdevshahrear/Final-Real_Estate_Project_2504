<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        /* Shared alignment styles */
        body {
            background-color: #f4f7f6;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 20px 0;
            /* Added padding to prevent cutting off on short screens */
        }

        /* Slightly wider card for the registration form */
        .register-card {
            max-width: 450px;
            width: 100%;
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            background-color: #ffffff;
        }

        /* Consistent Google button styling */
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

        /* Consistent 'OR' divider */
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

    <div class="register-card">
        <h3 class="text-center mb-4 fw-bold">Create an Account</h3>

        <form>
            <div class="mb-3">
                <label for="nameInput" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="nameInput" placeholder="John Doe" required>
            </div>

            <div class="mb-3">
                <label for="emailInput" class="form-label">Email address</label>
                <input type="email" class="form-control" id="emailInput" placeholder="name@example.com" required>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="passwordInput" class="form-label">Password</label>
                    <input type="password" class="form-control" id="passwordInput" placeholder="Create password"
                        required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="confirmPasswordInput" class="form-label">Confirm</label>
                    <input type="password" class="form-control" id="confirmPasswordInput" placeholder="Repeat password"
                        required>
                </div>
            </div>

            <div class="mb-4 form-check">
                <input type="checkbox" class="form-check-input" id="termsCheck" required>
                <label class="form-check-label small" for="termsCheck">
                    I agree to the <a href="#" class="text-decoration-none">Terms & Conditions</a>
                </label>
            </div>

            <button type="submit" class="btn btn-primary w-100 mb-3">Sign Up</button>
        </form>

        <div class="divider mb-3">
            <span class="mx-3">OR</span>
        </div>

        <button class="btn btn-google w-100 d-flex align-items-center">
            <img width="30"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/3840px-Google_%22G%22_logo.svg.png"
                alt=""> Continue with Google
        </button>

        <div class="text-center mt-4">
            <p class="mb-0 small">Already have an account? <a href="index.html"
                    class="text-decoration-none fw-semibold">Log in</a></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>