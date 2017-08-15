<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home() {
        return view('home');
    }
    public function faq() {
        return view('faq');
    }
    public function ticketCreate () {
        return view('ticket.create');
    }
    public function staffCommand () {
        return view('staff.command');
    }

}
