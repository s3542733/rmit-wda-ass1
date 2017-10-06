<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    //
    public function home() {
        return view('home');
    }
    public function faq() {
        return view('faq');
    }
    public function ticket() {
        return view('tickets');
    }

    public function create() {
        return view('tickets.create');
    }
}
