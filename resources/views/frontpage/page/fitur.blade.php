@extends('frontpage.general.main')
@section('content')
    <section class="banner banner-one page-banner height-banner">
        <div class="circle-shape" data-parallax='{"y" : 230}'><img
                src="https://www.forstaff.id/assets/media/banner/circle-shape.png" alt="circle" title="circle" width="800"
                height="800"></div>
        <div class="container">
            <div class="page-title-wrapper">
                <h1 class="page-title">Fitur</h1>
                <ul class="bradcurmed color-white">
                    <li><a href="{{ route('frontpage.beranda') }}">Beranda</a></li>
                    <li>Fitur</li>
                </ul>
            </div>
        </div> <svg class="circle" data-parallax='{"x" : -200}' xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" width="950px" height="950px">
            <path fill-rule="evenodd" stroke="rgb(250, 112, 112)" stroke-width="100px" stroke-linecap="butt"
                stroke-linejoin="miter" opacity="0.051" fill="none"
                d="M450.000,50.000 C670.914,50.000 850.000,229.086 850.000,450.000 C850.000,670.914 670.914,850.000 450.000,850.000 C229.086,850.000 50.000,670.914 50.000,450.000 C50.000,229.086 229.086,50.000 450.000,50.000 Z" />
        </svg>
        <ul class="animate-ball">
            <li class="ball"></li>
            <li class="ball"></li>
            <li class="ball"></li>
            <li class="ball"></li>
        </ul>
    </section>
    <section class="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-content">
                        <div class="section-title text-center">
                            <h3 class="sub-title wow pixFadeUp" data-wow-delay="0.3s">{{ $fiturs->fitur_title }}
                            </h3>
                            <h2 class="title wow pixFadeUp" data-wow-delay="0.5s"> {{ $fiturs->subtitle_fitur }}
                            </h2>
                        </div>
                        <div class="video-thumbnail margin-bottom30"> <img
                                src="{{ asset('/storage/public/' . $fiturs->image) }}" alt="Fitur Forstaff"
                                title="Fitur Forstaff" width="1070" height="401">
                        </div>
                        <p class="wow pixFadeUp" data-wow-delay="0.7s" align="justify">
                            {{ $fiturs->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="featured-two">
        <div class="container">
            <div class="section-title text-center">
                <h3 class="sub-title wow pixFadeUp">Fitur Kami</h3>
                <h2 class="title wow pixFadeUp" data-wow-delay="0.2s">Kenapa harus ForStaff ?</h2>
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
@endsection
