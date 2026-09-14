<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Panel Tim Joki - Six Seven Store')</title>
    @stack('styles')
</head>
<body>
    <div class="joki-layout">
        <aside class="joki-layout__sidebar">
            <ul>
                <li><a href="{{ route('joki.dashboard') }}">Tugas Saya</a></li>
                {{-- Tambahkan menu lain sesuai kebutuhan Fase 3 --}}
            </ul>
        </aside>

        <div class="joki-layout__content">
            <header class="joki-layout__header">
                @yield('header', 'Panel Tim Joki')
            </header>

            <main>
                @yield('content')
            </main>
        </div>
    </div>

    @stack('scripts')
</body>
</html>
