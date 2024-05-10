<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index(){
        $footer = Footer::all();
        $pageTitle = 'Footer';
        return view('backpage.footer.index', compact('footer','pageTitle' ));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'nama_perusahaan' => 'required',
            'alamat' => 'required',
            'nomer_telepon' => 'required',
            'email' => 'required|email',
            'jam_kerja' => 'required',
            'link_fb' => 'required',
            'link_link' => 'required',
            'link_ig' => 'required',
            'link_twitter' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg,svg,gif',
        ]);

        $footer = Footer::find($id);

        if ($request->hasFile('logo')) {
            $imagePath = $request->file('logo')->store('uploads', 'public');
            $footer->logo = $imagePath;
        }

        $footer->update([
            'title' => $validatedData['title'], 
            'nama_perusahaan' => $validatedData['nama_perusahaan'],
            'alamat' => $validatedData['alamat'],
            'nomer_telepon' => $validatedData['nomer_telepon'],
            'email' => $validatedData['email'],
            'jam_kerja' => $validatedData['jam_kerja'],
            'link_fb' => $validatedData['link_fb'],
            'link_link' => $validatedData['link_link'],
            'link_ig' => $validatedData['link_ig'],
            'link_twitter' => $validatedData['link_twitter'],
        ]);

        return redirect()->back()->with('success', 'Footer data updated successfully');
    }
}
