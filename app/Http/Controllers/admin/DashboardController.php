<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
    {
        public function index(){
            // $data = Home::all();
            $pageTitle = 'Dashboard < Forstaff';
            // dd($data);
            return view('backpage.dashboard.Dashboard',compact('pageTitle' ));
        }
    }
