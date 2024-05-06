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
                    <li><a href="{{ route('index') }}">Beranda</a></li>
                    <li>&gt; Fitur</li>
                </ul>
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
                            <h3 class="sub-title wow pixFadeUp" data-wow-delay="0.3s">Fitur Terbaik Kami</h3>
                            <h2 class="title wow pixFadeUp" data-wow-delay="0.5s"> Kami menawarkan solusi terbaik
                                untuk bisnis anda </h2>
                        </div>
                        <div class="video-thumbnail margin-bottom30"> <img
                                src="https://www.forstaff.id/assets/media/about/fitur-forstaff.jpg" alt="Fitur Forstaff"
                                title="Fitur Forstaff" width="1070" height="401">
                        </div>
                        <p class="wow pixFadeUp" data-wow-delay="0.7s" align="justify"> Hal utama yang mampu
                            mendorong bisnis anda untuk bisa menjadi AutoPilot adalah dengan melakukan pengawasan
                            yang baik terhadap karyawan yang anda miliki. Nilai pengawasan yang tercantum di
                            dalamnya di sebut dengan KPI (Key Performance Indicator). KPI dapat digunakan sebagai
                            acuan untuk mengukur kualitas kerja karyawan anda. Ketika KPI bisa terukur dengan baik,
                            maka dapat dipastikan anda sudah melewati satu proses utama menuju Perusahaan yang
                            Autopilot. Akan tetapi, terkadang pengukuran terhadap KPI tidak dapat dilakukan secara
                            obyektif sehingga berefek kepada kualitas SDM yang dimiliki oleh perusahaan anda.
                            Forstaff hadir sebagai solusinya. Dengan menggunakan sistem perhitungan dan indicator
                            yang disesuaikan dengan perusahaan anda, Forstaff akan memberikan kemudahan luar biasa,
                            sehingga perusahaan anda sudah satu langkah semakin dekat dengan Goal Autopilot. </p>
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
                <div class="col-lg-4 col-md-6 padding-left-right-25">
                    <div class="pixsass-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.4s">
                        <div class="iapp-icon-box-icon text-center"> <img
                                src="https://www.forstaff.id/assets/media/feature/hrd-apss.png" alt="HRD Apps"
                                title="HRD Apps" width="100" height="100"> </div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title text-center"><a href="#">HRD Apps</a></h3>
                            <p align="justify"> Melakukan manajemen data Staff oleh HRD yang berisikan data
                                karyawan, kontrak, tugas, permintaan, persetujuan dan sebagainya </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-left-right-25">
                    <div class="pixsass-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.5s">
                        <div class="iapp-icon-box-icon text-center"> <img
                                src="https://www.forstaff.id/assets/media/feature/staff-apps.png" alt="Staff Apps"
                                title="Staff Apps" width="100" height="100"> </div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title text-center"><a href="#">Staff Apps</a></h3>
                            <p align="justify"> Staff dapat melakukan update data diri dengan menggunakan Aplikasi
                                Staff. Selain itu, staff juga akan melihat hal hal yang harus dilakukan lewat list
                                permintaan yang ada pada aplikasi </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-left-right-25">
                    <div class="pixsass-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.6s">
                        <div class="iapp-icon-box-icon text-center"> <img
                                src="https://www.forstaff.id/assets/media/feature/request-n-approval.png"
                                alt="Request and Approval" title="Request and Approval" width="100" height="100">
                        </div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title text-center"><a href="#">Request and
                                    Approval</a></h3>
                            <p align="justify"> Forstaff adalah aplikasi yang dapat melakukan manajemen request dan
                                approval. Staff dapat melakukan request tugas untuk selanjutnya dapat di setujui
                                oleh staff yang dituju </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-left-right-25">
                    <div class="pixsass-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.7s">
                        <div class="iapp-icon-box-icon text-center"> <img
                                src="https://www.forstaff.id/assets/media/feature/kpi.png" alt="KPI" title="KPI"
                                width="100" height="100"> </div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title text-center"><a href="#">KPI</a></h3>
                            <p align="justify"> KPI (Key Performance Indicator) adalah gambaran penilaian performa
                                dari staff. Hal ini sangat penting untuk mengetahui penyebab penyebab terjadinya
                                penurunan performa yang mempengaruhi omset perusahaan anda. Forstaff hadir sebagai
                                solusi untuk mengetahui secara sistematis KPI dari karyawan anda </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-left-right-25">
                    <div class="pixsass-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.8s">
                        <div class="iapp-icon-box-icon text-center"> <img
                                src="https://www.forstaff.id/assets/media/feature/statistic.png" alt="Statistic"
                                title="Statistic" width="100" height="100"> </div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title text-center"><a href="#">Statistic</a></h3>
                            <p align="justify"> Laporan statistic yang akan sangat berguna untuk memudahkan membaca
                                data yang dihasilkan oleh aktifitas HRD </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-left-right-25">
                    <div class="pixsass-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.9s">
                        <div class="iapp-icon-box-icon text-center"> <img
                                src="https://www.forstaff.id/assets/media/feature/data-report.png" alt="Report"
                                title="Report" width="100" height="100"> </div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title text-center"><a href="#">Data Report</a></h3>
                            <p align="justify"> Berbagai macam laporan tersedia di aplikasi Forstaff, mulai dari
                                laporan data staff, absensi, kontrak, KPI, payroll, sampai cuti dan resignation </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
