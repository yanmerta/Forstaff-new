<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FAQ;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index()
    {
        $faq = FAQ::all();
        $pageTitle = 'FAQ < Forstaff';
        return view('backpage.faq.index', compact('faq', 'pageTitle'));
    }
}
