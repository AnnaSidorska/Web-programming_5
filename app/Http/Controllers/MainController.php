<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function show() {
        return view('index');
    }

    public function subscription() {
        return view('subscription');
    }

    public function trainers() {
        return view('trainers');
    }

    public function about_us() {
        return view('about_us');
    }

    public function contacts() {
        return view('contacts');
    }

}
