<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contact extends Controller
{
    public function register(Request $req){
        
        $req->validate(
            [
                'name' => 'required | min:4',
                'email' => 'required | email',
                'password' => 'required | min:8 | max:15',
                'number' => 'required | numeric',
                'gender' => 'required'
            ],
            [
                'name.required' => 'Pole adres jest wymagane!',
                'name.min' => 'Pole adres musi mieć minimum 4 znaki!',
                'email.required' => 'Pole email jest wymagane!',
                'email.email' => 'Pole email musi być w odpowiedniej formie (xx@xx.xx)!',
                'password.required' => 'Pole hasło jest wymagane!',
                'password.min' => 'Pole hasło musi mieć conajmniej 8 znaków!',
                'password.max' => 'Pole hasło musi mieć najwyżej 15 znaków!',
                'number.required' => 'Pole numer jest wymagane!',
                'number.numeric' => 'Pole numer musi być wartością numeryczną!',
                'gender.required' => 'Pole gender jest wymagane!'
            ]
        );
        foreach ($req->all() as $key => $value){
            echo $key . ' - ' .$value . "<br>";
        }
    }
}
