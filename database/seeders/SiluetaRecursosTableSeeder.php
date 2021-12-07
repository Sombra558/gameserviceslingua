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

        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Apple','http://167.172.162.54/game/Silueta/Img/Manzana.png','arg','http://167.172.162.54/game/Silueta/Audios/arg/Rojo.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Whale','http://167.172.162.54/game/Silueta/Img/Ballena.png','arg','http://167.172.162.54/game/Silueta/Audios/arg/Azul.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Flower','http://167.172.162.54/game/Silueta/Img/Flor.png','arg','http://167.172.162.54/game/Silueta/Audios/arg/Amarillo.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Grass','http://167.172.162.54/game/Silueta/Img/Pasto.png','arg','http://167.172.162.54/game/Silueta/Audios/arg/Verde.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Pear','http://167.172.162.54/game/Silueta/Img/Pera.png','arg','http://167.172.162.54/game/Silueta/Audios/arg/Verde.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Star','http://167.172.162.54/game/Silueta/Img/Estrella.png','arg','http://167.172.162.54/game/Silueta/Audios/arg/Amarillo.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Sun','http://167.172.162.54/game/Silueta/Img/Sol.png','arg','http://167.172.162.54/game/Silueta/Audios/arg/Amarillo.mp3',1]);

        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Apple','http://167.172.162.54/game/Silueta/Img/Manzana.png','mx','http://167.172.162.54/game/Silueta/Audios/mx/Rojo.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Whale','http://167.172.162.54/game/Silueta/Img/Ballena.png','mx','http://167.172.162.54/game/Silueta/Audios/mx/Azul.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Flower','http://167.172.162.54/game/Silueta/Img/Flor.png','mx','http://167.172.162.54/game/Silueta/Audios/mx/Amarillo.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Grass','http://167.172.162.54/game/Silueta/Img/Pasto.png','mx','http://167.172.162.54/game/Silueta/Audios/mx/Verde.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Pear','http://167.172.162.54/game/Silueta/Img/Pera.png','mx','http://167.172.162.54/game/Silueta/Audios/mx/Verde.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Star','http://167.172.162.54/game/Silueta/Img/Estrella.png','mx','http://167.172.162.54/game/Silueta/Audios/mx/Amarillo.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Sun','http://167.172.162.54/game/Silueta/Img/Sol.png','mx','http://167.172.162.54/game/Silueta/Audios/mx/Amarillo.mp3',1]);

        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Apple','http://167.172.162.54/game/Silueta/Img/Manzana.png','hr','http://167.172.162.54/game/Silueta/Audios/hr/Rojo.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Whale','http://167.172.162.54/game/Silueta/Img/Ballena.png','hr','http://167.172.162.54/game/Silueta/Audios/hr/Azul.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Flower','http://167.172.162.54/game/Silueta/Img/Flor.png','hr','http://167.172.162.54/game/Silueta/Audios/hr/Amarillo.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Grass','http://167.172.162.54/game/Silueta/Img/Pasto.png','hr','http://167.172.162.54/game/Silueta/Audios/hr/Verde.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Pear','http://167.172.162.54/game/Silueta/Img/Pera.png','hr','http://167.172.162.54/game/Silueta/Audios/hr/Verde.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Star','http://167.172.162.54/game/Silueta/Img/Estrella.png','hr','http://167.172.162.54/game/Silueta/Audios/hr/Amarillo.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Sun','http://167.172.162.54/game/Silueta/Img/Sol.png','hr','http://167.172.162.54/game/Silueta/Audios/hr/Amarillo.mp3',1]);

        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Apple','http://167.172.162.54/game/Silueta/Img/Manzana.png','ch','http://167.172.162.54/game/Silueta/Audios/ch/Rojo.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Whale','http://167.172.162.54/game/Silueta/Img/Ballena.png','ch','http://167.172.162.54/game/Silueta/Audios/ch/Azul.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Flower','http://167.172.162.54/game/Silueta/Img/Flor.png','ch','http://167.172.162.54/game/Silueta/Audios/ch/Amarillo.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Grass','http://167.172.162.54/game/Silueta/Img/Pasto.png','ch','http://167.172.162.54/game/Silueta/Audios/ch/Verde.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Pear','http://167.172.162.54/game/Silueta/Img/Pera.png','ch','http://167.172.162.54/game/Silueta/Audios/ch/Verde.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Star','http://167.172.162.54/game/Silueta/Img/Estrella.png','ch','http://167.172.162.54/game/Silueta/Audios/ch/Amarillo.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Sun','http://167.172.162.54/game/Silueta/Img/Sol.png','ch','http://167.172.162.54/game/Silueta/Audios/ch/Amarillo.mp3',1]);
    }
}
