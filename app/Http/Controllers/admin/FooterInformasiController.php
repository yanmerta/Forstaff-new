<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\FooterInformasi;
use Illuminate\Http\Request;

class FooterInformasiController extends Controller
{
    public function index(){
        $footer_informasi = FooterInformasi::all();
        $pageTitle = 'footer_informasi';
        return view('backpage.footer_informasi.index', compact('footer_informasi','pageTitle' ));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'faq' => 'required',
            'kontak_kami' => 'required',
        ]);

        $footer_informasi = FooterInformasi::find($id);

        $footer_informasi->update([
            'title' => $validatedData['title'], 
            'faq' => $validatedData['faq'], 
            'kontak_kami' => $validatedData['kontak_kami'], 

        ]);

        return redirect()->back()->with('success', 'Fitur data updated successfully');
    }
}
