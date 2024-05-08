<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutTim;
use App\Models\FiturKami;
use App\Models\FiturModel;
use App\Models\Footer;
use App\Models\FooterInformasi;
use App\Models\FooterKebijakan;
use App\Models\Home;
use App\Models\HomeButton;
use App\Models\HomeInformasi;

use App\Models\HomeServis;
use App\Models\KebijakanPrivasi;
use App\Models\KontakKami;
use App\Models\Syarat;
use App\Models\Team;
use App\Models\Tentang;
use Illuminate\Http\Request;

class FrontpageController extends Controller
{
//Halaman Beranda
    public function beranda(){
        $data = Home::all();
        $informasi = HomeInformasi::all();

        $footer = Footer::first();
        $footer_informasi = FooterInformasi::all();
        $footer_kebijakan = FooterKebijakan::all();

        $pageTitle = 'Forstaff';

        return view('frontpage.page.beranda', [
            'data'=> $data[0],
            'footer'=> $footer,
            'footer_informasi'=> $footer_informasi[0],
            'footer_kebijakan'=> $footer_kebijakan[0],
            'informasi'=> $informasi[0],
            'fiturkami' => FiturKami::all(),
            'homebutton' => HomeButton::all(),
            'homeservis' => HomeServis::all(),
            'pageTitle' => $pageTitle,
            'active' => 'beranda'
        ]);
    }

    // Halaman Fitur
    public function fitur(){
        $fiturs = FiturModel::all();

        $footer = Footer::first();
        $footer_informasi = FooterInformasi::all();
        $footer_kebijakan = FooterKebijakan::all();

        $pageTitle = 'Fitur - Forstaff';

        return view('frontpage.page.fitur', [
            'fiturs'=> $fiturs[0],
            'fiturkami' => FiturKami::all(),

            'footer'=> $footer,
            'footer_informasi'=> $footer_informasi[0],
            'footer_kebijakan'=> $footer_kebijakan[0],
            'pageTitle' => $pageTitle,
            'active' => 'fitur'
        ]);
    }

// Halaman Tentang
public function tentang(){
    $about = About::all();
    $aboutTim = AboutTim::all();

    $footer = Footer::first();
    $footer_informasi = FooterInformasi::all();
    $footer_kebijakan = FooterKebijakan::all();

    $pageTitle = 'Tentang - Forstaff';

    return view('frontpage.page.tentang', [
        'about' => $about[0],
        'aboutTim' => $aboutTim[0],
        'teams' => Team::all(),

        'footer'=> $footer,
        'footer_informasi'=> $footer_informasi[0],
        'footer_kebijakan'=> $footer_kebijakan[0],
        'pageTitle' => $pageTitle,
        'active' => 'tentang'
    ]);

}

// Halaman Harga
    public function harga(){
        $footer = Footer::first();
        $footer_informasi = FooterInformasi::all();
        $footer_kebijakan = FooterKebijakan::all();

        $pageTitle = 'Harga - Forstaff';

        return view('frontpage.page.harga', [
            'footer'=> $footer,
            'footer_informasi'=> $footer_informasi[0],
            'footer_kebijakan'=> $footer_kebijakan[0],
            'pageTitle' => $pageTitle,
            'active' => 'harga'
        ]);
    }

// Halaman Blog
    public function blog(){
        $pageTitle = 'Blog - Forstaff';
        $footer = Footer::first();
        $footer_informasi = FooterInformasi::all();
        $footer_kebijakan = FooterKebijakan::all();

        return view('frontpage.page.blog', [
            'footer'=> $footer,
            'footer_informasi'=> $footer_informasi[0],
            'footer_kebijakan'=> $footer_kebijakan[0],
            'pageTitle' => $pageTitle,
            'active' => 'blog'
        ]);
    }

// Halaman Kontak
    public function kontak(){
        $footer = Footer::first();
        $footer_informasi = FooterInformasi::all();
        $footer_kebijakan = FooterKebijakan::all();
        $kontaks = KontakKami::all();

        $pageTitle = 'Kontak Kami - Forstaff';

        return view('frontpage.page.kontak', [
            'footer'=> $footer,
            'footer_informasi'=> $footer_informasi[0],
            'footer_kebijakan'=> $footer_kebijakan[0],
            'kontaks'=> $kontaks[0],
            'pageTitle' => $pageTitle,
            'active' => 'kontak'
        ]);
    }
    public function kebijakan(){
        $kebijakan =    KebijakanPrivasi::first();

        $footer = Footer::first();
        $footer_informasi = FooterInformasi::all();
        $footer_kebijakan = FooterKebijakan::all();

        $pageTitle = 'Kebijakan Privasi - Forstaff';

        return view('frontpage.page.kebijakanprivasi', [
            'kebijakan'=> $kebijakan,
            'footer'=> $footer,
            'footer_informasi'=> $footer_informasi[0],
            'footer_kebijakan'=> $footer_kebijakan[0],
            'pageTitle' => $pageTitle,
            'active' => 'kebijakan'
        ]);
    }
    public function syarat(){
        $syarat = Syarat::first();

        $footer = Footer::first();
        $footer_informasi = FooterInformasi::all();
        $footer_kebijakan = FooterKebijakan::all();

        $pageTitle = 'Syarat Kebutuhan Pengguna Aplikasi - Forstaff';

        return view('frontpage.page.syarat', [
            'syarat'=> $syarat,
            'footer'=> $footer,
            'footer_informasi'=> $footer_informasi[0],
            'footer_kebijakan'=> $footer_kebijakan[0],
            'pageTitle' => $pageTitle,
            'active' => 'syarat'
        ]);
    }
    // Halaman FAQ
    public function faq(){
        $footer = Footer::first();
        $footer_informasi = FooterInformasi::all();
        $footer_kebijakan = FooterKebijakan::all();

        $pageTitle = 'FAQ - Forstaff';

        return view('frontpage.page.faq',[
            'footer'=> $footer,
            'footer_informasi'=> $footer_informasi[0],
            'footer_kebijakan'=> $footer_kebijakan[0],
            'pageTitle' => $pageTitle,
            'active' => 'faq'
        ]);
    }

}


