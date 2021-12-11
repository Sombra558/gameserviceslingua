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
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Apple','https://app.wabim.com/game/Silueta/Img/Manzana.png','en','https://app.wabim.com/game/Silueta/Audios/en/Manzana.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Whale','https://app.wabim.com/game/Silueta/Img/Ballena.png','en','https://app.wabim.com/game/Silueta/Audios/en/Ballena.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Flower','https://app.wabim.com/game/Silueta/Img/Flor.png','en','https://app.wabim.com/game/Silueta/Audios/en/Flor.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Grass','https://app.wabim.com/game/Silueta/Img/Pasto.png','en','https://app.wabim.com/game/Silueta/Audios/en/Pasto.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Pear','https://app.wabim.com/game/Silueta/Img/Pera.png','en','https://app.wabim.com/game/Silueta/Audios/en/Pera.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Star','https://app.wabim.com/game/Silueta/Img/Estrella.png','en','https://app.wabim.com/game/Silueta/Audios/en/Estrella.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Sun','https://app.wabim.com/game/Silueta/Img/Sol.png','en','https://app.wabim.com/game/Silueta/Audios/en/Sol.mp3',1]);

        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Apple','https://app.wabim.com/game/Silueta/Img/Manzana.png','arg','https://app.wabim.com/game/Silueta/Audios/arg/Rojo.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Whale','https://app.wabim.com/game/Silueta/Img/Ballena.png','arg','https://app.wabim.com/game/Silueta/Audios/arg/Azul.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Flower','https://app.wabim.com/game/Silueta/Img/Flor.png','arg','https://app.wabim.com/game/Silueta/Audios/arg/Amarillo.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Grass','https://app.wabim.com/game/Silueta/Img/Pasto.png','arg','https://app.wabim.com/game/Silueta/Audios/arg/Verde.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Pear','https://app.wabim.com/game/Silueta/Img/Pera.png','arg','https://app.wabim.com/game/Silueta/Audios/arg/Verde.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Star','https://app.wabim.com/game/Silueta/Img/Estrella.png','arg','https://app.wabim.com/game/Silueta/Audios/arg/Amarillo.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Sun','https://app.wabim.com/game/Silueta/Img/Sol.png','arg','https://app.wabim.com/game/Silueta/Audios/arg/Amarillo.mp3',1]);

        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Apple','https://app.wabim.com/game/Silueta/Img/Manzana.png','mx','https://app.wabim.com/game/Silueta/Audios/mx/Rojo.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Whale','https://app.wabim.com/game/Silueta/Img/Ballena.png','mx','https://app.wabim.com/game/Silueta/Audios/mx/Azul.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Flower','https://app.wabim.com/game/Silueta/Img/Flor.png','mx','https://app.wabim.com/game/Silueta/Audios/mx/Amarillo.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Grass','https://app.wabim.com/game/Silueta/Img/Pasto.png','mx','https://app.wabim.com/game/Silueta/Audios/mx/Verde.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Pear','https://app.wabim.com/game/Silueta/Img/Pera.png','mx','https://app.wabim.com/game/Silueta/Audios/mx/Verde.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Star','https://app.wabim.com/game/Silueta/Img/Estrella.png','mx','https://app.wabim.com/game/Silueta/Audios/mx/Amarillo.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Sun','https://app.wabim.com/game/Silueta/Img/Sol.png','mx','https://app.wabim.com/game/Silueta/Audios/mx/Amarillo.mp3',1]);

        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Apple','https://app.wabim.com/game/Silueta/Img/Manzana.png','hr','https://app.wabim.com/game/Silueta/Audios/hr/Rojo.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Whale','https://app.wabim.com/game/Silueta/Img/Ballena.png','hr','https://app.wabim.com/game/Silueta/Audios/hr/Azul.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Flower','https://app.wabim.com/game/Silueta/Img/Flor.png','hr','https://app.wabim.com/game/Silueta/Audios/hr/Amarillo.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Grass','https://app.wabim.com/game/Silueta/Img/Pasto.png','hr','https://app.wabim.com/game/Silueta/Audios/hr/Verde.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Pear','https://app.wabim.com/game/Silueta/Img/Pera.png','hr','https://app.wabim.com/game/Silueta/Audios/hr/Verde.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Star','https://app.wabim.com/game/Silueta/Img/Estrella.png','hr','https://app.wabim.com/game/Silueta/Audios/hr/Amarillo.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Sun','https://app.wabim.com/game/Silueta/Img/Sol.png','hr','https://app.wabim.com/game/Silueta/Audios/hr/Amarillo.mp3',1]);

        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Apple','https://app.wabim.com/game/Silueta/Img/Manzana.png','ch','https://app.wabim.com/game/Silueta/Audios/ch/Rojo.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Whale','https://app.wabim.com/game/Silueta/Img/Ballena.png','ch','https://app.wabim.com/game/Silueta/Audios/ch/Azul.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Flower','https://app.wabim.com/game/Silueta/Img/Flor.png','ch','https://app.wabim.com/game/Silueta/Audios/ch/Amarillo.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Grass','https://app.wabim.com/game/Silueta/Img/Pasto.png','ch','https://app.wabim.com/game/Silueta/Audios/ch/Verde.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Pear','https://app.wabim.com/game/Silueta/Img/Pera.png','ch','https://app.wabim.com/game/Silueta/Audios/ch/Verde.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Star','https://app.wabim.com/game/Silueta/Img/Estrella.png','ch','https://app.wabim.com/game/Silueta/Audios/ch/Amarillo.mp3',1]);
        DB::insert('insert into siluetasrecursos (Label, Image, idioma, Audio, silueta_id) values (?, ?, ?, ?, ?)', ['Sun','https://app.wabim.com/game/Silueta/Img/Sol.png','ch','https://app.wabim.com/game/Silueta/Audios/ch/Amarillo.mp3',1]);
    }
}
