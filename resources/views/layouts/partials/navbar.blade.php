<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name', 'OGP Dashboard') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navDashboards" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dashboards</a>
                    <ul class="dropdown-menu" aria-labelledby="navDashboards">
                        <li><a class="dropdown-item" href="{{ route('default') }}">Default</a></li>
                        <li><a class="dropdown-item" href="{{ route('ecommerce') }}">eCommerce</a></li>
                        <li><a class="dropdown-item" href="{{ route('crypto') }}">Crypto</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navApps" role="button" data-bs-toggle="dropdown" aria-expanded="false">Apps</a>
                    <ul class="dropdown-menu" aria-labelledby="navApps">
                        <li><a class="dropdown-item" href="{{ route('blog') }}">Blog</a></li>
                        <li><a class="dropdown-item" href="{{ route('list-products') }}">Products</a></li>
                        <li><a class="dropdown-item" href="{{ route('invoice-template') }}">Invoice</a></li>
                        <li><a class="dropdown-item" href="{{ route('chat') }}">Chat</a></li>
                        <li><a class="dropdown-item" href="{{ route('calendar') }}">Calendar</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navUI" role="button" data-bs-toggle="dropdown" aria-expanded="false">UI</a>
                    <ul class="dropdown-menu" aria-labelledby="navUI">
                        <li><a class="dropdown-item" href="{{ route('chart-apex') }}">Charts</a></li>
                        <li><a class="dropdown-item" href="{{ route('form-validation') }}">Forms</a></li>
                        <li><a class="dropdown-item" href="{{ route('feather-icon') }}">Icons</a></li>
                        <li><a class="dropdown-item" href="{{ route('bootstrap-basic-table') }}">Tables</a></li>
                    </ul>
                </li>
            </ul>
            <div class="d-flex align-items-center gap-2">
                <div class="dropdown me-2">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Theme
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#" data-toggle-theme>Toggle Light/Dark</a></li>
                    </ul>
                </div>
                <a class="btn btn-primary" href="{{ route('home') }}">Home</a>
            </div>
        </div>
    </div>
    @push('styles')
    <style>
        .navbar .dropdown-menu { min-width: 14rem; }
    </style>
    @endpush
</nav>
