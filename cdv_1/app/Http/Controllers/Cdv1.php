<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cdv1 extends Controller
{
    public function shop(Request $req)
    {
        $path = $req->file('file')->store('file_upload');
        return ['path'=>$path, 'upload'=>'success'];
    }
}
