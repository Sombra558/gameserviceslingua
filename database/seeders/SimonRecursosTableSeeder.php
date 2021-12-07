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
         
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Apple','http://167.172.162.54/game/Simon/Img/Manzana.png','en','http://167.172.162.54/game/Simon/Audios/en/Manzana.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Whale','http://167.172.162.54/game/Simon/Img/Ballena.png','en','http://167.172.162.54/game/Simon/Audios/en/Ballena.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Flower','http://167.172.162.54/game/Simon/Img/Flor.png','en','http://167.172.162.54/game/Simon/Audios/en/Flor.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Grass','http://167.172.162.54/game/Simon/Img/Pasto.png','en','http://167.172.162.54/game/Simon/Audios/en/Pasto.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Pear','http://167.172.162.54/game/Simon/Img/Pera.png','en','http://167.172.162.54/game/Simon/Audios/en/Pera.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Star','http://167.172.162.54/game/Simon/Img/Estrella.png','en','http://167.172.162.54/game/Simon/Audios/en/Estrella.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Sun','http://167.172.162.54/game/Simon/Img/Sol.png','en','http://167.172.162.54/game/Simon/Audios/en/Sol.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Shirt','http://167.172.162.54/game/Simon/Img/Camisa.png','en','http://167.172.162.54/game/Simon/Audios/en/Camisa.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Ribbon','http://167.172.162.54/game/Simon/Img/Lazo.png','en','http://167.172.162.54/game/Simon/Audios/en/Lazo.mp3',1]);

        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Apple','http://167.172.162.54/game/Simon/Img/Manzana.png','arg','http://167.172.162.54/game/Simon/Audios/arg/Rojo.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Whale','http://167.172.162.54/game/Simon/Img/Ballena.png','arg','http://167.172.162.54/game/Simon/Audios/arg/Azul.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Flower','http://167.172.162.54/game/Simon/Img/Flor.png','arg','http://167.172.162.54/game/Simon/Audios/arg/Amarillo.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Grass','http://167.172.162.54/game/Simon/Img/Pasto.png','arg','http://167.172.162.54/game/Simon/Audios/arg/Verde.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Pear','http://167.172.162.54/game/Simon/Img/Pera.png','arg','http://167.172.162.54/game/Simon/Audios/arg/Verde.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Star','http://167.172.162.54/game/Simon/Img/Estrella.png','arg','http://167.172.162.54/game/Simon/Audios/arg/Amarillo.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Sun','http://167.172.162.54/game/Simon/Img/Sol.png','arg','http://167.172.162.54/game/Simon/Audios/arg/Amarillo.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Shirt','http://167.172.162.54/game/Simon/Img/Camisa.png','arg','http://167.172.162.54/game/Simon/Audios/arg/Azul.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Ribbon','http://167.172.162.54/game/Simon/Img/Lazo.png','arg','http://167.172.162.54/game/Simon/Audios/arg/Rojo.mp3',1]);
        
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Apple','http://167.172.162.54/game/Simon/Img/Manzana.png','mx','http://167.172.162.54/game/Simon/Audios/mx/Rojo.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Whale','http://167.172.162.54/game/Simon/Img/Ballena.png','mx','http://167.172.162.54/game/Simon/Audios/mx/Azul.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Flower','http://167.172.162.54/game/Simon/Img/Flor.png','mx','http://167.172.162.54/game/Simon/Audios/mx/Amarillo.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Grass','http://167.172.162.54/game/Simon/Img/Pasto.png','mx','http://167.172.162.54/game/Simon/Audios/mx/Verde.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Pear','http://167.172.162.54/game/Simon/Img/Pera.png','mx','http://167.172.162.54/game/Simon/Audios/mx/Verde.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Star','http://167.172.162.54/game/Simon/Img/Estrella.png','mx','http://167.172.162.54/game/Simon/Audios/mx/Amarillo.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Sun','http://167.172.162.54/game/Simon/Img/Sol.png','mx','http://167.172.162.54/game/Simon/Audios/mx/Amarillo.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Shirt','http://167.172.162.54/game/Simon/Img/Camisa.png','mx','http://167.172.162.54/game/Simon/Audios/mx/Azul.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Ribbon','http://167.172.162.54/game/Simon/Img/Lazo.png','mx','http://167.172.162.54/game/Simon/Audios/mx/Rojo.mp3',1]);
        
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Apple','http://167.172.162.54/game/Simon/Img/Manzana.png','hr','http://167.172.162.54/game/Simon/Audios/hr/Rojo.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Whale','http://167.172.162.54/game/Simon/Img/Ballena.png','hr','http://167.172.162.54/game/Simon/Audios/hr/Azul.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Flower','http://167.172.162.54/game/Simon/Img/Flor.png','hr','http://167.172.162.54/game/Simon/Audios/hr/Amarillo.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Grass','http://167.172.162.54/game/Simon/Img/Pasto.png','hr','http://167.172.162.54/game/Simon/Audios/hr/Verde.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Pear','http://167.172.162.54/game/Simon/Img/Pera.png','hr','http://167.172.162.54/game/Simon/Audios/hr/Verde.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Star','http://167.172.162.54/game/Simon/Img/Estrella.png','hr','http://167.172.162.54/game/Simon/Audios/hr/Amarillo.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Sun','http://167.172.162.54/game/Simon/Img/Sol.png','hr','http://167.172.162.54/game/Simon/Audios/hr/Amarillo.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Shirt','http://167.172.162.54/game/Simon/Img/Camisa.png','hr','http://167.172.162.54/game/Simon/Audios/hr/Azul.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Ribbon','http://167.172.162.54/game/Simon/Img/Lazo.png','hr','http://167.172.162.54/game/Simon/Audios/hr/Rojo.mp3',1]);

        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Apple','http://167.172.162.54/game/Simon/Img/Manzana.png','ch','http://167.172.162.54/game/Simon/Audios/ch/Rojo.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Whale','http://167.172.162.54/game/Simon/Img/Ballena.png','ch','http://167.172.162.54/game/Simon/Audios/ch/Azul.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Flower','http://167.172.162.54/game/Simon/Img/Flor.png','ch','http://167.172.162.54/game/Simon/Audios/ch/Amarillo.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Grass','http://167.172.162.54/game/Simon/Img/Pasto.png','ch','http://167.172.162.54/game/Simon/Audios/ch/Verde.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Pear','http://167.172.162.54/game/Simon/Img/Pera.png','ch','http://167.172.162.54/game/Simon/Audios/ch/Verde.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Star','http://167.172.162.54/game/Simon/Img/Estrella.png','ch','http://167.172.162.54/game/Simon/Audios/ch/Amarillo.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Sun','http://167.172.162.54/game/Simon/Img/Sol.png','ch','http://167.172.162.54/game/Simon/Audios/ch/Amarillo.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Shirt','http://167.172.162.54/game/Simon/Img/Camisa.png','ch','http://167.172.162.54/game/Simon/Audios/ch/Azul.mp3',1]);
        DB::insert('insert into simonrecursos (Label, Image, idioma, Audio, simondice_id) values (?, ?, ?, ?, ?)', ['Ribbon','http://167.172.162.54/game/Simon/Img/Lazo.png','ch','http://167.172.162.54/game/Simon/Audios/ch/Rojo.mp3',1]);
        
        
    }
}
