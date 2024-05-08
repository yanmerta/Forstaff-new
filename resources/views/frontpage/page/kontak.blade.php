@extends('frontpage.general.main')
@section('content')
    <div id="main_content">
        <div class="loader-send" style="display: none"></div>
        <section class="banner banner-one page-banner height-banner">
            <div class="circle-shape" data-parallax='{"y" : 230}'><img
                    src="https://www.forstaff.id/assets/media/banner/circle-shape.png" alt="circle" title="circle"
                    width="800" height="800"></div>
            <div class="container">
                <div class="page-title-wrapper">
                    <h1 class="page-title">Kontak Kami</h1>
                    <ul class="bradcurmed color-white">
                        <li><a href="{{ route('frontpage.beranda') }}" rel="noopener noreferrer">Beranda</a></li>
                        <li>Kontak Kami</li>
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
        <section class="contactus">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-infos">
                            <div class="contact-info">
                                <h3 class="title">{{ $kontaks->title }}</h3>
                                <p class="description"> {{ $kontaks->subtitle }} </p>
                                <div class="info"> <i class="ei ei-icon_map"></i> <span>{{ $kontaks->alamat }}</span>
                                </div>
                                <div class="info phone"> <i class="ei ei-icon_phone"></i>
                                    <span>{{ $kontaks->telepon }}</span>
                                </div>
                                <div class="info email"> <i class="ei ei-icon_mail_alt"></i>
                                    <span>{{ $kontaks->email }}</span>
                                </div>
                                <div class="info"> <i class="ei ei-info"></i> <span>Jam Kerja :</span>
                                    <span>{{ $kontaks->jam_kerja }}</span> </div>
                            </div>
                        </div>
                        <div id="footer" class="footer-nner widget footer-widget sosial-medias-background">
                            <ul class="footer-social-link margin-top30">
                                <li><a href="{{ $kontaks->icon1 }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="{{ $kontaks->icon2 }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{ $kontaks->icon3 }}" target="_blank"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li><a href="{{ $kontaks->icon4 }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="contact-froms">
                            <form action="https://www.forstaff.id/kontak-kami/send-message" class="contact-form"
                                id="send_message" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                <div class="row">
                                    <div class="col-md-6"> <span class="form-error"></span> <input type="text"
                                            name="nama" placeholder="Nama"> </div>
                                    <div class="col-md-6"> <span class="form-error"></span> <input type="text"
                                            name="email" placeholder="Email"> </div>
                                </div>
                                <div class="col-md-12"> <span class="form-error"></span> <input type="text"
                                        name="subjek" placeholder="Subjek"> </div>
                                <div class="col-md-12"> <span class="form-error"></span>
                                    <textarea name="pesan" placeholder="Pesan"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"> <img
                                            src="https://www.forstaff.id/assets/captcha_mwz/1714888728.9542.jpg"
                                            style="width: 250; height: 50; border: 0;" alt=" " /></div>
                                    <div class="col-md-8"> <span class="form-error"></span> <input type="text"
                                            placeholder="Input Security Code" name="captcha"> </div>
                                </div> <button type="submit" class="pix-btn submit-btn">Kirim</button>
                                <div class="form-result alert">
                                    <div class="content"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="margin-botton-map"> <iframe
                data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.535980234358!2d115.22603191433608!3d-8.640464890248698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23f7a779a6533%3A0x28f52169c1dbb072!2sPT%20Guna%20Artha%20kencana%20%22Red%20Consulting%22!5e0!3m2!1sid!2sid!4v1566890455589!5m2!1sid!2sid"
                width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </section>
    </div>
    <script async defer type="text/javascript" src="https://www.forstaff.id/assets/assets/js/kontak.min.js "></script>
@endsection
