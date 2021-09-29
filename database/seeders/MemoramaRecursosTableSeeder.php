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
        DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Apple','/game/Memorama/Img/Manzana.png','en','/game/Memorama/Audios/en/Manzana.mp3',1]);
        DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Whale','/game/Memorama/Img/Ballena.png','en','/game/Memorama/Audios/en/Ballena.mp3',1]);
        DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Flower','/game/Memorama/Img/Flor.png','en','/game/Memorama/Audios/en/Flor.mp3',1]);
        DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Grass','/game/Memorama/Img/Pasto.png','en','/game/Memorama/Audios/en/Pasto.mp3',1]);
        DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Pear','/game/Memorama/Img/Pera.png','en','/game/Memorama/Audios/en/Pera.mp3',1]);
        DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Star','/game/Memorama/Img/Estrella.png','en','/game/Memorama/Audios/en/Estrella.mp3',1]);
        DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Sun','/game/Memorama/Img/Sol.png','en','/game/Memorama/Audios/en/Sol.mp3',1]);
    }
}
