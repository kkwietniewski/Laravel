<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Cdv;
use \App\Http\Controllers\CdvSite;
use \App\Http\Controllers\Contact;
use \App\Http\Controllers\Data;
use \App\Http\Controllers\ExchangeRate;
use \App\Http\Controllers\PageController;
use \App\Http\Controllers\UserController1;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\AdminController;
use \App\Http\Controllers\HomeController;

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
    return view('cdv', ['name' => 'Janusz', 'surname' => 'Nowak', 'city' => 'Poznań']);
});

Route::get('pages/{site}', function ($site) {
    $pages = [
        'about' => 'Strona CDV',
        'contact' => 'Poznań; ul. Polna 10',
        'home' => 'Strona domowa',
    ];
    return $pages[$site];
});

Route::get('address/{city?}/{street?}/{zipCode?}', function (String $city = 'brak danych', String $street = "-", int $zipCode = null) {
    // echo "Miasto: ", $city;
    if (is_null($zipCode)) {
        $zipCode = "brak";
    } else {
        $zipCode = substr($zipCode, 0, 2) . "-" . substr($zipCode, 2, 3);
    }
    echo <<<ADDRESS
        Kod pocztowy: $zipCode,
        Miasto: $city<br>
        Ulica: $street
        <hr>
ADDRESS;
})->name('address');

Route::redirect('adres/{city?}/{street?}/{zipCode?}', 'address/{city?}/{street?}/{zipCode?}');

Route::prefix('admin')->group(function () {
    Route::get('/home/{name}', function (String $name) {
        echo "<h3>Witaj $name na stronie administracyjnej</h3>";
    });

    Route::get('/users', function () {
        echo "<h3>Użytkownicy systemu</h3>";
    });
});

Route::redirect('/admin/{name}', '/admin/home/{name}');

Route::get('/user/{age}', function (int $age) {
    echo "Wiek $age";
})->where(['age' => '[0-9]+']);

Route::get('/loop', function () {
    $cars = [
        ['mark' => 'Ferrari', 'model' => 'F430', 'color' => 'red'],
        ['mark' => 'Fiat', 'model' => '126p', 'color' => 'white'],
        ['mark' => 'Porsche', 'model' => 'Pannamera', 'color' => 'black'],
    ];

    return view('loop', ['cars' => $cars]);
});

//Laravel 7
// Route::get('/site', "CdvSite@index");

Route::get('/site', [CdvSite::class, 'index']);

Route::get('/drives/{drive}', [PageController::class, 'show']);

Route::get('blade', function () {
    return view('szablon');
});

// Route::get('userform', function(){
//     return view('userform');
// });

Route::view('userform', 'userform');

Route::get('usercontroller', [UserController::class, 'account']);

Route::view('user', 'user');

Route::get('usercontroller1', [UserController1::class, 'index']);

Route::view('contactform', 'contactform');

Route::get('Contact', [Contact::class, 'register']);
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('logout', [HomeController::class, 'logout']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('data', [Data::class, 'getPosts']);

Route::get('album', [Data::class, 'getAlbums']);

Route::get('kursy', [ExchangeRate::class, 'getRate']);

Route::view('kalkulatorwalut', 'ratecalc');

Route::get('ExchangeRate', [ExchangeRate::class, 'calcRate']);
Auth::routes();

Route::get('db', [Cdv::class, 'index']);

Route::get('profile/{lang}', function ($lang) {
    if (!in_array($lang, ['en', 'pl'])) {
        abort(400);
    }

    App::setLocale($lang);
    return view('profile');
});


Route::get('user', [UserController::class, 'index'])->name('user');
Route::get('admin', [AdminController::class, 'index'])->name('admin');