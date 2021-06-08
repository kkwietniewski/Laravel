<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    public function index(Request $req)
    {
        // return $req->input();

        $req->session()->put('data', $req->input());

        // return $req->session()->get('data');

        return redirect('profile');
    }
}
