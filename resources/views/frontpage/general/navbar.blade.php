<nav class="site-nav">
    <div class="close-menu">
        <span>Close</span> <i class="ei ei-icon_close"></i>
    </div>
    <div class="site-logo">
        <a href="{{ route('frontpage.beranda') }}" class="logo">
            <img src="https://www.forstaff.id/assets/assets/img/main-logo-forstaff.png" alt="Forstaff Logo"
                title="Forstaff Logo" class="main-logo" width="150" height="48" />
            <img src="https://www.forstaff.id/assets/assets/img/sticky-logo-forstaff.png" alt="Forstaff Logo"
                title="Forstaff Logo" class="sticky-logo" width="150" height="53" />
        </a>
    </div>
    <div class="menu-wrapper" data-top="992">
        <ul class="site-main-menu">
            <li class="{{ $active === 'beranda' ? 'active' : '' }}">
                <a class="{{ $active === 'beranda' ? 'current_page' : '' }}"
                    href="{{ route('frontpage.beranda') }}">Beranda</a>
            </li>
            <li class="{{ $active === 'fitur' ? 'active' : '' }}">
                <a class="{{ $active === 'fitur' ? 'current_page' : '' }}"
                    href="{{ route('frontpage.fitur') }}">Fitur</a>
            </li>
            <li class="{{ $active === 'tentang' ? 'active' : '' }}">
                <a class="{{ $active === 'tentang' ? 'current_page' : '' }}"
                    href="{{ route('frontpage.tentang') }}">Tentang</a>
            </li>
            <li class="{{ $active === 'harga' ? 'active' : '' }}">
                <a class="{{ $active === 'harga' ? 'current_page' : '' }}"
                    href="{{ route('frontpage.harga') }}">Harga</a>
            </li>
            <li class="{{ $active === 'blog' ? 'active' : '' }}">
                <a class="{{ $active === 'blog' ? 'current_page' : '' }}"
                    href="{{ route('frontpage.blog') }}">Blog</a>
            </li>
            <li class="{{ $active === 'kontak' ? 'active' : '' }}">
                <a class="{{ $active === 'kontak' ? 'current_page' : '' }}"
                    href="{{ route('frontpage.kontak') }}">Kontak Kami</a>
            </li>
        </ul>
        <div class="nav-right">
            <a href="#" target="_blank" class="nav-btn">Daftar Sekarang</a>
        </div>
    </div>
</nav>
