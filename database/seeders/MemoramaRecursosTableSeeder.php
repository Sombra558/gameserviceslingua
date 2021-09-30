<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MemoramaRecursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Apple','http://167.172.162.54/game/Memorama/Img/Manzana.png','en','http://167.172.162.54/game/Memorama/Audios/en/Manzana.mp3',1]);
        DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Whale','http://167.172.162.54/game/Memorama/Img/Ballena.png','en','http://167.172.162.54/game/Memorama/Audios/en/Ballena.mp3',1]);
        DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Flower','http://167.172.162.54/game/Memorama/Img/Flor.png','en','http://167.172.162.54/game/Memorama/Audios/en/Flor.mp3',1]);
        DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Grass','http://167.172.162.54/game/Memorama/Img/Pasto.png','en','http://167.172.162.54/game/Memorama/Audios/en/Pasto.mp3',1]);
        DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Pear','http://167.172.162.54/game/Memorama/Img/Pera.png','en','http://167.172.162.54/game/Memorama/Audios/en/Pera.mp3',1]);
        DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Star','http://167.172.162.54/game/Memorama/Img/Estrella.png','en','http://167.172.162.54/game/Memorama/Audios/en/Estrella.mp3',1]);
        DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Sun','http://167.172.162.54/game/Memorama/Img/Sol.png','en','http://167.172.162.54/game/Memorama/Audios/en/Sol.mp3',1]);
    }
}
