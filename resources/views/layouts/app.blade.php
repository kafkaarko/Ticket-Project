<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Secure Ticketing') - SMK Wikrama Bogor</title>

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
            padding: 0.75rem 0;
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

        .navbar-toggler {
            border: 1px solid var(--border-color);
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        .dropdown-menu {
            border: 1px solid var(--border-color);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            border-radius: 8px;
            padding: 0.5rem;
            margin-top: 0.5rem;
        }

        .dropdown-item {
            border-radius: 4px;
            padding: 0.5rem 0.75rem;
            font-size: 14px;
            color: var(--text-primary);
            transition: background-color 0.15s ease;
        }

        .dropdown-item:hover {
            background-color: var(--hover-bg);
            color: var(--text-primary);
        }

        .dropdown-item.text-danger {
            color: #dc2626 !important;
        }

        .dropdown-item.text-danger:hover {
            background-color: #fef2f2;
        }

        .dropdown-item.text-success {
            color: #16a34a !important;
        }

        .dropdown-item.text-success:hover {
            background-color: #f0fdf4;
        }

        .dropdown-divider {
            margin: 0.5rem 0;
            border-color: var(--border-color);
        }

        .dropdown-header {
            padding: 0.5rem 0.75rem;
            font-size: 12px;
            font-weight: 600;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.05em;
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

        .btn-sm {
            padding: 0.375rem 0.75rem;
            font-size: 13px;
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
            border-color: var(--border-color);
            color: var(--text-primary);
        }

        .btn-outline-secondary {
            color: var(--text-secondary);
            border-color: var(--border-color);
            background-color: transparent;
        }

        .btn-outline-secondary:hover {
            background-color: var(--hover-bg);
            color: var(--text-primary);
            border-color: var(--border-color);
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
            background-color: transparent;
        }

        .btn-outline-danger:hover {
            background-color: #fee;
            border-color: #dc2626;
            color: #dc2626;
        }

        .btn-success {
            background-color: #16a34a;
            border-color: #16a34a;
        }

        .btn-success:hover {
            background-color: #15803d;
            border-color: #15803d;
        }

        .btn-info {
            background-color: #0891b2;
            border-color: #0891b2;
        }

        .btn-info:hover {
            background-color: #0e7490;
            border-color: #0e7490;
        }

        .btn-warning {
            background-color: #f59e0b;
            border-color: #f59e0b;
            color: #000;
        }

        .btn-warning:hover {
            background-color: #d97706;
            border-color: #d97706;
            color: #000;
        }

        .btn-close {
            filter: invert(1);
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

        .alert-warning {
            background-color: #fef3c7;
            border-color: #fde68a;
            color: #92400e;
        }

        /* Badges */
        .badge {
            font-weight: 500;
            font-size: 11px;
            padding: 0.35rem 0.65rem;
            border-radius: 4px;
            letter-spacing: 0.01em;
        }

        .badge.bg-warning {
            background-color: #fef3c7 !important;
            color: #92400e !important;
            border: 1px solid #fde68a;
        }

        .badge.bg-info {
            background-color: #dbeafe !important;
            color: #1e40af !important;
            border: 1px solid #bfdbfe;
        }

        .badge.bg-success {
            background-color: #dcfce7 !important;
            color: #166534 !important;
            border: 1px solid #bbf7d0;
        }

        .badge.bg-secondary {
            background-color: #f5f5f5 !important;
            color: #525252 !important;
            border: 1px solid #e5e5e5;
        }

        .badge.bg-danger {
            background-color: #fee2e2 !important;
            color: #991b1b !important;
            border: 1px solid #fecaca;
        }

        .badge.bg-primary {
            background-color: #000000 !important;
            color: #ffffff !important;
        }

        /* Typography */
        h1, h2, h3, h4, h5, h6 {
            font-weight: 600;
            letter-spacing: -0.02em;
            color: var(--text-primary);
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

        /* Code Blocks */
        pre {
            background-color: var(--bg-secondary);
            border: 1px solid var(--border-color);
            border-radius: 6px;
            padding: 1rem;
            overflow-x: auto;
        }

        pre code {
            font-size: 0.85rem;
            color: var(--text-primary);
            font-family: 'Courier New', monospace;
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

        /* Ticket Specific Styles */
        .ticket-item {
            padding: 1.25rem;
            border-bottom: 1px solid var(--border-color);
            transition: background-color 0.15s ease;
        }

        .ticket-item:hover {
            background-color: var(--bg-secondary);
        }

        .ticket-item:last-child {
            border-bottom: none;
        }

        /* Empty State */
        .empty-state {
            padding: 4rem 2rem;
            text-align: center;
        }

        .empty-state i {
            font-size: 64px;
            color: var(--text-muted);
            margin-bottom: 1rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 14px;
            }

            .nav-link {
                font-size: 13px;
            }

            .card-body {
                padding: 1rem;
            }

            .btn {
                font-size: 13px;
                padding: 0.45rem 0.875rem;
            }
        }
    </style>

    {{-- Stack untuk CSS tambahan per halaman --}}
    @stack('styles')
</head>
<body>
    {{-- ============================================ --}}
    {{-- NAVIGATION --}}
    {{-- ============================================ --}}
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="bi bi-shield-lock"></i> Secure Ticketing
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    {{-- Tickets --}}
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('tickets.*') ? 'active' : '' }}"
                           href="{{ route('tickets.index') }}">
                            <i class="bi bi-ticket-detailed"></i> Tickets
                        </a>
                    </li>

                    {{-- Demo Blade (Hari 4) --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->routeIs('demo-blade.*') ? 'active' : '' }}"
                           href="#" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-code-slash"></i> Demo Blade
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('demo-blade.index') }}">
                                <i class="bi bi-house"></i> Overview
                            </a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('demo-blade.directives') }}">
                                <i class="bi bi-signpost-split"></i> Directives
                            </a></li>
                            <li><a class="dropdown-item" href="{{ route('demo-blade.components') }}">
                                <i class="bi bi-puzzle"></i> Components
                            </a></li>
                            <li><a class="dropdown-item" href="{{ route('demo-blade.includes') }}">
                                <i class="bi bi-box-arrow-in-right"></i> Include & Each
                            </a></li>
                            <li><a class="dropdown-item" href="{{ route('demo-blade.stacks') }}">
                                <i class="bi bi-stack"></i> Stacks & Push
                            </a></li>
                        </ul>
                    </li>

                    {{-- XSS Lab (Hari 4) --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->routeIs('xss-lab.*') ? 'active' : '' }}"
                           href="#" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-shield-exclamation"></i> XSS Lab
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('xss-lab.index') }}">
                                <i class="bi bi-house"></i> Overview
                            </a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li class="dropdown-header">Reflected XSS</li>
                            <li><a class="dropdown-item text-danger" href="{{ route('xss-lab.reflected.vulnerable') }}">
                                <i class="bi bi-unlock"></i> Vulnerable
                            </a></li>
                            <li><a class="dropdown-item text-success" href="{{ route('xss-lab.reflected.secure') }}">
                                <i class="bi bi-lock"></i> Secure
                            </a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li class="dropdown-header">Stored XSS</li>
                            <li><a class="dropdown-item text-danger" href="{{ route('xss-lab.stored.vulnerable') }}">
                                <i class="bi bi-unlock"></i> Vulnerable
                            </a></li>
                            <li><a class="dropdown-item text-success" href="{{ route('xss-lab.stored.secure') }}">
                                <i class="bi bi-lock"></i> Secure
                            </a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li class="dropdown-header">DOM-Based XSS</li>
                            <li><a class="dropdown-item text-danger" href="{{ route('xss-lab.dom.vulnerable') }}">
                                <i class="bi bi-unlock"></i> Vulnerable
                            </a></li>
                            <li><a class="dropdown-item text-success" href="{{ route('xss-lab.dom.secure') }}">
                                <i class="bi bi-lock"></i> Secure
                            </a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                           data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle"></i> User Demo
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">
                                <i class="bi bi-person"></i> Profile
                            </a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">
                                <i class="bi bi-box-arrow-right"></i> Logout
                            </a></li>
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
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-triangle"></i> {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- Validation Errors --}}
        @if($errors->any())
            <div class="alert alert-danger">
                <i class="bi bi-exclamation-triangle"></i> <strong>Terjadi kesalahan:</strong>
                <ul class="mb-0 mt-2">
                    @foreach($errors->all() as $error)
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

    {{-- Stack untuk JavaScript tambahan per halaman --}}
    @stack('scripts')
</body>
</html>
