@extends('frontpage.general.main')
@section('content')
    <section class="banner banner-one">
        <div class="circle-shape" data-parallax='{"y" : 230}'>
            <img src="https://www.forstaff.id/assets/media/banner/circle-shape.png" alt="circle" width="800"
                height="800" />
        </div>
        <div class="container">
            <div class="banner-content-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <h1 class="banner-title wow pixFadeUp font-banner-title" data-wow-delay="0.3s">
                                <span>{{ $data->home_title }}
                            </h1>
                            <p class="description wow pixFadeUp" data-wow-delay="0.5s">
                                {{ $data->home_description }}
                            </p>
                            <a href="{{ route('frontpage.tentang') }}" class="pxs-btn banner-btn wow pixFadeUp"
                                data-wow-delay="0.6s">{{ $data->button_teks }}</a>
                            <div class="margin-top20" data-wow-delay="0.8s">
                                <img src="{{ asset('/storage/public/' . $data->icon_app1) }}" alt="Desktop dan mobile view"
                                    title="Desktop dan mobile view" class="padding-store-3" width="140" height="44" />
                                <img src="{{ asset('/storage/public/' . $data->icon_app2) }}" alt="Desktop dan mobile view"
                                    title="Desktop dan mobile view" class="padding-store-3" width="140" height="44" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="promo-mockup wow pixFadeLeft">
                            <img src="{{ asset('/storage/public/' . $data->home_image) }}" alt="Desktop dan mobile view"
                                title="Desktop dan mobile view" width="1000" height="539" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-shape">
            <img src="https://www.forstaff.id/assets/media/banner/shape-bg.png" alt="shape-bg" title="shape-bg"
                width="1903" height="495" />
        </div>
    </section>
    <section class="featured">
        <div class="container">
            <div class="section-title text-center wow pixFade">
                <h2 class="title">Kenapa harus Forstaff ?</h2>
            </div>
            <div class="row">
                @foreach ($homeservis as $key => $servis)
                    <div class="col-md-4 padding-left-right-25">
                        <div class="pixsass-icon-box-wrapper style-one wow pixFadeLeft"
                            data-wow-delay="{{ 0.3 + $key * 0.2 }}s">
                            <div class="iapp-icon-box-icon text-center">
                                <img src="{{ asset('/storage/public/' . $servis->servis_image) }}"
                                    alt="{{ $servis->servis_title }}" title="{{ $servis->servis_title }}" width="140"
                                    height="139" />
                            </div>
                            <div class="pixsass-icon-box-content">
                                <h3 class="pixsass-icon-box-title text-center margin-bottom30">
                                    <a href="#">{{ $servis->servis_title }}</a>
                                </h3>
                                <p align="justify">
                                    {{ $servis->servis_description }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <section class="editor-design margin-bottom30">
        <div class="container">
            <div class="row">
                <div class="editure-feature-image wow pixFadeRight">
                    <div class="image-one" data-parallax='{"x" : 30}'>
                        <img src="{{ asset('/storage/public/' . $informasi->image) }}" class="wow pixFadeRight"
                            data-wow-delay="0.3s" alt="Mobile View" title="Mobile View" width="720" height="594" />
                    </div>
                    <div class="image-two">
                        <div class="image-two-inner" data-parallax='{"x" : -30}'>
                            <img src="{{ asset('/storage/public/' . $informasi->image2) }}"
                                class="wow pixFadeLeft margin-bottom15" data-wow-delay="0.5s" alt="Popup Sign In"
                                title="Popup Sign In" width="259" height="203" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-6">
                    <div class="editor-content">
                        <div class="section-title style-two">
                            <h2 class="title wow pixFadeUp" data-wow-delay="0.3s">
                                {{ $informasi->title }}
                            </h2>
                            <p class="wow pixFadeUp" data-wow-delay="0.5s">
                                {{ $informasi->sub_title }}
                            </p>
                        </div>
                        <div class="description wow pixFadeUp" data-wow-delay="0.7s">
                            <p align="justify">
                                {{ $informasi->description }}
                            </p>
                            <a href="https://www.forstaff.id/tentang" class="pix-btn wow pixFadeUp"
                                data-wow-delay="0.9s">{{ $informasi->button_teks }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-bg">
            <img src="https://www.forstaff.id/assets/media/background/shape_bg.png" class="wow fadeInLeft" alt="shape-bg"
                title="shape-bg" width="1448" height="1137" />
        </div>
    </section>
    <section class="revolutionize">
        <div class="bg-angle"></div>
        <div class="container">
            <div class="section-title dark-title text-center">
                <h2 class="title wow pixFadeUp">Mudah Dioperasikan</h2>
                <h3 class="sub-title wow pixFadeUp sub-title-transform" data-wow-delay="0.3s">
                    Dengan tampilan yang simpel dan powerful membuat sistem akan
                    dengan sangat mudah dioperasikan sehingga tidak mengurangi
                    fungsionalitas sistem sedikitpun
                </h3>
            </div>
            <div id="pix-tabs" class="wow pixFadeUp" data-wow-delay="0.5s">
                <ul id="pix-tabs-nav">
                    @foreach ($homebutton as $key => $button)
                        <li><a href="#tab{{ $key + 1 }}">{{ $button->button_teks }}</a></li>
                    @endforeach
                </ul>
                <div id="pix-tabs-content">
                    @foreach ($homebutton as $key => $button)
                        <div id="tab{{ $key + 1 }}" class="content">
                            <img src="{{ asset('/storage/public/' . $button->button_image) }}"
                                alt="{{ $button->button_teks }}" title="{{ $button->button_teks }}" width="1170"
                                height="731" />
                            <div class="shape-shadow"></div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
    <section class="featured-two">
        <div class="container">
            <div class="section-title text-center">
                <h3 class="sub-title wow pixFadeUp">Fitur Kami</h3>
                <h2 class="title wow pixFadeUp" data-wow-delay="0.2s">
                    Kenapa harus ForStaff ?
                </h2>
            </div>
            <div class="row">
                @foreach ($fiturkami as $fitur)
                    <div class="col-lg-4 col-md-6 padding-left-right-25">
                        <div class="pixsass-icon-box-wrapper style-two wow pixFadeRight"
                            data-wow-delay="{{ $loop->index * 0.1 + 0.4 }}s">
                            <div class="iapp-icon-box-icon text-center">
                                <img src="{{ asset('/storage/public/' . $fitur->image) }}"
                                    alt="{{ $fitur->title_fiturkami }}">
                            </div>
                            <div class="pixsass-icon-box-content">
                                <h3 class="pixsass-icon-box-title text-center"><a
                                        href="#">{{ $fitur->title_fiturkami }}</a></h3>
                                <p align="justify">{{ $fitur->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="featured-two">
        <div class="container">
            <div class="section-title text-center">
                <h3 class="sub-title wow pixFadeUp">Blog</h3>
                <h2 class="title wow pixFadeUp" data-wow-delay="0.2s">
                    Blog Terbaru
                </h2>
            </div>
            <p align="center">Maaf, untuk saat ini blog belum tersedia.</p>
        </div>
    </section>
    <section class="call-to-action">
        <div class="overlay-bg">
            <img src="https://www.forstaff.id/assets/media/background/ellipse.png" alt="ellipse" title="ellipse"
                width="1903" height="545" />
        </div>
        <div class="container">
            <div class="action-content text-center wow pixFadeUp">
                <h2 class="title">Langkah Menuju Autopilot</h2>
                <p>
                    Ciptakan lingkungan kerja yang bisa anda awasi hanya dengan satu
                    aplikasi
                </p>
                <a href="https://www.forstaff.id/harga" class="pix-btn btn-light">Dapatkan Sekarang
                </a>
            </div>
        </div>
        <div class="scroll-circle">
            <img src="https://www.forstaff.id/assets/media/background/circle13.png" data-parallax='{"y" : -130}'
                alt="circle" title="circle" width="645" height="800" />
        </div>
    </section>
@endsection
