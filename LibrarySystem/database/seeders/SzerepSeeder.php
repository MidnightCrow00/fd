<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SzerepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('szerepek')->insert([
        ['id' => 0, 'nev' => 'admin'],
        ['id' => 1, 'nev' => 'konyvtaros'],
        ['id' => 2, 'nev' => 'raktaros'],
        ['id' => 3, 'nev' => 'felhasznalo'],
    ]);
}

}
