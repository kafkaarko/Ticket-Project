<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Secure Ticketing') </title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Inter Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg-primary: #ffffff;
            --bg-secondary: #fafafa;
            --border-color: #e5e5e5;
            --text-primary: #000000;
            --text-secondary: #666666;
            --text-muted: #999999;
            --accent-color: #000000;
            --hover-bg: #f5f5f5;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background-color: var(--bg-primary);
            color: var(--text-primary);
            font-size: 14px;
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        /* Navigation */
        .navbar {
            background-color: var(--bg-primary) !important;
            border-bottom: 1px solid var(--border-color);
            padding: 1rem 0;
            box-shadow: none;
        }

        .navbar-brand {
            font-weight: 600;
            color: var(--text-primary) !important;
            font-size: 15px;
            letter-spacing: -0.01em;
        }

        .navbar-brand i {
            font-size: 16px;
        }

        .nav-link {
            color: var(--text-secondary) !important;
            font-weight: 500;
            font-size: 14px;
            padding: 0.5rem 1rem !important;
            transition: color 0.2s ease;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--text-primary) !important;
        }

        .dropdown-menu {
            border: 1px solid var(--border-color);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            border-radius: 8px;
            padding: 0.5rem;
        }

        .dropdown-item {
            border-radius: 4px;
            padding: 0.5rem 0.75rem;
            font-size: 14px;
            color: var(--text-primary);
        }

        .dropdown-item:hover {
            background-color: var(--hover-bg);
        }

        .dropdown-divider {
            margin: 0.5rem 0;
            border-color: var(--border-color);
        }

        /* Cards */
        .card {
            border: 1px solid var(--border-color);
            border-radius: 8px;
            box-shadow: none;
            background-color: var(--bg-primary);
            margin-bottom: 1.5rem;
        }

        .card-header {
            background-color: var(--bg-primary);
            border-bottom: 1px solid var(--border-color);
            padding: 1rem 1.25rem;
            font-weight: 600;
            font-size: 14px;
        }

        .card-body {
            padding: 1.5rem;
        }

        /* Buttons */
        .btn {
            font-weight: 500;
            font-size: 14px;
            border-radius: 6px;
            padding: 0.5rem 1rem;
            transition: all 0.2s ease;
            border: 1px solid transparent;
        }

        .btn-primary {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
            color: #ffffff;
        }

        .btn-primary:hover {
            background-color: #333333;
            border-color: #333333;
        }

        .btn-outline-primary {
            color: var(--text-primary);
            border-color: var(--border-color);
            background-color: transparent;
        }

        .btn-outline-primary:hover {
            background-color: var(--hover-bg);
            border-color: var(--text-primary);
            color: var(--text-primary);
        }

        .btn-secondary {
            background-color: #f5f5f5;
            border-color: var(--border-color);
            color: var(--text-primary);
        }

        .btn-secondary:hover {
            background-color: #e5e5e5;
        }

        .btn-outline-secondary {
            color: var(--text-secondary);
            border-color: var(--border-color);
        }

        .btn-outline-secondary:hover {
            background-color: var(--hover-bg);
            color: var(--text-primary);
        }

        .btn-danger {
            background-color: #dc2626;
            border-color: #dc2626;
        }

        .btn-danger:hover {
            background-color: #b91c1c;
            border-color: #b91c1c;
        }

        .btn-outline-danger {
            color: #dc2626;
            border-color: var(--border-color);
        }

        .btn-outline-danger:hover {
            background-color: #fee;
            border-color: #dc2626;
        }

        /* Forms */
        .form-label {
            font-weight: 500;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
            font-size: 14px;
        }

        .form-control,
        .form-select {
            border: 1px solid var(--border-color);
            border-radius: 6px;
            padding: 0.625rem 0.875rem;
            font-size: 14px;
            transition: all 0.2s ease;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--text-primary);
            box-shadow: 0 0 0 3px rgba(0, 0, 0, 0.05);
        }

        .form-text {
            color: var(--text-muted);
            font-size: 12px;
            margin-top: 0.25rem;
        }

        .is-invalid {
            border-color: #dc2626 !important;
        }

        .invalid-feedback {
            color: #dc2626;
            font-size: 12px;
        }

        /* Alerts */
        .alert {
            border-radius: 6px;
            border: 1px solid;
            font-size: 14px;
            padding: 1rem;
        }

        .alert-success {
            background-color: #f0fdf4;
            border-color: #86efac;
            color: #15803d;
        }

        .alert-danger {
            background-color: #fef2f2;
            border-color: #fca5a5;
            color: #991b1b;
        }

        .alert-info {
            background-color: #eff6ff;
            border-color: #93c5fd;
            color: #1e40af;
        }

        /* Badges */
        .badge {
            font-weight: 500;
            font-size: 11px;
            padding: 0.35rem 0.65rem;
            border-radius: 4px;
            letter-spacing: 0.01em;
        }

        /* Typography */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: 600;
            letter-spacing: -0.02em;
        }

        .h3 {
            font-size: 24px;
        }

        a {
            color: var(--text-primary);
            text-decoration: none;
        }

        a:hover {
            color: var(--text-primary);
        }

        .text-muted {
            color: var(--text-muted) !important;
        }

        /* Footer */
        .footer {
            background-color: var(--bg-primary);
            border-top: 1px solid var(--border-color);
            color: var(--text-secondary);
            padding: 3rem 0 2rem;
            margin-top: 4rem;
            font-size: 13px;
        }

        /* Main Container */
        main.container {
            max-width: 1200px;
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        /* Utilities */
        .border-bottom {
            border-bottom: 1px solid var(--border-color) !important;
        }

        .bg-light {
            background-color: var(--bg-secondary) !important;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--bg-secondary);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--border-color);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--text-muted);
        }
    </style>

    @stack('styles')
</head>

<body>
    {{-- ============================================ --}}
    {{-- NAVIGATION --}}
    {{-- ============================================ --}}
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/tickets') }}">
                <i class="bi bi-shield-lock"></i> Secure Ticketing
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('tickets.*') ? 'active' : '' }}"
                            href="{{ route('tickets.index') }}">
                            Tickets
                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            {{ Auth::user()->name ?? 'Guest' }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- ============================================ --}}
    {{-- MAIN CONTENT --}}
    {{-- ============================================ --}}
    <main class="container py-4">
        {{-- Flash Messages --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- Validation Errors --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Terjadi kesalahan:</strong>
                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Page Content --}}
        @yield('content')
    </main>

    {{-- ============================================ --}}
    {{-- FOOTER --}}
    {{-- ============================================ --}}
    <footer class="footer">
        <div class="container text-center">
            <p class="mb-1">
                <strong>Secure Ticketing System</strong>
            </p>
            <p class="mb-0">
                &copy; {{ date('Y') }} Bootcamp Secure Coding - SMK Wikrama Bogor
            </p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')
</body>

</html>
