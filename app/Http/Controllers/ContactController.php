<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create(Request $request)
    {
        $contact = new Contact;
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->city = $request->city;
        $contact->country = $request->country;
        $contact->job_title = $request->job_title;
        $contact->save();

        return redirect('contacts/index');
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->city = $request->city;
        $contact->country = $request->country;
        $contact->job_title = $request->job_title;
        $contact->save();

        return redirect('contacts/index');
    }


    public function delete($id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect('contacts/index');
    }
}
