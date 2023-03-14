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
            'nama'=>'Mohammad Izamul Fikri Fahmi',
            'keterangan'=>'2141720171 - TI 2F - 15',
            'curhatan'=>'Kuliah di Polinema sangatlah asik dan menyenangkan :D'
        ]);
    }
}
