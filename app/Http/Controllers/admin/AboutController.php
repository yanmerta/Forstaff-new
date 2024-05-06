<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $abouts = About::all();
        $about = 'Tentang';
        // dd($data);
        return view('backpage.about.index', compact('abouts','about' ));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title_about' => 'required',
            'subtitle_about' => 'required',
            'description' => 'required|image|mimes:jpeg,png,jpg,svg,gif',
            'image' => 'required',
            // Add validation for other fields as needed
        ]);

        $abouts = About::find($id);

        $abouts->update([
            'title_about' => $validatedData['title_about'],
            'subtitle_about' => $validatedData['subtitle_about'],
            'description' => $validatedData['description'],
            'image' => $validatedData['image'],
            // Update other fields as needed
        ]);

        return redirect()->back()->with('success', 'Fitur data updated successfully');
    }
}

