<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function getHelp(Request $req) {
        $req->validate([
            'name' =>  'required',
            'phone' =>  array('required', 'regex:/^(0|\+380)\d{9}$/')
        ]);
        $name = $req->input('name');
        return view('getHelp', ['name' => $name]);
    }

    public function getSub(Request $req) {
        $req->validate([
            'name' =>  'required',
            'phone' =>  array('required', 'regex:/^(0|\+380)\d{9}$/'),
            'email' =>  array('required', 'regex:/[0-9a-z]+@[a-z]/'),
        ]);
        $name = $req->input('name');
        return view('getHelp', ['name' => $name]);
    }
}
