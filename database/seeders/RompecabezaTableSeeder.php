<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RompecabezaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into rompecabezas (name) values (?)', ['Ballena']);
        DB::insert('insert into rompecabezas (name) values (?)', ['Camisa']);
        DB::insert('insert into rompecabezas (name) values (?)', ['Corazon']);
        DB::insert('insert into rompecabezas (name) values (?)', ['Estrella']);
        DB::insert('insert into rompecabezas (name) values (?)', ['Flor']);
        DB::insert('insert into rompecabezas (name) values (?)', ['Lazo']);
        DB::insert('insert into rompecabezas (name) values (?)', ['Manzana']);
        DB::insert('insert into rompecabezas (name) values (?)', ['Pasto']);
        DB::insert('insert into rompecabezas (name) values (?)', ['Pera']);
        DB::insert('insert into rompecabezas (name) values (?)', ['Sol']);
    }
}
