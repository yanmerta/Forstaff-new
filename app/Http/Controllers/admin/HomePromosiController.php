<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\HomePromosi;
use Illuminate\Http\Request;

class HomePromosiController extends Controller
{
    public function index(){
        $homepromosi = HomePromosi::all();
        $pageTitle = 'Home Promosi < Forstaff';
        return view('backpage.homepromosi.index', compact('homepromosi','pageTitle' ));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'button_teks' => 'required',
        ]);

        $homepromosi = HomePromosi::findOrFail($id);

        $homepromosi->update([

        'title' => $validatedData['title'],
        'sub_title' => $validatedData['sub_title'],
        'button_teks' => $validatedData['button_teks'],
        ]);

        return redirect()->back()->with('success', 'Data tentang berhasil diperbarui');
    }

}


