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
         
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Apple','https://app.wabim.com/game/Simon/Img/Manzana.png','en','https://app.wabim.com/game/Simon/Audios/en/Manzana.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Whale','https://app.wabim.com/game/Simon/Img/Ballena.png','en','https://app.wabim.com/game/Simon/Audios/en/Ballena.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Flower','https://app.wabim.com/game/Simon/Img/Flor.png','en','https://app.wabim.com/game/Simon/Audios/en/Flor.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Grass','https://app.wabim.com/game/Simon/Img/Pasto.png','en','https://app.wabim.com/game/Simon/Audios/en/Pasto.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Pear','https://app.wabim.com/game/Simon/Img/Pera.png','en','https://app.wabim.com/game/Simon/Audios/en/Pera.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Star','https://app.wabim.com/game/Simon/Img/Estrella.png','en','https://app.wabim.com/game/Simon/Audios/en/Estrella.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Sun','https://app.wabim.com/game/Simon/Img/Sol.png','en','https://app.wabim.com/game/Simon/Audios/en/Sol.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Shirt','https://app.wabim.com/game/Simon/Img/Camisa.png','en','https://app.wabim.com/game/Simon/Audios/en/Camisa.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Ribbon','https://app.wabim.com/game/Simon/Img/Lazo.png','en','https://app.wabim.com/game/Simon/Audios/en/Lazo.mp3',1]);

        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Apple','https://app.wabim.com/game/Simon/Img/Manzana.png','arg','https://app.wabim.com/game/Simon/Audios/arg/Rojo.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Whale','https://app.wabim.com/game/Simon/Img/Ballena.png','arg','https://app.wabim.com/game/Simon/Audios/arg/Azul.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Flower','https://app.wabim.com/game/Simon/Img/Flor.png','arg','https://app.wabim.com/game/Simon/Audios/arg/Amarillo.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Grass','https://app.wabim.com/game/Simon/Img/Pasto.png','arg','https://app.wabim.com/game/Simon/Audios/arg/Verde.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Pear','https://app.wabim.com/game/Simon/Img/Pera.png','arg','https://app.wabim.com/game/Simon/Audios/arg/Verde.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Star','https://app.wabim.com/game/Simon/Img/Estrella.png','arg','https://app.wabim.com/game/Simon/Audios/arg/Amarillo.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Sun','https://app.wabim.com/game/Simon/Img/Sol.png','arg','https://app.wabim.com/game/Simon/Audios/arg/Amarillo.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Shirt','https://app.wabim.com/game/Simon/Img/Camisa.png','arg','https://app.wabim.com/game/Simon/Audios/arg/Azul.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Ribbon','https://app.wabim.com/game/Simon/Img/Lazo.png','arg','https://app.wabim.com/game/Simon/Audios/arg/Rojo.mp3',1]);
        
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Apple','https://app.wabim.com/game/Simon/Img/Manzana.png','mx','https://app.wabim.com/game/Simon/Audios/mx/Rojo.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Whale','https://app.wabim.com/game/Simon/Img/Ballena.png','mx','https://app.wabim.com/game/Simon/Audios/mx/Azul.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Flower','https://app.wabim.com/game/Simon/Img/Flor.png','mx','https://app.wabim.com/game/Simon/Audios/mx/Amarillo.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Grass','https://app.wabim.com/game/Simon/Img/Pasto.png','mx','https://app.wabim.com/game/Simon/Audios/mx/Verde.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Pear','https://app.wabim.com/game/Simon/Img/Pera.png','mx','https://app.wabim.com/game/Simon/Audios/mx/Verde.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Star','https://app.wabim.com/game/Simon/Img/Estrella.png','mx','https://app.wabim.com/game/Simon/Audios/mx/Amarillo.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Sun','https://app.wabim.com/game/Simon/Img/Sol.png','mx','https://app.wabim.com/game/Simon/Audios/mx/Amarillo.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Shirt','https://app.wabim.com/game/Simon/Img/Camisa.png','mx','https://app.wabim.com/game/Simon/Audios/mx/Azul.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Ribbon','https://app.wabim.com/game/Simon/Img/Lazo.png','mx','https://app.wabim.com/game/Simon/Audios/mx/Rojo.mp3',1]);
        
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Apple','https://app.wabim.com/game/Simon/Img/Manzana.png','hr','https://app.wabim.com/game/Simon/Audios/hr/Rojo.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Whale','https://app.wabim.com/game/Simon/Img/Ballena.png','hr','https://app.wabim.com/game/Simon/Audios/hr/Azul.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Flower','https://app.wabim.com/game/Simon/Img/Flor.png','hr','https://app.wabim.com/game/Simon/Audios/hr/Amarillo.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Grass','https://app.wabim.com/game/Simon/Img/Pasto.png','hr','https://app.wabim.com/game/Simon/Audios/hr/Verde.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Pear','https://app.wabim.com/game/Simon/Img/Pera.png','hr','https://app.wabim.com/game/Simon/Audios/hr/Verde.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Star','https://app.wabim.com/game/Simon/Img/Estrella.png','hr','https://app.wabim.com/game/Simon/Audios/hr/Amarillo.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Sun','https://app.wabim.com/game/Simon/Img/Sol.png','hr','https://app.wabim.com/game/Simon/Audios/hr/Amarillo.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Shirt','https://app.wabim.com/game/Simon/Img/Camisa.png','hr','https://app.wabim.com/game/Simon/Audios/hr/Azul.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Ribbon','https://app.wabim.com/game/Simon/Img/Lazo.png','hr','https://app.wabim.com/game/Simon/Audios/hr/Rojo.mp3',1]);

        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Apple','https://app.wabim.com/game/Simon/Img/Manzana.png','ch','https://app.wabim.com/game/Simon/Audios/ch/Rojo.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Whale','https://app.wabim.com/game/Simon/Img/Ballena.png','ch','https://app.wabim.com/game/Simon/Audios/ch/Azul.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Flower','https://app.wabim.com/game/Simon/Img/Flor.png','ch','https://app.wabim.com/game/Simon/Audios/ch/Amarillo.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Grass','https://app.wabim.com/game/Simon/Img/Pasto.png','ch','https://app.wabim.com/game/Simon/Audios/ch/Verde.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Pear','https://app.wabim.com/game/Simon/Img/Pera.png','ch','https://app.wabim.com/game/Simon/Audios/ch/Verde.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Star','https://app.wabim.com/game/Simon/Img/Estrella.png','ch','https://app.wabim.com/game/Simon/Audios/ch/Amarillo.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Sun','https://app.wabim.com/game/Simon/Img/Sol.png','ch','https://app.wabim.com/game/Simon/Audios/ch/Amarillo.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Shirt','https://app.wabim.com/game/Simon/Img/Camisa.png','ch','https://app.wabim.com/game/Simon/Audios/ch/Azul.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Ribbon','https://app.wabim.com/game/Simon/Img/Lazo.png','ch','https://app.wabim.com/game/Simon/Audios/ch/Rojo.mp3',1]);
        
        
    }
}
