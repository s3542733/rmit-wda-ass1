<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //

    public function index() {
        return view('users.index');
    }

    public function create() {
        $user = new User;
        return view('tickets.create', ['user' => $user]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required',
        ]);
        User::create($request->all());

        return redirect()->route('login')->with('success', 'Account created Successfully!');
    }

}
