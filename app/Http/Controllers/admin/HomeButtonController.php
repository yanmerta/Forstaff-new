<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeButton;

class HomeButtonController extends Controller
{
    public function index()
    {
        $pageTitle = 'Fitur Kami';
        $homebutton = HomeButton::all();
        return view('backpage.homebutton.index', compact('homebutton','pageTitle'));
    }

    public function create()
    {
        $pageTitle = 'Create New HomeButton';
        return view('backpage.homebutton.create', compact('pageTitle'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'button_teks' => 'required',
            'button_image' => 'required|image|mimes:jpeg,png,jpg,svg,gif',
        ]);

        $imagePath = $request->file('button_image')->store('uploads','public');

        HomeButton::create([
            'button_image' => $imagePath,
            'button_teks' => $validatedData['button_teks'],
        ]);

        return redirect()->route('admin.homebutton.index')->with('success','Fitur created successfully');
    }

    public function edit($id)
    {
        $homebutton = HomeButton::find($id);
        $pageTitle = 'Edit Data Fitur ' . $homebutton->button_teks;
        return view('backpage.homebutton.edit', compact('homebutton', 'pageTitle'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'button_teks' => 'required',
            'button_image' => 'required|image|mimes:jpeg,png,jpg,svg,gif',
        ]);

        $homebutton = HomeButton::find($id);

        if($request->hasFile('button_image')) {
            $imagePath = $request->file('button_image')->store('uploads','public');
            $homebutton->update([
                'button_image' => $imagePath,
            ]);
        }

        $homebutton->update([
            'button_teks' => $validatedData['button_teks'],
        ]);

        return redirect()->route('admin.homebutton.index')->with('success', 'Fitur data updated successfully');
    }

    public function destroy($id)
    {
        $homebutton = HomeButton::findOrFail($id);
        $homebutton->delete();

        return redirect()->route('admin.homebutton.index')->with('success', 'User deleted successfully');
    }
}
