<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index()
    {
        $prices = Price::all();
        $pageTitle = 'Harga < Forstaff';
        return view('backpage.harga.index', compact('prices', 'pageTitle'));
    }
}
