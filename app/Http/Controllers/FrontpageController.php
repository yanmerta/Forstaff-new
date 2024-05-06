<?php

namespace App\Http\Controllers;

use App\Models\FiturModel;
use App\Models\Home;
use Illuminate\Http\Request;

class FrontpageController extends Controller
{
    public function index(){
        $data = Home::all();
        return view('frontpage.home.home', [
            'data'=> $data[0],
        ]);

        $fiturs = FiturModel::all();
        return view('backpage.fitur.index', [

        ]);
    }

}
