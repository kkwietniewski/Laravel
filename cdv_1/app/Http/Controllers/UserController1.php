<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController1 extends Controller
{
    public function index(Request $req)
    {
        // return $req->input();
        // return $req->query();
        // return $req->path();
        // return $req->url();
        // return $req->method();
        
        
        $req->validate(
            [
                    'address' => 'required',
                    'email' => 'required'
                ]
            );
        foreach ($req->all() as $key => $value){
            echo $key . ' - ' .$value . "<br>";
        }
        // return "Adres: " . $req->input('address') . "<br>Email: " . $req->input('email') . "<br>Token: " . $req->input('_token');


    }
}
