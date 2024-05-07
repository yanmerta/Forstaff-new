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

        return view('frontpage.page.beranda', [
            'data'=> $data[0],
            'footer'=> $footer,
            'footer_informasi'=> $footer_informasi[0],
            'footer_kebijakan'=> $footer_kebijakan[0],
            'informasi'=> $informasi[0],
            'fiturkami' => FiturKami::all(),
            'homebutton' => HomeButton::all(),
            'homeservis' => HomeServis::all(),
        ]);
}
// Halaman Fitur
    public function fitur(){
        $fiturs = FiturModel::all();

        return view('frontpage.page.fitur', [
            'fiturs'=> $fiturs[0],
            'fiturkami' => FiturKami::all(),
        ]);
    }

// Halaman Tentang
public function tentang(){
    $about = About::all();
    $aboutTim = AboutTim::all();

    return view('frontpage.page.tentang', [
        'about' => $about[0],
        'aboutTim' => $aboutTim[0],
        'teams' => Team::all(),
    ]);

}

// Halaman Harga
    public function harga(){
        return view('frontpage.page.harga');
    }

// Halaman Blog
    public function blog(){
        return view('frontpage.page.blog');
    }

// Halaman Kontak
    public function kontak(){
        return view('frontpage.page.kontak');
    }
    public function kebijakan(){
        $kebijakan =    KebijakanPrivasi::first();
        return view('frontpage.page.kebijakanprivasi', [
            'kebijakan'=> $kebijakan,
        ]);
    }
    public function syarat(){
        $syarat = Syarat::first();
        return view('frontpage.page.syarat', [
            'syarat'=> $syarat,
        ]);
    }
    // Halaman FAQ
    public function faq(){
        return view('frontpage.page.faq');
    }
}