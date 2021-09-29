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
         
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Apple','/game/Simon/Img/Manzana.png','en','/game/Simon/Audios/en/Manzana.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Whale','/game/Simon/Img/Ballena.png','en','/game/Simon/Audios/en/Ballena.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Flower','/game/Simon/Img/Flor.png','en','/game/Simon/Audios/en/Flor.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Grass','/game/Simon/Img/Pasto.png','en','/game/Simon/Audios/en/Pasto.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Pear','/game/Simon/Img/Pera.png','en','/game/Simon/Audios/en/Pera.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Star','/game/Simon/Img/Estrella.png','en','/game/Simon/Audios/en/Estrella.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Sun','/game/Simon/Img/Sol.png','en','/game/Simon/Audios/en/Sol.mp3',1]);
    }
}
