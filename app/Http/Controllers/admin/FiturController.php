<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\FiturModel;
use Illuminate\Http\Request;

class FiturController extends Controller
{
    public function index(){
        $fiturs = FiturModel::all();
        $pageTitle = 'Fitur';
        return view('backpage.fitur.index', compact('fiturs','pageTitle' ));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'fitur_title' => 'required',
            'subtitle_fitur' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg,gif',
            'description' => 'required',
            // Add validation for other fields as needed
        ]);

        $fiturs = FiturModel::find($id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
            $fiturs->image = $imagePath;
        }

        $fiturs->update([
            'fitur_title' => $validatedData['fitur_title'],
            'subtitle_fitur' => $validatedData['subtitle_fitur'],
            'description' => $validatedData['description'],
            // Update other fields as needed
        ]);

        return redirect()->back()->with('success', 'Fitur data updated successfully');
    }
}
