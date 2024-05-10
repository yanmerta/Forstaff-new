<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\KontakKami;
use Illuminate\Http\Request;

class KontakKamiController extends Controller
{
    public function index()
    {
        $kontaks = KontakKami::first();
        $pageTitle = 'Kontak Kami';
        return view('backpage.kontak.index', compact('kontaks', 'pageTitle'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'jam_kerja' => 'required',
            'icon1' => 'required',
            'icon2' => 'required',
            'icon3' => 'required',
            'icon4' => 'required',
        ]);
        
        $kontaks = KontakKami::findOrFail($id);

        $kontaks->update([
            'title' => $validatedData['title'],
            'subtitle' => $validatedData['subtitle'],
            'alamat' => $validatedData['alamat'],
            'telepon' => $validatedData['telepon'],
            'email' => $validatedData['email'],
            'jam_kerja' => $validatedData['jam_kerja'],
            'icon1' => $validatedData['icon1'],
            'icon2' => $validatedData['icon2'],
            'icon3' => $validatedData['icon3'],
            'icon4' => $validatedData['icon4'],
        ]);

        return redirect()->back()->with('success', 'Kontak Kami updated successfully');
    }
}
