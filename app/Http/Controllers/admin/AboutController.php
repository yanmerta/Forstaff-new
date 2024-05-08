<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $about = About::all();
        $pageTitle = 'Tentang';
        // dd($data);
        return view('backpage.about.index', compact('about','pageTitle' ));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title_about' => 'required',
            'subtitle_about' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,svg,gif',
            // Add validation for other fields as needed
        ]);

        $about = About::findOrFail($id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
            $about->image = $imagePath;
        }

        $about->title_about = $validatedData['title_about'];
        $about->subtitle_about = $validatedData['subtitle_about'];
        $about->description = $validatedData['description'];
        // Update other fields as needed

        $about->save();

        return redirect()->back()->with('success', 'Data tentang berhasil diperbarui');
    }

}

