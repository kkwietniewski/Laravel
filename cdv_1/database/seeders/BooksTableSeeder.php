<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert(
            [
                'name' => 'PHP i MySql',
                'year' => '2017',
                'publication_place' => 'Poznań',
                'pages' => '712',
                'price' => '65.40',
            ]
        );

        DB::table('books')->insert(
            [
                'name' => 'PHP i MySql 2',
                'year' => '2019',
                'publication_place' => 'Poznań',
                'pages' => '712',
                'price' => '712',
            ]
        );
    }
}
