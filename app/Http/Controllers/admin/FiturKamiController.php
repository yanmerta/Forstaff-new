<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\FiturKami;
use Illuminate\Http\Request;

class FiturKamiController extends Controller
{
    public function index()
    {
        $pageTitle = 'Fitur Kami';
        $fiturkami = FiturKami::all();
        return view('backpage.fiturKami.index', compact('fiturkami','pageTitle'));
    }

    public function create()
    {
        $pageTitle = 'Create New Fitur';
        return view('backpage.fiturKami.create', compact('pageTitle'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title_fiturkami' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg,gif',
        ]);

        $imagePath = $request->file('image')->store('uploads','public');

        FiturKami::create([
            'image' => $imagePath,
            'title_fiturkami' => $validatedData['title_fiturkami'],
            'description' => $validatedData['description'],
        ]);

        return redirect()->route('admin.fiturkami.index')->with('success','Fitur created successfully');
    }

    public function edit($id)
    {
        $fiturkami = FiturKami::find($id);
        $pageTitle = 'Edit Data Fitur ' . $fiturkami->title_fiturkami;
        return view('backpage.fiturkami.edit', compact('fiturkami', 'pageTitle'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title_fiturkami' => 'required',
            'description' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,svg,gif',
            // Add validation for other fields as needed
        ]);

        $fiturkami = FiturKami::find($id);

        if($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads','public');
            $fiturkami->update([
                'image' => $imagePath,
            ]);
        }

        $fiturkami->update([
            'title_fiturkami' => $validatedData['title_fiturkami'],
            'description' => $validatedData['description'],
        ]);

        return redirect()->route('admin.fiturkami.index')->with('success', 'Fitur kami updated successfully');
    }

    public function delete($id)
    {
        $fiturkami = FiturKami::findOrFail($id);
        $fiturkami->delete();

        return redirect()->route('admin.fiturkami.index')->with('success','Fitur Kami deleted successfully');
    }
}
