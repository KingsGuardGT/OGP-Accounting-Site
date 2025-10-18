<header class="border-bottom bg-white">
    <div class="container-fluid py-3">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h1 class="h4 m-0">@yield('page-title', 'Dashboard')</h1>
                <p class="text-muted m-0">@yield('page-subtitle', 'Overview and quick actions')</p>
            </div>
            <div class="d-flex gap-2">
                @yield('page-actions')
            </div>
        </div>
    </div>
</header>
