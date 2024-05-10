<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\KebijakanPrivasi;
use Illuminate\Http\Request;

class KebijakanPrivasiController extends Controller
{
    public function index()
    {
        $kebijakan = KebijakanPrivasi::first(); // Menggunakan first() untuk mendapatkan satu instance
        $pageTitle = 'Kebijakan < Forstaff';
        return view('backpage.kebijakan.index', compact('kebijakan','pageTitle' ));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'tentang_kami' => 'required',
            'informasi' => 'required',
            'tujuan' => 'required',
            'hak' => 'required',
            'link_eksternal' => 'required',
            'keamanan' => 'required',
            'hukum' => 'required',
            'informasi_kontak' => 'required',
        ]);

        $kebijakan = KebijakanPrivasi::findOrFail($id); // Gunakan findOrFail() untuk menemukan atau melempar exception jika tidak ditemukan

        $kebijakan->update($validatedData); // Gunakan data yang telah divalidasi

        return redirect()->back()->with('success', 'Data kebijakan berhasil diperbarui');
    }
}
