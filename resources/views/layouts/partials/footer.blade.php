<footer class="mt-auto border-top bg-light">
    <div class="container-fluid py-3">
        <div class="row align-items-center">
            <div class="col-md-6 text-muted">
                <small>
                    &copy; <span id="year"></span> {{ config('app.name', 'OGP Dashboard') }}. All rights reserved.
                </small>
            </div>
            <div class="col-md-6">
                <ul class="nav justify-content-end">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.index') }}">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('apps.blog') }}">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('apps.products') }}">Products</a></li>
                </ul>
            </div>
        </div>
    </div>
    @push('scripts')
    <script>document.getElementById('year').textContent = new Date().getFullYear();</script>
    @endpush
</footer>
