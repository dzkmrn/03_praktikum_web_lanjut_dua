<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_post')->insert([
            'nama'=>'Muhammad Dzaka Murran Rusid',
            'keterangan'=>'2141720075 - TI 2F - 16',
            'curhatan'=>'Turu login skripsian'
        ]);
    }
}
