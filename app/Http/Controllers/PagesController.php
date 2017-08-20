<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;

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

    public function staff() {
        $tickets = Ticket::all();
        return view('staff', compact('tickets'));
    }
}
