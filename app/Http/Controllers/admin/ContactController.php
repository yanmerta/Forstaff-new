<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        $contact = 'Contact';
        // dd($data);
        return view('backpage.contact.index', compact('contacts','contact' ));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'buttom' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'description' => 'required',
            // Add validation for other fields as needed
        ]);

        $contact = Contact::find($id);

        $contact->update([
            'title' => $validatedData['title'],
            'subtitle' => $validatedData['subtitle'],
            'buttom' => $validatedData['buttom'],
            'telepon' => $validatedData['telepon'],
            'email' => $validatedData['email'],
            'description' => $validatedData['description'],
            // Update other fields as needed
        ]);

        return redirect()->back()->with('success', 'Contact data updated successfully');
    }
}
