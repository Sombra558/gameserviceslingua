<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SiluetaRecursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Apple','/game/Silueta/Img/Manzana.png','en','/game/Silueta/Audios/en/Manzana.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Whale','/game/Silueta/Img/Ballena.png','en','/game/Silueta/Audios/en/Ballena.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Flower','/game/Silueta/Img/Flor.png','en','/game/Silueta/Audios/en/Flor.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Grass','/game/Silueta/Img/Pasto.png','en','/game/Silueta/Audios/en/Pasto.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Pear','/game/Silueta/Img/Pera.png','en','/game/Silueta/Audios/en/Pera.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Star','/game/Silueta/Img/Estrella.png','en','/game/Silueta/Audios/en/Estrella.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Sun','/game/Silueta/Img/Sol.png','en','/game/Silueta/Audios/en/Sol.mp3',1]);
    }
}
