<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $pageTitle = 'Data Tim < Forstaff';
        $teams = Team::all();
        return view('backpage.team.index', compact('teams','pageTitle'));
    }

    public function create()
    {
        $pageTitle = 'Tambah Tim < Forstaff';
        return view('backpage.team.create', compact('pageTitle'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'posisi' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg,gif',
        ]);

        $imagePath = $request->file('image')->store('uploads','public');

        Team::create([
            'image' => $imagePath,
            'name' => $validatedData['name'],
            'posisi' => $validatedData['posisi'],
        ]);

        return redirect()->route('admin.team.index')->with('success','Team created successfully');
    }

    public function edit($id)
    {
        $teams = Team::find($id);
        $pageTitle = 'Edit Tim Forstaff' . $teams->name;
        return view('backpage.team.edit', compact('teams', 'pageTitle'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,svg,gif',
            'name' => 'required',
            'posisi' => 'required',
        ]);

        $teams = Team::find($id);

        if($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads','public');
            $teams->update([
                'image' => $imagePath,
            ]);
        }

        $teams->update([
            'name' => $validatedData['name'],
            'posisi' => $validatedData['posisi'],
        ]);

        return redirect()->route('admin.team.index')->with('success', 'Team updated successfully');
    }

    public function destroy($id)
    {
        $teams = Team::findOrFail($id);
        $teams->delete();

        return redirect()->route('admin.team.index')->with('success', 'User deleted successfully');
    }
}
