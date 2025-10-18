<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>@yield('title', config('app.name', 'Dashboard'))</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
    <style>
        /* Minimal helpers for layout structure */
        body { min-height: 100vh; display: flex; flex-direction: column; }
        main { flex: 1 1 auto; }
        .navbar-brand { font-weight: 600; }
        .theme-toggle { cursor: pointer; }
    </style>
</head>
<body class="antialiased" data-theme="light">
    @include('layouts.partials.navbar')

    @include('layouts.partials.header')

    <main class="container-fluid py-3">
        @yield('content')
    </main>

    @include('layouts.partials.footer')

    <script>
        // Simple theme toggle (light/dark) with localStorage persistence
        (function () {
            const key = 'theme';
            const root = document.documentElement;
            const stored = localStorage.getItem(key);
            if (stored === 'dark') {
                document.body.dataset.theme = 'dark';
                root.classList.add('dark');
            }
            document.addEventListener('click', function (e) {
                const t = e.target.closest('[data-toggle-theme]');
                if (!t) return;
                const next = (document.body.dataset.theme === 'dark') ? 'light' : 'dark';
                document.body.dataset.theme = next;
                root.classList.toggle('dark', next === 'dark');
                try { localStorage.setItem(key, next); } catch (_) {}
            });
        })();
    </script>
    @stack('scripts')
</body>
</html>
