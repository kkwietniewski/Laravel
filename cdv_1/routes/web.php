<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('cdv', function () {
//     return view('cdv');
// });
Route::get('cdv', function () {
    return view('cdv' ,['name' => 'Janusz', 'surname' => 'Nowak', 'city' => 'Poznań']);
});


Route::get('pages/{site}', function ($site) {
    $pages = [
        'about' => 'Strona CDV',
        'contact' => 'Poznań; ul. Polna 10',
        'home' => 'Strona domowa'
    ];
    return $pages[$site];
});

Route::get('address/{city?}/{street?}/{zipCode?}', function (String $city = 'brak danych', String $street = "-", int $zipCode = null) {
    // echo "Miasto: ", $city;
    $zipCode = substr($zipCode, 0, 2)."-".substr($zipCode, 2, 3);
    echo <<<ADDRESS
        Kod pocztowy: $zipCode,
        Miasto: $city<br>
        Ulica: $street
        <hr>
ADDRESS;
});