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
    }
}