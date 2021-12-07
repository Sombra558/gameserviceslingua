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
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Apple','http://167.172.162.54/game/Mochila/Img/Manzana.png','en','http://167.172.162.54/game/Mochila/Audios/en/Manzana.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Whale','http://167.172.162.54/game/Mochila/Img/Ballena.png','en','http://167.172.162.54/game/Mochila/Audios/en/Ballena.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Flower','http://167.172.162.54/game/Mochila/Img/Flor.png','en','http://167.172.162.54/game/Mochila/Audios/en/Flor.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Grass','http://167.172.162.54/game/Mochila/Img/Pasto.png','en','http://167.172.162.54/game/Mochila/Audios/en/Pasto.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Pear','http://167.172.162.54/game/Mochila/Img/Pera.png','en','http://167.172.162.54/game/Mochila/Audios/en/Pera.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Star','http://167.172.162.54/game/Mochila/Img/Estrella.png','en','http://167.172.162.54/game/Mochila/Audios/en/Estrella.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Sun','http://167.172.162.54/game/Mochila/Img/Sol.png','en','http://167.172.162.54/game/Mochila/Audios/en/Sol.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Shirt','http://167.172.162.54/game/Mochila/Img/Camisa.png','en','http://167.172.162.54/game/Mochila/Audios/en/Camisa.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Ribbon','http://167.172.162.54/game/Mochila/Img/Lazo.png','en','http://167.172.162.54/game/Mochila/Audios/en/Lazo.mp3',1]);

        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Apple','http://167.172.162.54/game/Mochila/Img/Manzana.png','arg','http://167.172.162.54/game/Mochila/Audios/arg/Rojo.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Whale','http://167.172.162.54/game/Mochila/Img/Ballena.png','arg','http://167.172.162.54/game/Mochila/Audios/arg/Azul.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Flower','http://167.172.162.54/game/Mochila/Img/Flor.png','arg','http://167.172.162.54/game/Mochila/Audios/arg/Amarillo.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Grass','http://167.172.162.54/game/Mochila/Img/Pasto.png','arg','http://167.172.162.54/game/Mochila/Audios/arg/Verde.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Pear','http://167.172.162.54/game/Mochila/Img/Pera.png','arg','http://167.172.162.54/game/Mochila/Audios/arg/Verde.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Star','http://167.172.162.54/game/Mochila/Img/Estrella.png','arg','http://167.172.162.54/game/Mochila/Audios/arg/Amarillo.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Sun','http://167.172.162.54/game/Mochila/Img/Sol.png','arg','http://167.172.162.54/game/Mochila/Audios/arg/Amarillo.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Shirt','http://167.172.162.54/game/Mochila/Img/Camisa.png','arg','http://167.172.162.54/game/Mochila/Audios/arg/Azul.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Ribbon','http://167.172.162.54/game/Mochila/Img/Lazo.png','arg','http://167.172.162.54/game/Mochila/Audios/arg/Rojo.mp3',1]);

        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Apple','http://167.172.162.54/game/Mochila/Img/Manzana.png','mx','http://167.172.162.54/game/Mochila/Audios/mx/Rojo.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Whale','http://167.172.162.54/game/Mochila/Img/Ballena.png','mx','http://167.172.162.54/game/Mochila/Audios/mx/Azul.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Flower','http://167.172.162.54/game/Mochila/Img/Flor.png','mx','http://167.172.162.54/game/Mochila/Audios/mx/Amarillo.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Grass','http://167.172.162.54/game/Mochila/Img/Pasto.png','mx','http://167.172.162.54/game/Mochila/Audios/mx/Verde.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Pear','http://167.172.162.54/game/Mochila/Img/Pera.png','mx','http://167.172.162.54/game/Mochila/Audios/mx/Verde.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Star','http://167.172.162.54/game/Mochila/Img/Estrella.png','mx','http://167.172.162.54/game/Mochila/Audios/mx/Amarillo.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Sun','http://167.172.162.54/game/Mochila/Img/Sol.png','mx','http://167.172.162.54/game/Mochila/Audios/mx/Amarillo.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Shirt','http://167.172.162.54/game/Mochila/Img/Camisa.png','mx','http://167.172.162.54/game/Mochila/Audios/mx/Azul.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Ribbon','http://167.172.162.54/game/Mochila/Img/Lazo.png','mx','http://167.172.162.54/game/Mochila/Audios/mx/Rojo.mp3',1]);

        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Apple','http://167.172.162.54/game/Mochila/Img/Manzana.png','ch','http://167.172.162.54/game/Mochila/Audios/ch/Rojo.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Whale','http://167.172.162.54/game/Mochila/Img/Ballena.png','ch','http://167.172.162.54/game/Mochila/Audios/ch/Azul.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Flower','http://167.172.162.54/game/Mochila/Img/Flor.png','ch','http://167.172.162.54/game/Mochila/Audios/ch/Amarillo.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Grass','http://167.172.162.54/game/Mochila/Img/Pasto.png','ch','http://167.172.162.54/game/Mochila/Audios/ch/Verde.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Pear','http://167.172.162.54/game/Mochila/Img/Pera.png','ch','http://167.172.162.54/game/Mochila/Audios/ch/Verde.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Star','http://167.172.162.54/game/Mochila/Img/Estrella.png','ch','http://167.172.162.54/game/Mochila/Audios/ch/Amarillo.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Sun','http://167.172.162.54/game/Mochila/Img/Sol.png','ch','http://167.172.162.54/game/Mochila/Audios/ch/Amarillo.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Shirt','http://167.172.162.54/game/Mochila/Img/Camisa.png','ch','http://167.172.162.54/game/Mochila/Audios/ch/Azul.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Ribbon','http://167.172.162.54/game/Mochila/Img/Lazo.png','ch','http://167.172.162.54/game/Mochila/Audios/ch/Rojo.mp3',1]);

        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Apple','http://167.172.162.54/game/Mochila/Img/Manzana.png','hr','http://167.172.162.54/game/Mochila/Audios/hr/Rojo.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Whale','http://167.172.162.54/game/Mochila/Img/Ballena.png','hr','http://167.172.162.54/game/Mochila/Audios/hr/Azul.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Flower','http://167.172.162.54/game/Mochila/Img/Flor.png','hr','http://167.172.162.54/game/Mochila/Audios/hr/Amarillo.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Grass','http://167.172.162.54/game/Mochila/Img/Pasto.png','hr','http://167.172.162.54/game/Mochila/Audios/hr/Verde.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Pear','http://167.172.162.54/game/Mochila/Img/Pera.png','hr','http://167.172.162.54/game/Mochila/Audios/hr/Verde.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Star','http://167.172.162.54/game/Mochila/Img/Estrella.png','hr','http://167.172.162.54/game/Mochila/Audios/hr/Amarillo.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Sun','http://167.172.162.54/game/Mochila/Img/Sol.png','hr','http://167.172.162.54/game/Mochila/Audios/hr/Amarillo.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Shirt','http://167.172.162.54/game/Mochila/Img/Camisa.png','hr','http://167.172.162.54/game/Mochila/Audios/hr/Azul.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Ribbon','http://167.172.162.54/game/Mochila/Img/Lazo.png','hr','http://167.172.162.54/game/Mochila/Audios/hr/Rojo.mp3',1]);
    }
}