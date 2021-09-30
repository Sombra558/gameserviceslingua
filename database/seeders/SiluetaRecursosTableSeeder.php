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
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Apple','http://167.172.162.54/game/Silueta/Img/Manzana.png','en','http://167.172.162.54/game/Silueta/Audios/en/Manzana.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Whale','http://167.172.162.54/game/Silueta/Img/Ballena.png','en','http://167.172.162.54/game/Silueta/Audios/en/Ballena.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Flower','http://167.172.162.54/game/Silueta/Img/Flor.png','en','http://167.172.162.54/game/Silueta/Audios/en/Flor.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Grass','http://167.172.162.54/game/Silueta/Img/Pasto.png','en','http://167.172.162.54/game/Silueta/Audios/en/Pasto.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Pear','http://167.172.162.54/game/Silueta/Img/Pera.png','en','http://167.172.162.54/game/Silueta/Audios/en/Pera.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Star','http://167.172.162.54/game/Silueta/Img/Estrella.png','en','http://167.172.162.54/game/Silueta/Audios/en/Estrella.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Sun','http://167.172.162.54/game/Silueta/Img/Sol.png','en','http://167.172.162.54/game/Silueta/Audios/en/Sol.mp3',1]);
    }
}
