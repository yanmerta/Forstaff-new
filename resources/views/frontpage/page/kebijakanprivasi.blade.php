@extends('frontpage.general.main')
@section('content')
    <section class="banner banner-one page-banner height-banner">
        <div class="circle-shape" data-parallax='{"y" : 230}'><img
                src="https://www.forstaff.id/assets/media/banner/circle-shape.png" alt="circle" title="circle" width="800"
                height="800"></div>
        <div class="container">
            <div class="page-title-wrapper">
                <h1 class="page-title">Kebijakan Privasi</h1>
                <ul class="bradcurmed color-white">
                    <li><a href="{{ route('frontpage.beranda') }}" rel="noopener noreferrer">Beranda</a></li>
                    <li>Kebijakan Privasi</li>
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
    <section class="blog-single">
        <div class="container pb-120">
            <div class="row">
                <div class="col-md-12">
                    <article class="post post-signle">
                        <div class="blog-content">
                            <p>{{ $kebijakan->tentang_kami }}</p>
                            <h2>Informasi pribadi yang kami kumpulkan:</h2>
                            <p> {{ $kebijakan->informasi }}</p>
                            <h2>Mengapa kami memproses data Anda?</h2>
                            <p>{{ $kebijakan->tujuan }}</p>
                            <h2>Hak-hak Anda:</h2>
                            <p>{{ $kebijakan->hak }}</p>
                            <h2>Link ke website lain:</h2>
                            <p> {{ $kebijakan->link_eksternal }}</p>
                            <h2>Keamanan informasi:</h2>
                            <p>{{ $kebijakan->keamanan }}</p>
                            <h2>Pengungkapan hukum:</h2>
                            <p>{{ $kebijakan->hukum }}</p>
                            <h2>Informasi kontak:</h2>
                            <p>{{ $kebijakan->informasi_kontak }}</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
