<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Data extends Controller
{
    public function getPosts()
    {
        // return Http::get('https://jsonplaceholder.typicode.com/posts')->body();
        $postsTab =  Http::get('https://jsonplaceholder.typicode.com/posts')->json();
        
        return view('data', ['postsTab' => $postsTab]);
    }

    public function getAlbums()
    {
        // return Http::get('https://jsonplaceholder.typicode.com/posts')->body();
        $albumsTab =  Http::get('https://jsonplaceholder.typicode.com/photos')->json();
        
        return view('album', ['albumsTab' => $albumsTab]);
    }
}
