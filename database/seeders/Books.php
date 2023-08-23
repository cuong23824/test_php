<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Books extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'author_id' => 1,
            'tile' => 'book1',
            'ISBN'=>'000001',
            'pub_year'=>2023,
            'avaliable'=>1,
        ]);
        DB::table('books')->insert([
            'author_id' => 2,
            'tile' => 'book2',
            'ISBN'=>'000002',
            'pub_year'=>2023,
            'avaliable'=>1,
        ]);
        DB::table('books')->insert([
            'author_id' => 3,
            'tile' => 'book3',
            'ISBN'=>'000003',
            'pub_year'=>2023,
            'avaliable'=>0,
        ]);
        DB::table('books')->insert([
            'author_id' => 4,
            'tile' => 'book4',
            'ISBN'=>'000004',
            'pub_year'=>2023,
            'avaliable'=>1,
        ]);
        DB::table('books')->insert([
            'author_id' => 5,
            'tile' => 'book5',
            'ISBN'=>'000005',
            'pub_year'=>2023,
            'avaliable'=>5,
        ]);
    }
}
