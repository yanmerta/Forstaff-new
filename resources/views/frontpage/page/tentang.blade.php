@extends('frontpage.general.main')
@section('content')
    <section class="banner banner-one page-banner height-banner">
        <div class="circle-shape" data-parallax='{"y" : 230}'><img
                src="https://www.forstaff.id/assets/media/banner/circle-shape.png" alt="circle" title="circle" width="800"
                height="800"></div>
        <div class="container">
            <div class="page-title-wrapper">
                <h1 class="page-title">Tentang</h1>
                <ul class="bradcurmed color-white">
                    <li><a href="{{ route('frontpage.beranda') }}" rel="noopener noreferrer">Beranda</a></li>
                    <li>Tentang</li>
                </ul>
            </div>
        </div> <svg class="circle" data-parallax='{"x" : -200}' xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" width="950px" height="950px">
            <path fill-rule="evenodd" stroke="#2d63b8" stroke-width="100px" stroke-linecap="butt" stroke-linejoin="miter"
                opacity="0.051" fill="none"
                d="M450.000,50.000 C670.914,50.000 850.000,229.086 850.000,450.000 C850.000,670.914 670.914,850.000 450.000,850.000 C229.086,850.000 50.000,670.914 50.000,450.000 C50.000,229.086 229.086,50.000 450.000,50.000 Z" />
        </svg>
        <ul class="animate-ball">
            <li class="ball"></li>
            <li class="ball"></li>
            <li class="ball"></li>
            <li class="ball"></li>
        </ul>
    </section>
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-content">
                        <div class="section-title text-center">
                            <h3 class="sub-title wow pixFadeUp">{{ $about->title_about }}</h3>
                            <h2 class="title wow pixFadeUp" data-wow-delay="0.3s">{{ $about->subtitle_about }}
                            </h2>
                        </div>
                        <div class="video-thumbnail margin-bottom30" data-wow-delay="0.4s"> <img
                                src="{{ asset('/storage/public/' . $about->image) }}" alt="Tentang Forstaff"
                                title="Tentang Forstaff" width="1070" height="599">
                        </div>
                        <p class="description wow pixFadeUp" data-wow-delay="0.6s" align="justify">
                            {{ $about->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="teams">
        <div class="container">
            <div class="section-title text-center">
                <h3 class="sub-title wow pixFadeUp">{{ $aboutTim->title_tim }}</h3>
                <h2 class="title wow pixFadeUp" data-wow-delay="0.3s">{{ $aboutTim->subtitle_tim }}</h2>
            </div>
            <div class="row">
                @foreach ($teams as $key => $teams)
                    <div class="col-lg-4 col-md-6">
                        <div class="team-member wow pixFadeRight" data-wow-delay="{{ $loop->index * 0.1 + 0.3 }}s">
                            <div class="member-avater"> <img src="{{ asset('/storage/public/' . $teams->image) }}"
                                    alt="Dylan Meringue" title="Dylan Meringue" width="470" height="495">
                                <ul class="member-social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul> <svg class="layer-one" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="210px">
                                    <path fill-rule="evenodd" opacity="0.302" fill="#2d63b8"
                                        d="M-0.000,79.999 C-0.000,79.999 85.262,-11.383 187.324,50.502 C297.703,117.429 370.000,-0.001 370.000,-0.001 L370.000,203.999 C370.000,207.313 367.314,209.999 364.000,209.999 L6.000,209.999 C2.686,209.999 -0.000,207.313 -0.000,203.999 L-0.000,79.999 Z" />
                                </svg> <svg class="layer-two" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="218px">
                                    <path fill-rule="evenodd" opacity="0.8" fill="#2d63b8"
                                        d="M-0.000,27.999 C-0.000,27.999 95.694,-46.224 188.615,48.781 C278.036,140.208 370.000,57.999 370.000,57.999 L370.000,211.999 C370.000,215.313 367.314,217.999 364.000,217.999 L6.000,217.999 C2.686,217.999 -0.000,215.313 -0.000,211.999 L-0.000,27.999 Z" />
                                </svg>
                            </div>
                            <div class="team-info">
                                <h3 class="name">{{ $teams->name }}</h3>
                                <h4 class="job">{{ $teams->posisi }}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
