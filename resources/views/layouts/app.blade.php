<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Six Seven Store')</title>

    {{-- Fase 2: @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    @stack('styles')
</head>
<body>
    @include('components.navbar')

    <main class="site-main">
        @yield('content')
    </main>

    @include('components.footer')

    @stack('scripts')
</body>
</html>
