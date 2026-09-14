{{--
    Komponen Hamburger Menu (mobile)
    Berisi menu yang sama dengan navbar, ditambah keterangan/informasi realtime
    (mis. pengumuman, status layanan). Data realtime disuntikkan lewat variabel
    $infoRealtime dari controller/view composer pada Fase 3.
--}}
<div class="hamburger-menu" hidden>
    <ul class="hamburger-menu__list">
        <li><a href="{{ route('beranda') }}">Beranda</a></li>
        <li><a href="{{ route('jasa-joki.index') }}">Jasa Joki</a></li>
        <li><a href="{{ route('transaksi.cek') }}">Cek Transaksi</a></li>
        <li><a href="{{ route('pencarian') }}">Pencarian</a></li>
        <li><a href="{{ route('profil.index') }}">Profil</a></li>
    </ul>

    <div class="hamburger-menu__info">
        {{-- Placeholder informasi realtime, mis: "Layanan Blox Fruits sedang penuh" --}}
        {{ $infoRealtime ?? 'Informasi realtime akan tampil di sini.' }}
    </div>
</div>
