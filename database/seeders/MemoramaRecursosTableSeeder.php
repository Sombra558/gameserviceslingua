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

        DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Apple','http://167.172.162.54/game/Memorama/Img/Manzana.png','arg','http://167.172.162.54/game/Memorama/Audios/arg/Rojo.mp3',1]);
        DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Whale','http://167.172.162.54/game/Memorama/Img/Ballena.png','arg','http://167.172.162.54/game/Memorama/Audios/arg/Azul.mp3',1]);
        DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Flower','http://167.172.162.54/game/Memorama/Img/Flor.png','arg','http://167.172.162.54/game/Memorama/Audios/arg/Amarillo.mp3',1]);
        DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Grass','http://167.172.162.54/game/Memorama/Img/Pasto.png','arg','http://167.172.162.54/game/Memorama/Audios/arg/Verde.mp3',1]);

        DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Apple','http://167.172.162.54/game/Memorama/Img/Manzana.png','mx','http://167.172.162.54/game/Memorama/Audios/mx/Rojo.mp3',1]);
        DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Whale','http://167.172.162.54/game/Memorama/Img/Ballena.png','mx','http://167.172.162.54/game/Memorama/Audios/mx/Azul.mp3',1]);
        DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Flower','http://167.172.162.54/game/Memorama/Img/Flor.png','mx','http://167.172.162.54/game/Memorama/Audios/mx/Amarillo.mp3',1]);
        DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Grass','http://167.172.162.54/game/Memorama/Img/Pasto.png','mx','http://167.172.162.54/game/Memorama/Audios/mx/Verde.mp3',1]);

        DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Apple','http://167.172.162.54/game/Memorama/Img/Manzana.png','ch','http://167.172.162.54/game/Memorama/Audios/ch/Rojo.mp3',1]);
        DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Whale','http://167.172.162.54/game/Memorama/Img/Ballena.png','ch','http://167.172.162.54/game/Memorama/Audios/ch/Azul.mp3',1]);
        DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Flower','http://167.172.162.54/game/Memorama/Img/Flor.png','ch','http://167.172.162.54/game/Memorama/Audios/ch/Amarillo.mp3',1]);
        DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Grass','http://167.172.162.54/game/Memorama/Img/Pasto.png','ch','http://167.172.162.54/game/Memorama/Audios/ch/Verde.mp3',1]);

        DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Apple','http://167.172.162.54/game/Memorama/Img/Manzana.png','hr','http://167.172.162.54/game/Memorama/Audios/hr/Rojo.mp3',1]);
        DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Whale','http://167.172.162.54/game/Memorama/Img/Ballena.png','hr','http://167.172.162.54/game/Memorama/Audios/hr/Azul.mp3',1]);
        DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Flower','http://167.172.162.54/game/Memorama/Img/Flor.png','hr','http://167.172.162.54/game/Memorama/Audios/hr/Amarillo.mp3',1]);
        DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Grass','http://167.172.162.54/game/Memorama/Img/Pasto.png','hr','http://167.172.162.54/game/Memorama/Audios/hr/Verde.mp3',1]);


        //DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Pear','http://167.172.162.54/game/Memorama/Img/Pera.png','en','http://167.172.162.54/game/Memorama/Audios/en/Pera.mp3',1]);
        //DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Star','http://167.172.162.54/game/Memorama/Img/Estrella.png','en','http://167.172.162.54/game/Memorama/Audios/en/Estrella.mp3',1]);
        //DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Sun','http://167.172.162.54/game/Memorama/Img/Sol.png','en','http://167.172.162.54/game/Memorama/Audios/en/Sol.mp3',1]);
        //DB::insert('insert into memoramarecursos (Label, Image, idioma, Audio, memorama_id) values (?, ?, ?, ?, ?)', ['Ribbon','http://167.172.162.54/game/Memorama/Img/Lazo.png','en','http://167.172.162.54/game/Memorama/Audios/en/Lazo.mp3',1]);
    }
}
