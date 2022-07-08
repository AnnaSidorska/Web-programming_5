<?php

namespace App\Http\Controllers;

use App\Models\Help;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function contactsubmit(Request $req) {
        $this->validate($req,
            [
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required'
            ]);

        $help = new Help();
        $help->name = $req->input('name');
        $help->phone = $req->input('phone');
        $help->email = $req->input('email');

        $help->save();

        return redirect()->route('contacts')->with('success', 'Okey');
    }

    public function subscriptionsubmit(Request $req) {
        $this->validate($req,
            [
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required'
            ]);

        $help = new Help();
        $help->name = $req->input('name');
        $help->phone = $req->input('phone');
        $help->email = $req->input('email');

        $help->save();

        return redirect()->route('subscription')->with('success', 'Okey');
    }
}
