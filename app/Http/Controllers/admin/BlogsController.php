<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        $blogs = Blogs::all();
        $pageTitle = 'Data Blogs < Forstaff';
        return view('backpage.blog.index', compact('blogs', 'pageTitle'));
    }
}
