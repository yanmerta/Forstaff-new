<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\FooterKebijakan;
use Illuminate\Http\Request;

class FooterKebijakanController extends Controller
{
    public function index(){
        $footer_kebijakan = FooterKebijakan::all();
        $pageTitle = 'footer_kebijakan';
        return view('backpage.footer_kebijakan.index', compact('footer_kebijakan','pageTitle' ));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'kebijakan' => 'required',
            'syarat' => 'required',
        ]);

        $footer_kebijakan = FooterKebijakan::find($id);

        if ($request->hasFile('icon_app1')) {
            $imagePath = $request->file('icon_app1')->store('uploads', 'public');
            $footer_kebijakan->icon_app1 = $imagePath;
        }
        if ($request->hasFile('icon_app2')) {
            $imagePath = $request->file('icon_app2')->store('uploads', 'public');
            $footer_kebijakan->icon_app2 = $imagePath;
        }

        $footer_kebijakan->update([
            'title' => $validatedData['title'], 
            'kebijakan' => $validatedData['kebijakan'], 
            'syarat' => $validatedData['syarat'], 

        ]);

        return redirect()->back()->with('success', 'Fitur data updated successfully');
    }
}

