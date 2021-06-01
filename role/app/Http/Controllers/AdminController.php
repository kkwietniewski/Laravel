<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $data = DB::select('SELECT * FROM users');
        return view('homeAdmin')->with('name', $data);
    }
}
