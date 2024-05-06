<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutTim;
use Illuminate\Http\Request;

class AboutTimController extends Controller
{

    public function index()
    {
        $pageTitle = 'Tentang Tim';
        $aboutTim = AboutTim::all();
        return view('backpage.aboutTim.index', compact('aboutTim','pageTitle'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title_tim' => 'required',
            'subtitle_tim' => 'required',
        ]);

        $aboutTim = AboutTim::findOrFail($id);

        $aboutTim->title_tim = $validatedData['title_tim'];
        $aboutTim->subtitle_tim = $validatedData['subtitle_tim'];
        // Update other fields as needed

        $aboutTim->save();

        return redirect()->back()->with('success', 'Data tentang berhasil diperbarui');
    }


}
