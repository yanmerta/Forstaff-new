<?php

namespace App\Http\Controllers;

use App\Models\FiturKami;
use App\Models\FiturModel;
use App\Models\Home;
use App\Models\HomeButton;
use App\Models\HomeInformasi;
use App\Models\Tentang;
use Illuminate\Http\Request;
use App\Models\HomeServis;

class FrontpageController extends Controller
{
//Halaman Beranda
    public function beranda(){
        $data = Home::all();
        $informasi = HomeInformasi::all();
        return view('frontpage.page.beranda', [
            'data'=> $data[0],
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
        return view('frontpage.page.tentang');
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
}
