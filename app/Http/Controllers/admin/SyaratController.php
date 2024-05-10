<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Syarat;
use Illuminate\Http\Request;

class SyaratController extends Controller
{
    public function index()
    {
        $syarats = Syarat::first();
        $pageTitle = 'Syarat Kebutuhan < Forstaff';
        return view('backpage.syarat.index', compact('syarats', 'pageTitle'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'description1' => 'required',
            'description2' => 'required',
        ]);
        $syarats = Syarat::findOrFail($id);

        $syarats->update($validatedData);

        return redirect()->back()->with('success', 'Syarat updated successfully');
    }
}
