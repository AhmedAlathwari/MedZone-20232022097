<!DOCTYPE html>
<html>

<head>
    <title>MedZone Admin Login</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            min-height: 100vh;
            display: flex;
        }

        .admin-login-left {
            width: 38%;
            background: #343a40;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
        }

        .admin-brand {
            max-width: 360px;
        }

        .admin-brand h1 {
            font-size: 36px;
            margin-bottom: 15px;
        }

        .admin-brand p {
            color: #d1d5db;
            line-height: 1.7;
            font-size: 15px;
        }

        .admin-login-right {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
        }

        .login-card {
            width: 420px;
            background: white;
            padding: 35px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .login-card h2 {
            margin: 0 0 8px;
            color: #111827;
            font-size: 28px;
        }

        .login-card p {
            margin: 0 0 25px;
            color: #6b7280;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            margin-bottom: 7px;
            color: #374151;
            font-weight: bold;
            font-size: 14px;
        }

        .form-group input {
            width: 100%;
            box-sizing: border-box;
            padding: 12px 14px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            font-size: 14px;
        }

        .form-group input:focus {
            outline: none;
            border-color: #6c757d;
        }

        .login-btn {
            width: 100%;
            border: none;
            background: #343a40;
            color: white;
            padding: 13px;
            border-radius: 6px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
        }

        .login-btn:hover {
            background: #23272b;
        }

        .back-link {
            display: block;
            margin-top: 18px;
            text-align: center;
            color: #6b7280;
            text-decoration: none;
            font-size: 14px;
        }

        .back-link:hover {
            color: #343a40;
        }

        @media (max-width: 768px) {
            body {
                flex-direction: column;
            }

            .admin-login-left {
                width: auto;
                padding: 30px 20px;
            }

            .admin-login-right {
                padding: 30px 20px;
            }

            .login-card {
                width: 100%;
                max-width: 420px;
            }
        }
    </style>
</head>

<body>

    <div class="admin-login-left">
        <div class="admin-brand">
            <h1>MedZone Admin</h1>
            <p>
                Pharmacy store management panel for products, categories,
                orders, reviews, users, and website settings.
            </p>
        </div>
    </div>

    <div class="admin-login-right">

        <div class="login-card">

            <h2>Admin Login</h2>

            <p>
                Sign in to continue to the dashboard.
            </p>

            <form action="{{ route('adminlogincheck') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label>Email</label>
                    <input
                        type="email"
                        name="email"
                        placeholder="Enter admin email"
                        required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input
                        type="password"
                        name="password"
                        placeholder="Enter admin password"
                        required>
                </div>

                <button type="submit" class="login-btn">
                    Login
                </button>

            </form>

            <a href="/home" class="back-link">
                Back to Website
            </a>

        </div>

    </div>

</body>

</html>