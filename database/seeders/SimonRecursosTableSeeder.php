<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SimonRecursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Apple','http://167.172.162.54/game/Simon/Img/Manzana.png','en','http://167.172.162.54/game/Simon/Audios/en/Manzana.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Whale','http://167.172.162.54/game/Simon/Img/Ballena.png','en','http://167.172.162.54/game/Simon/Audios/en/Ballena.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Flower','http://167.172.162.54/game/Simon/Img/Flor.png','en','http://167.172.162.54/game/Simon/Audios/en/Flor.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Grass','http://167.172.162.54/game/Simon/Img/Pasto.png','en','http://167.172.162.54/game/Simon/Audios/en/Pasto.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Pear','http://167.172.162.54/game/Simon/Img/Pera.png','en','http://167.172.162.54/game/Simon/Audios/en/Pera.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Star','http://167.172.162.54/game/Simon/Img/Estrella.png','en','http://167.172.162.54/game/Simon/Audios/en/Estrella.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Sun','http://167.172.162.54/game/Simon/Img/Sol.png','en','http://167.172.162.54/game/Simon/Audios/en/Sol.mp3',1]);
    }
}
