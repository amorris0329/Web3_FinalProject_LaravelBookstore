<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function contact() {
        return view('contact');
    }

    public function addContact(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|min:0|max:35',
            'email' => 'required|email',
            'subject' => 'required|string|min:1|max:50',
            'content' => 'required|string|min:1|max:500',
        ]);

        Contact::create($validated);

        return redirect()->route('contact');
    }

    public function close(Contact $contact) {
        $contact->delete();
        return redirect()->route('login.employee');
    }
}
