<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResourcesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into recursos (Label, Image, Audio, rompecabeza_id) values (?, ?, ?, ?)', ['Pieza 1','http://147.182.226.120/game/Images/Ballena/1.png','audio1',1]);
        DB::insert('insert into recursos (Label, Image, Audio, rompecabeza_id) values (?, ?, ?, ?)', ['Pieza 2','http://147.182.226.120/game/Images/Ballena/2.png','audio2',1]);
        DB::insert('insert into recursos (Label, Image, Audio, rompecabeza_id) values (?, ?, ?, ?)', ['Pieza 3','http://147.182.226.120/game/Images/Ballena/3.png','audio3',1]);
        DB::insert('insert into recursos (Label, Image, Audio, rompecabeza_id) values (?, ?, ?, ?)', ['Pieza 4','http://147.182.226.120/game/Images/Ballena/4.png','audio4',1]);
        DB::insert('insert into recursos (Label, Image, Audio, rompecabeza_id) values (?, ?, ?, ?)', ['Pieza 5','http://147.182.226.120/game/Images/Ballena/5.png','audio5',1]);
        DB::insert('insert into recursos (Label, Image, Audio, rompecabeza_id) values (?, ?, ?, ?)', ['Pieza 6','http://147.182.226.120/game/Images/Ballena/6.png','audio6',1]);
        DB::insert('insert into recursos (Label, Image, Audio, rompecabeza_id) values (?, ?, ?, ?)', ['Pieza 7','http://147.182.226.120/game/Images/Ballena/7.png','audio7',1]);
        DB::insert('insert into recursos (Label, Image, Audio, rompecabeza_id) values (?, ?, ?, ?)', ['Pieza 8','http://147.182.226.120/game/Images/Ballena/8.png','audio8',1]);
        DB::insert('insert into recursos (Label, Image, Audio, rompecabeza_id) values (?, ?, ?, ?)', ['Pieza 9','http://147.182.226.120/game/Images/Ballena/9.png','audio9',1]);
    }
}
