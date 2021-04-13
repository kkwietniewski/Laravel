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
        
        
        // $this->validate(
        //     $req, 
        //     ['address' => 'required'], 
        //     ['address.required' => 'Adres nie może być pusty']
        // );

        $req->validate(
            [
                'address' => 'required | min:4',
                'email' => 'required | email'
            ],
            [
                'address.required' => 'Pole adres jest wymagane!',
                'address.min' => 'Pole adres musi mieć minimum 4 znaki!',
                'email.required' => 'Pole email jest wymagane!',
                'email.email' => 'Pole email musi być w odpowiedniej formie (xx@xx.xx)!'
            ]
        );
        foreach ($req->all() as $key => $value){
            echo $key . ' - ' .$value . "<br>";
        }
        // return "Adres: " . $req->input('address') . "<br>Email: " . $req->input('email') . "<br>Token: " . $req->input('_token');


    }
}
