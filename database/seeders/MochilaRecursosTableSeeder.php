<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MochilaRecursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Apple','https://app.wabim.com/game/Mochila/Img/Manzana.png','en','https://app.wabim.com/game/Mochila/Audios/en/Manzana.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Whale','https://app.wabim.com/game/Mochila/Img/Ballena.png','en','https://app.wabim.com/game/Mochila/Audios/en/Ballena.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Flower','https://app.wabim.com/game/Mochila/Img/Flor.png','en','https://app.wabim.com/game/Mochila/Audios/en/Flor.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Grass','https://app.wabim.com/game/Mochila/Img/Pasto.png','en','https://app.wabim.com/game/Mochila/Audios/en/Pasto.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Pear','https://app.wabim.com/game/Mochila/Img/Pera.png','en','https://app.wabim.com/game/Mochila/Audios/en/Pera.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Star','https://app.wabim.com/game/Mochila/Img/Estrella.png','en','https://app.wabim.com/game/Mochila/Audios/en/Estrella.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Sun','https://app.wabim.com/game/Mochila/Img/Sol.png','en','https://app.wabim.com/game/Mochila/Audios/en/Sol.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Shirt','https://app.wabim.com/game/Mochila/Img/Camisa.png','en','https://app.wabim.com/game/Mochila/Audios/en/Camisa.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Ribbon','https://app.wabim.com/game/Mochila/Img/Lazo.png','en','https://app.wabim.com/game/Mochila/Audios/en/Lazo.mp3',1]);

        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Apple','https://app.wabim.com/game/Mochila/Img/Manzana.png','arg','https://app.wabim.com/game/Mochila/Audios/arg/Rojo.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Whale','https://app.wabim.com/game/Mochila/Img/Ballena.png','arg','https://app.wabim.com/game/Mochila/Audios/arg/Azul.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Flower','https://app.wabim.com/game/Mochila/Img/Flor.png','arg','https://app.wabim.com/game/Mochila/Audios/arg/Amarillo.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Grass','https://app.wabim.com/game/Mochila/Img/Pasto.png','arg','https://app.wabim.com/game/Mochila/Audios/arg/Verde.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Pear','https://app.wabim.com/game/Mochila/Img/Pera.png','arg','https://app.wabim.com/game/Mochila/Audios/arg/Verde.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Star','https://app.wabim.com/game/Mochila/Img/Estrella.png','arg','https://app.wabim.com/game/Mochila/Audios/arg/Amarillo.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Sun','https://app.wabim.com/game/Mochila/Img/Sol.png','arg','https://app.wabim.com/game/Mochila/Audios/arg/Amarillo.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Shirt','https://app.wabim.com/game/Mochila/Img/Camisa.png','arg','https://app.wabim.com/game/Mochila/Audios/arg/Azul.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Ribbon','https://app.wabim.com/game/Mochila/Img/Lazo.png','arg','https://app.wabim.com/game/Mochila/Audios/arg/Rojo.mp3',1]);

        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Apple','https://app.wabim.com/game/Mochila/Img/Manzana.png','mx','https://app.wabim.com/game/Mochila/Audios/mx/Rojo.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Whale','https://app.wabim.com/game/Mochila/Img/Ballena.png','mx','https://app.wabim.com/game/Mochila/Audios/mx/Azul.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Flower','https://app.wabim.com/game/Mochila/Img/Flor.png','mx','https://app.wabim.com/game/Mochila/Audios/mx/Amarillo.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Grass','https://app.wabim.com/game/Mochila/Img/Pasto.png','mx','https://app.wabim.com/game/Mochila/Audios/mx/Verde.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Pear','https://app.wabim.com/game/Mochila/Img/Pera.png','mx','https://app.wabim.com/game/Mochila/Audios/mx/Verde.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Star','https://app.wabim.com/game/Mochila/Img/Estrella.png','mx','https://app.wabim.com/game/Mochila/Audios/mx/Amarillo.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Sun','https://app.wabim.com/game/Mochila/Img/Sol.png','mx','https://app.wabim.com/game/Mochila/Audios/mx/Amarillo.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Shirt','https://app.wabim.com/game/Mochila/Img/Camisa.png','mx','https://app.wabim.com/game/Mochila/Audios/mx/Azul.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Ribbon','https://app.wabim.com/game/Mochila/Img/Lazo.png','mx','https://app.wabim.com/game/Mochila/Audios/mx/Rojo.mp3',1]);

        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Apple','https://app.wabim.com/game/Mochila/Img/Manzana.png','ch','https://app.wabim.com/game/Mochila/Audios/ch/Rojo.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Whale','https://app.wabim.com/game/Mochila/Img/Ballena.png','ch','https://app.wabim.com/game/Mochila/Audios/ch/Azul.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Flower','https://app.wabim.com/game/Mochila/Img/Flor.png','ch','https://app.wabim.com/game/Mochila/Audios/ch/Amarillo.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Grass','https://app.wabim.com/game/Mochila/Img/Pasto.png','ch','https://app.wabim.com/game/Mochila/Audios/ch/Verde.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Pear','https://app.wabim.com/game/Mochila/Img/Pera.png','ch','https://app.wabim.com/game/Mochila/Audios/ch/Verde.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Star','https://app.wabim.com/game/Mochila/Img/Estrella.png','ch','https://app.wabim.com/game/Mochila/Audios/ch/Amarillo.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Sun','https://app.wabim.com/game/Mochila/Img/Sol.png','ch','https://app.wabim.com/game/Mochila/Audios/ch/Amarillo.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Shirt','https://app.wabim.com/game/Mochila/Img/Camisa.png','ch','https://app.wabim.com/game/Mochila/Audios/ch/Azul.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Ribbon','https://app.wabim.com/game/Mochila/Img/Lazo.png','ch','https://app.wabim.com/game/Mochila/Audios/ch/Rojo.mp3',1]);

        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Apple','https://app.wabim.com/game/Mochila/Img/Manzana.png','hr','https://app.wabim.com/game/Mochila/Audios/hr/Rojo.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Whale','https://app.wabim.com/game/Mochila/Img/Ballena.png','hr','https://app.wabim.com/game/Mochila/Audios/hr/Azul.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Flower','https://app.wabim.com/game/Mochila/Img/Flor.png','hr','https://app.wabim.com/game/Mochila/Audios/hr/Amarillo.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Grass','https://app.wabim.com/game/Mochila/Img/Pasto.png','hr','https://app.wabim.com/game/Mochila/Audios/hr/Verde.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Pear','https://app.wabim.com/game/Mochila/Img/Pera.png','hr','https://app.wabim.com/game/Mochila/Audios/hr/Verde.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Star','https://app.wabim.com/game/Mochila/Img/Estrella.png','hr','https://app.wabim.com/game/Mochila/Audios/hr/Amarillo.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Sun','https://app.wabim.com/game/Mochila/Img/Sol.png','hr','https://app.wabim.com/game/Mochila/Audios/hr/Amarillo.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Shirt','https://app.wabim.com/game/Mochila/Img/Camisa.png','hr','https://app.wabim.com/game/Mochila/Audios/hr/Azul.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Ribbon','https://app.wabim.com/game/Mochila/Img/Lazo.png','hr','https://app.wabim.com/game/Mochila/Audios/hr/Rojo.mp3',1]);
    }
}