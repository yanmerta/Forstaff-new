<?php

namespace App\Http\Controllers\Admin;

use App\Models\FiturModel;
use Illuminate\Http\Request;

class FiturController extends Controller
{
    public function index(){
        $fiturs = FiturModel::all();
        $fitur = 'Fitur';
        // dd($data);
        return view('backpage.fitur.index', compact('fiturs','fitur' ));
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

        $fiturs->update([
            'fitur_title' => $validatedData['fitur_title'],
            'subtitle_fitur' => $validatedData['subtitle_fitur'],
            'image' => $validatedData['image'],
            'description' => $validatedData['description'],
            // Update other fields as needed
        ]);

        return redirect()->back()->with('success', 'Fitur data updated successfully');
    }
}
