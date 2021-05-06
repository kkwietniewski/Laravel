<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ExchangeRate extends Controller
{
    public function getRate()
    {
        // return Http::get('https://jsonplaceholder.typicode.com/posts')->body();
        $rates =  Http::get('http://api.nbp.pl/api/exchangerates/tables/C')->json();
        
        return view('exchangerate', ['rates' => $rates]);
    }

    public function calcRate(Request $req)
    {
        $amount = $req->amount;
        $currency = $req->currency;
        $resultTable =  Http::get("http:/api.nbp.pl/api/exchangerates/rates/c/$currency/today/")->json();
        return view('ratecalc', ['resultTable' => $resultTable, 'currency' => $currency, 'amount' => $amount]);
    }
}
