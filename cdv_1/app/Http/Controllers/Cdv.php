<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class Cdv extends Controller
{
    public function index()
    {
        // $data = DB::table('user')->count();
        // return DB::select('SELECT COUNT(id) as users
        // FROM `user`');
        // echo $data;
        // return DB::table('user')->get();

        // return DB::table('user')
        //     ->where('surname', 'Pawlak')
        //     ->get();

        // $data = DB::table('user')->find(2);
        // $data = DB::table('user')->first();

        // print_r($data);

        // return DB::table('user')
        //     ->where('id', 2)
        //     ->delete();

        // return DB::table('user')
        //     ->insert(
        //         [
        //             'name' => 'Krzysztof',
        //             'surname' => 'Nowak',
        //             'birthday' => '1998-05-22',
        //         ]
        //     );

        // $data = DB::table('user')
        //     ->where('name', 'Krystyna')
        //     ->update(['name' => 'Paulina']);

        // print_r($data);

        // return DB::table('user')->max('height');
        // return DB::table('user')->min('height');
        // return DB::table('user')->sum('height');

        // $data = DB::table('user')->get('height');
        // echo '<pre>';
        // printf($data);
        // echo '</pre>';

        // $data = DB::table('user')
        //     ->join('city', 'cityid', 'city.id')
        //     ->get();
        // echo '<pre>';
        // printf($data);
        // echo '</pre>';

        $data = DB::table('user')
            ->select('user.name', 'user.surname', 'city.city', 'state.state')
            ->Join('city', 'city_id', 'city.id')
            ->Join('state', 'state_id', 'state.id')
            ->where('city.city', 'Poznań')
            ->get();
        echo '<pre>';
        printf($data);
        echo '</pre>';

    }
}
