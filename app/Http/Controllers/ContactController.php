<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function indexsubmit(Request $req) {
        $this->validate($req,
            [
                'name' => 'required',
                'phone' => 'required'
            ]);

        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->phone = $req->input('phone');

        $contact->save();

        return redirect()->route('index');
    }

    public function subscriptionsubmit(Request $req) {
        $this->validate($req,
            [
                'name' => 'required',
                'phone' => 'required'
            ]);

        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->phone = $req->input('phone');

        $contact->save();

        return redirect()->route('subscription');
    }

    public function trainerssubmit(Request $req) {
        $this->validate($req,
            [
                'name' => 'required',
                'phone' => 'required'
            ]);

        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->phone = $req->input('phone');

        $contact->save();

        return redirect()->route('trainers');
    }


}
