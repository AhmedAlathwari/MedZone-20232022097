<!DOCTYPE html>
<html>

<head>
    <title>MedZone Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        .login-section {
            min-height: 720px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            width: 420px;
            text-align: center;
        }

        .brand {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
        }

        .brand-icon {
            width: 44px;
            height: 44px;
            background: #0f9d6c;
            color: white;
            border-radius: 10px;
            font-size: 32px;
            line-height: 44px;
            text-align: center;
        }

        .brand h1 {
            margin: 0;
            color: #0f172a;
            font-size: 28px;
        }

        .login-box h2 {
            margin: 10px 0;
            color: #0f172a;
        }

        .login-box p {
            color: #475569;
            margin-bottom: 30px;
        }

        .login-card {
            background: white;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 18px 45px rgba(15, 23, 42, 0.12);
            text-align: left;
        }

        .form-group {
            margin-bottom: 22px;
        }

        label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            color: #0f172a;
            font-size: 14px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            box-sizing: border-box;
            padding: 14px;
            border: 1px solid #cbd5e1;
            border-radius: 10px;
            font-size: 15px;
        }

        .remember-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 22px;
            font-size: 14px;
        }

        .remember-row a {
            color: #0f9d6c;
            text-decoration: none;
            font-weight: 600;
        }

        .login-btn {
            width: 100%;
            border: none;
            background: #0f9d6c;
            color: white;
            padding: 15px;
            border-radius: 10px;
            font-weight: 700;
            font-size: 16px;
            cursor: pointer;
        }

        .login-btn:hover {
            background: #087a53;
        }

        .register-link {
            margin-top: 25px;
            text-align: center;
            color: #334155;
            font-size: 14px;
        }

        .register-link a {
            color: #0f9d6c;
            font-weight: 700;
            text-decoration: none;
        }

        .secure-text {
            margin-top: 25px;
            text-align: center;
            color: #64748b;
            font-size: 13px;
        }
    </style>
</head>

<body>

    @include('home.header')

    <section class="login-section">
        <div class="login-box">

            <div class="brand">
                <div class="brand-icon">+</div>
                <h1>MedZone</h1>
            </div>

            <h2>Welcome Back</h2>
            <p>Sign in to your account to continue</p>

            <div class="login-card">

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <label>Email Address</label>
                        <input
                            type="email"
                            name="email"
                            placeholder="Enter your email"
                            value="{{ old('email') }}"
                            required
                            autofocus>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input
                            type="password"
                            name="password"
                            placeholder="Enter your password"
                            required>
                    </div>

                    <div class="remember-row">
                        <label>
                            <input type="checkbox" name="remember">
                            Remember me
                        </label>

                        <a href="{{ route('password.request') }}">
                            Forgot password?
                        </a>
                    </div>

                    <button class="login-btn" type="submit">
                        Sign In
                    </button>

                </form>

            </div>

            <div class="register-link">
                Don't have an account?
                <a href="{{ route('register') }}">Create Account</a>
            </div>

            <div class="secure-text">
                Secure login with SSL encryption
            </div>

        </div>
    </section>

    @include('home.footer')

</body>

</html>