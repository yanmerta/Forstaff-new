<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\HomeServis;
use Illuminate\Http\Request;

class HomeServisController extends Controller
{
    public function index()
    {
        $pageTitle = 'Fitur Kami';
        $homeservis = HomeServis::all();
        return view('backpage.homeservis.index', compact('homeservis','pageTitle'));
    }

    public function create()
    {
        $pageTitle = 'Create New Fitur';
        return view('backpage.homeservis.create', compact('pageTitle'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'servis_title' => 'required',
            'servis_description' => 'required',
            'servis_image' => 'required|image|mimes:jpeg,png,jpg,svg,gif',
        ]);

        $imagePath = $request->file('servis_image')->store('uploads','public');

        HomeServis::create([
            'servis_image' => $imagePath,
            'servis_title' => $validatedData['servis_title'],
            'servis_description' => $validatedData['servis_description'],
        ]);

        return redirect()->route('admin.homeservis.index')->with('success','Fitur created successfully');
    }

    public function edit($id)
    {
        $homeservis = HomeServis::find($id);
        $pageTitle = 'Edit Data Fitur ' . $homeservis->servis_title;
        return view('backpage.homeservis.edit', compact('homeservis', 'pageTitle'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title_homeservis' => 'required',
            'description' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,svg,gif',
            // Add validation for other fields as needed
        ]);

        $homeservis = homeservis::find($id);

        if($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads','public');
            $homeservis->update([
                'image' => $imagePath,
            ]);
        }

        $homeservis->update([
            'title_homeservis' => $validatedData['title_homeservis'],
            'description' => $validatedData['description'],
        ]);

        return redirect()->route('admin.homeservis.index')->with('success', 'Fitur data updated successfully');
    }

    public function destroy($id)
    {
        $homeservis = HomeServis::findOrFail($id);
        $homeservis->delete();

        return redirect()->route('admin.homeservis.index')->with('success', 'User deleted successfully');
    }
}

