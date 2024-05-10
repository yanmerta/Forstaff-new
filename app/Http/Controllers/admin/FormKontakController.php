<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\FormKontak;
use Illuminate\Http\Request;

class FormKontakController extends Controller
{
    public function index()
    {
        $formkontak = FormKontak::all();
        $pageTitle = 'Kontak';
        return view('backpage.formkontak.index', compact('formkontak', 'pageTitle'));
    }

    public function update(Request $request, $id)
    {
            $validatedData = $request->validate([
                'form_nama' => 'required',
                'form_email' => 'required',
                'form_subjek' => 'required',
                'form_pesan' => 'required',
                'form_code' => 'required',
                'maps' => 'required',
            ]);

            $formkontak = FormKontak::find($id);

            $formkontak->update([
                'form_nama' => $validatedData['form_nama'],
                'form_email' => $validatedData['form_email'],
                'form_subjek' => $validatedData['form_subjek'],
                'form_pesan' => $validatedData['form_pesan'],
                'form_code' => $validatedData['form_code'],
                'maps' => $validatedData['maps'],
            ]);

            return redirect()->back()->with('success', 'KontakKami berhasil diperbarui');
    }
}
