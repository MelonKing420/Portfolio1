<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $contact = Contact::all();

        return view('contact.index', [
            'contact' => $contact,
        ]);
    }
    public function create()
    {
        return view('contact',);
    }
    public function store(Request $request) {



        $validated = $request->validate([
            'name' => 'required|max:255|min:2',
            'lastname' => 'required|max:255|min:2',
            'email' => 'required|email|max:255|min:2',
            'message' => 'required|max:255|min:2',

        ]);
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->lastname = $request->input('lastname');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->save();
        return redirect()->route('contact.create')->with('status', 'Thank you very much for your message');
    }

        public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('dashboard');
    }
}
