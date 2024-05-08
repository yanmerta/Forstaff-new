<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kontak2;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Kontak2Controller extends Controller
{
    public function index()
    {
        $kontak = Kontak2::first();
        $pageTitle = 'Kontak';
        return view('backpage.kontak2.index', compact('kontak', 'pageTitle'));
    }

    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'nama' => 'required',
                'email' => 'required',
                'subjek' => 'required',
                'pesan' => 'required',
                'maps' => 'required',
            ]);

            $kontak = Kontak2::findOrFail($id);

            $kontak->update([
                'nama' => $validatedData['nama'],
                'email' => $validatedData['email'],
                'subjek' => $validatedData['subjek'],
                'pesan' => $validatedData['pesan'],
                'maps' => $validatedData['maps'],
            ]);

            return redirect()->back()->with('success', 'KontakKami berhasil diperbarui');
        } catch (ModelNotFoundException $e) {
            return redirect()->back()->with('error', 'KontakKami tidak ditemukan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi.');
        }
    }
}
