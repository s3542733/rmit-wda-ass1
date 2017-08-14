<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function faq() {
        return view ('faq');
    }

    public function staff() {
        return view ('staff');
    }

    public function createTicket() {
        return view('createTicket');
    }

    public function home() {
        return view ('home');
    }
}
