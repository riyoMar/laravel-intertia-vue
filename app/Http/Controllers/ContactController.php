<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function editContact(Contact $contact) {

        return inertia('AdminEditContact', ['contact' => $contact]);
    }

    public function updateContact(Request $request, Contact $contact) {

        $validated = $request->validate([
            'contact_link' => 'required'
        ]);

        $contact->update($validated);

        // $newLink = Contact::findOrFail($contact->id);
        // $newLink->contact_link = $request->contact_link;
        // $newLink->save();

        return redirect('admin-view');
    }

}
