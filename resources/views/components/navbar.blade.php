{{--
    Komponen Navbar (user/guest)
    Menu: Beranda - Jasa Joki - Cek Transaksi - Pencarian - Profil
    Versi mobile (hamburger) memakai komponen terpisah: components/hamburger-menu.blade.php
    Tahap ini baru struktur HTML semantik, styling menyusul di Fase 2.
--}}
<nav class="site-navbar">
    <div class="site-navbar__brand">
        <a href="{{ route('beranda') }}">Six Seven Store</a>
    </div>

    <ul class="site-navbar__menu">
        <li><a href="{{ route('beranda') }}">Beranda</a></li>
        <li><a href="{{ route('jasa-joki.index') }}">Jasa Joki</a></li>
        <li><a href="{{ route('transaksi.cek') }}">Cek Transaksi</a></li>
        <li><a href="{{ route('pencarian') }}">Pencarian</a></li>
        <li><a href="{{ route('profil.index') }}">Profil</a></li>
    </ul>

    {{-- Tombol hamburger untuk mobile, komponennya di-include terpisah --}}
    <button type="button" class="site-navbar__hamburger" aria-label="Buka menu">
        &#9776;
    </button>

    @include('components.hamburger-menu')
</nav>
