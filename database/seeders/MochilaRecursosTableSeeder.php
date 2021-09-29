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
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Apple','/game/Mochila/Img/Manzana.png','en','/game/Mochila/Audios/en/Manzana.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Whale','/game/Mochila/Img/Ballena.png','en','/game/Mochila/Audios/en/Ballena.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Flower','/game/Mochila/Img/Flor.png','en','/game/Mochila/Audios/en/Flor.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Grass','/game/Mochila/Img/Pasto.png','en','/game/Mochila/Audios/en/Pasto.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Pear','/game/Mochila/Img/Pera.png','en','/game/Mochila/Audios/en/Pera.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Star','/game/Mochila/Img/Estrella.png','en','/game/Mochila/Audios/en/Estrella.mp3',1]);
        DB::insert('insert into mochilarecursos (Label, Image, idioma, Audio, mochila_id) values (?, ?, ?, ?, ?)', ['Sun','/game/Mochila/Img/Sol.png','en','/game/Mochila/Audios/en/Sol.mp3',1]);
    }
}