<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show($drive)
    {
        $drives = [
            'fdd' => "Dyskietka",
            'hdd' => "Dysk HDD",
            'ssd' => "Dysk SSD"
        ];

        // wszystkie dane z tablicy
        //dd($drives); 
        
        return $drives[$drive];
    }
}
