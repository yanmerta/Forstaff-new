<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\HomeInformasi;
use Illuminate\Http\Request;

class HomeInformasiController extends Controller
{
    public function index()
    {
        $homeinformasi = HomeInformasi::all();
        $pageTitle = 'Home Informasi < Forstaff';
        return view('backpage.homeinformasi.index', compact('homeinformasi', 'pageTitle'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'description' => 'required',
            'button_teks' => 'required',
        ]);

        $homeinformasi = HomeInformasi::find($id);

        // Check if image file is uploaded
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
            $homeinformasi->image = $imagePath;
        }

        // Check if image2 file is uploaded
        if ($request->hasFile('image2')) {
            $imagePath = $request->file('image2')->store('uploads', 'public');
            $homeinformasi->image2 = $imagePath;
        }

        // Update other fields
        $homeinformasi->update([
            'title' => $validatedData['title'],
            'sub_title' => $validatedData['sub_title'],
            'description' => $validatedData['description'],
            'button_teks' => $validatedData['button_teks'],
        ]);

        return redirect()->back()->with('success', 'Home Informasi data updated successfully');
    }
}
