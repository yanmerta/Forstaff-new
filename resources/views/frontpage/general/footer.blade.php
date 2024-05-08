<footer id="footer">
    <div class="container">
        <div class="footer-nner wow pixFadeUp">
            <a href="{{ route('frontpage.beranda') }}" class="logo">
                <img src="https://www.forstaff.id/assets/assets/img/sticky-logo-forstaff.png" alt="Forstaff Logo"
                    title="Forstaff Logo" class="sticky-logo" width="150" height="53" />
            </a>
            <div class="row margin-top30">
                <div class="col-lg-4 col-md-6">
                    <div class="widget footer-widget">
                        <h3 class="widget-title">{{ $footer->title }}</h3>
                        <div class="info">
                            <strong>{{ $footer->nama_perusahaan }}</strong>
                        </div>
                        <div class="info">
                            <i class="ei ei-icon_map"></i>
                            <span>{{ $footer->alamat }}</span>
                        </div>
                        <div class="info phone">
                            <i class="ei ei-icon_phone"></i> <span>{{ $footer->nomer_telepon }}</span>
                        </div>
                        <div class="info email">
                            <i class="ei ei-icon_mail_alt"></i>
                            <span>{{ $footer->email }}</span>
                        </div>
                        <div class="info">
                            <i class="ei ei-info"></i> <span>{{ $footer->jam_kerja }}</span>
                        </div>
                        <ul class="footer-social-link margin-top30">
                            <li>
                                <a href="{{ $footer->link_fb }}" title="Forstaff Apps" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="{{ $footer->link_twitter }}" title="Forstaff Apps" target="_blank"><i
                                        class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="{{ $footer->link_instagram }}" title="Forstaff Apps" target="_blank"><i
                                        class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="{{ $footer->link_link }}" title="Forstaff Apps" target="_blank"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget footer-widget">
                        <h3 class="widget-title">{{ $footer_informasi->title }}</h3>
                        <ul class="footer-menu">
                            <li>
                                <a class="" href="{{ route('frontpage.faq') }}">{{ $footer_informasi->faq }}</a>
                            </li>
                            <li>
                                <a class=""
                                    href="{{ route('frontpage.kontak') }}">{{ $footer_informasi->kontak_kami }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="widget footer-widget">
                        <h3 class="widget-title">{{ $footer_kebijakan->title }}</h3>
                        <ul class="footer-menu">
                            <li>
                                <a class=""
                                    href="{{ route('frontpage.syarat') }}">{{ $footer_kebijakan->kebijakan }}</a>
                            </li>
                            <li>
                                <a class=""
                                    href="{{ route('frontpage.kebijakan') }}">{{ $footer_kebijakan->syarat }}</a>
                            </li>
                        </ul>
                        <img src="{{ asset('/storage/public/' . $footer_kebijakan->icon_app1) }}"
                            alt="Desktop dan mobile view" title="Desktop dan mobile view" class="padding-store-3"
                            width="140" height="44" />
                        <img src="{{ asset('/storage/public/' . $footer_kebijakan->icon_app2) }}"
                            alt="Desktop dan mobile view" title="Desktop dan mobile view" class="padding-store-3"
                            width="140" height="44" />
                    </div>
                </div>
            </div>
        </div>
        <div class="site-info wow pixFadeUp" data-wow-delay="0.3s">
            <div class="copyright">
                <p>
                    © 2019 All Rights Reserved Design by
                    <a href="#" target="_blank">Red System</a> -
                    PT. Guna Teknologi Nusantara
                </p>
            </div>
        </div>
    </div>
</footer>
