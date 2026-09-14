<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel - Six Seven Store')</title>
    @stack('styles')
</head>
<body>
    <div class="admin-layout">
        <aside class="admin-layout__sidebar">
            {{-- Sidebar admin: menu kelola game, layanan, transaksi, tim joki --}}
            <ul>
                <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('admin.transaksi.index') }}">Kelola Transaksi</a></li>
                {{-- Tambahkan menu lain sesuai kebutuhan Fase 3 --}}
            </ul>
        </aside>

        <div class="admin-layout__content">
            <header class="admin-layout__header">
                @yield('header', 'Admin Panel')
            </header>

            <main>
                @yield('content')
            </main>
        </div>
    </div>

    @stack('scripts')
</body>
</html>
