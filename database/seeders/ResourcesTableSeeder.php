<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResourcesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Ballena
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 1','http://167.172.162.54/game/Rompecabeza/Img/Ballena/1.png','en','audio1',1]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 2','http://167.172.162.54/game/Rompecabeza/Img/Ballena/2.png','en','audio2',1]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 3','http://167.172.162.54/game/Rompecabeza/Img/Ballena/3.png','en','audio3',1]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 4','http://167.172.162.54/game/Rompecabeza/Img/Ballena/4.png','en','audio4',1]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 5','http://167.172.162.54/game/Rompecabeza/Img/Ballena/5.png','en','audio5',1]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 6','http://167.172.162.54/game/Rompecabeza/Img/Ballena/6.png','en','audio6',1]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 7','http://167.172.162.54/game/Rompecabeza/Img/Ballena/7.png','en','audio7',1]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 8','http://167.172.162.54/game/Rompecabeza/Img/Ballena/8.png','en','audio8',1]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 9','http://167.172.162.54/game/Rompecabeza/Img/Ballena/9.png','en','audio9',1]);
        //Camisa
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 1','http://167.172.162.54/game/Rompecabeza/Img/Camisa/1.png','en','audio1',2]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 2','http://167.172.162.54/game/Rompecabeza/Img/Camisa/2.png','en','audio2',2]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 3','http://167.172.162.54/game/Rompecabeza/Img/Camisa/3.png','en','audio3',2]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 4','http://167.172.162.54/game/Rompecabeza/Img/Camisa/4.png','en','audio4',2]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 5','http://167.172.162.54/game/Rompecabeza/Img/Camisa/5.png','en','audio5',2]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 6','http://167.172.162.54/game/Rompecabeza/Img/Camisa/6.png','en','audio6',2]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 7','http://167.172.162.54/game/Rompecabeza/Img/Camisa/7.png','en','audio7',2]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 8','http://167.172.162.54/game/Rompecabeza/Img/Camisa/8.png','en','audio8',2]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 9','http://167.172.162.54/game/Rompecabeza/Img/Camisa/9.png','en','audio9',2]);
        //Corazon
        DB::insert('insert into recursos (Label, Image, idioma , Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 1','http://167.172.162.54/game/Rompecabeza/Img/Corazon/1.png','en','audio1',3]);
        DB::insert('insert into recursos (Label, Image, idioma , Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 2','http://167.172.162.54/game/Rompecabeza/Img/Corazon/2.png','en','audio2',3]);
        DB::insert('insert into recursos (Label, Image, idioma , Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 3','http://167.172.162.54/game/Rompecabeza/Img/Corazon/3.png','en','audio3',3]);
        DB::insert('insert into recursos (Label, Image, idioma , Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 4','http://167.172.162.54/game/Rompecabeza/Img/Corazon/4.png','en','audio4',3]);
        DB::insert('insert into recursos (Label, Image, idioma , Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 5','http://167.172.162.54/game/Rompecabeza/Img/Corazon/5.png','en','audio5',3]);
        DB::insert('insert into recursos (Label, Image, idioma , Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 6','http://167.172.162.54/game/Rompecabeza/Img/Corazon/6.png','en','audio6',3]);
        DB::insert('insert into recursos (Label, Image, idioma , Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 7','http://167.172.162.54/game/Rompecabeza/Img/Corazon/7.png','en','audio7',3]);
        DB::insert('insert into recursos (Label, Image, idioma , Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 8','http://167.172.162.54/game/Rompecabeza/Img/Corazon/8.png','en','audio8',3]);
        DB::insert('insert into recursos (Label, Image, idioma , Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 9','http://167.172.162.54/game/Rompecabeza/Img/Corazon/9.png','en','audio9',3]);
        //Estrella
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 1','http://167.172.162.54/game/Rompecabeza/Img/Estrella/1.png','en','audio1',4]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 2','http://167.172.162.54/game/Rompecabeza/Img/Estrella/2.png','en','audio2',4]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 3','http://167.172.162.54/game/Rompecabeza/Img/Estrella/3.png','en','audio3',4]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 4','http://167.172.162.54/game/Rompecabeza/Img/Estrella/4.png','en','audio4',4]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 5','http://167.172.162.54/game/Rompecabeza/Img/Estrella/5.png','en','audio5',4]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 6','http://167.172.162.54/game/Rompecabeza/Img/Estrella/6.png','en','audio6',4]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 7','http://167.172.162.54/game/Rompecabeza/Img/Estrella/7.png','en','audio7',4]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 8','http://167.172.162.54/game/Rompecabeza/Img/Estrella/8.png','en','audio8',4]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 9','http://167.172.162.54/game/Rompecabeza/Img/Estrella/9.png','en','audio9',4]);
        //Flor
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 1','http://167.172.162.54/game/Rompecabeza/Img/Flor/1.png','en','audio1',5]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 2','http://167.172.162.54/game/Rompecabeza/Img/Flor/2.png','en','audio2',5]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 3','http://167.172.162.54/game/Rompecabeza/Img/Flor/3.png','en','audio3',5]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 4','http://167.172.162.54/game/Rompecabeza/Img/Flor/4.png','en','audio4',5]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 5','http://167.172.162.54/game/Rompecabeza/Img/Flor/5.png','en','audio5',5]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 6','http://167.172.162.54/game/Rompecabeza/Img/Flor/6.png','en','audio6',5]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 7','http://167.172.162.54/game/Rompecabeza/Img/Flor/7.png','en','audio7',5]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 8','http://167.172.162.54/game/Rompecabeza/Img/Flor/8.png','en','audio8',5]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 9','http://167.172.162.54/game/Rompecabeza/Img/Flor/9.png','en','audio9',5]);
        //Lazo
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 1','http://167.172.162.54/game/Rompecabeza/Img/Lazo/1.png','en','audio1',6]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 2','http://167.172.162.54/game/Rompecabeza/Img/Lazo/2.png','en','audio2',6]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 3','http://167.172.162.54/game/Rompecabeza/Img/Lazo/3.png','en','audio3',6]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 4','http://167.172.162.54/game/Rompecabeza/Img/Lazo/4.png','en','audio4',6]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 5','http://167.172.162.54/game/Rompecabeza/Img/Lazo/5.png','en','audio5',6]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 6','http://167.172.162.54/game/Rompecabeza/Img/Lazo/6.png','en','audio6',6]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 7','http://167.172.162.54/game/Rompecabeza/Img/Lazo/7.png','en','audio7',6]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 8','http://167.172.162.54/game/Rompecabeza/Img/Lazo/8.png','en','audio8',6]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 9','http://167.172.162.54/game/Rompecabeza/Img/Lazo/9.png','en','audio9',6]);
        //Manzana
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 1','http://167.172.162.54/game/Rompecabeza/Img/Manzana/1.png','en','audio1',7]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 2','http://167.172.162.54/game/Rompecabeza/Img/Manzana/2.png','en','audio2',7]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 3','http://167.172.162.54/game/Rompecabeza/Img/Manzana/3.png','en','audio3',7]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 4','http://167.172.162.54/game/Rompecabeza/Img/Manzana/4.png','en','audio4',7]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 5','http://167.172.162.54/game/Rompecabeza/Img/Manzana/5.png','en','audio5',7]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 6','http://167.172.162.54/game/Rompecabeza/Img/Manzana/6.png','en','audio6',7]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 7','http://167.172.162.54/game/Rompecabeza/Img/Manzana/7.png','en','audio7',7]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 8','http://167.172.162.54/game/Rompecabeza/Img/Manzana/8.png','en','audio8',7]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 9','http://167.172.162.54/game/Rompecabeza/Img/Manzana/9.png','en','audio9',7]);
        //Pasto
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 1','http://167.172.162.54/game/Rompecabeza/Img/Pasto/1.png','en','audio1',8]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 2','http://167.172.162.54/game/Rompecabeza/Img/Pasto/2.png','en','audio2',8]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 3','http://167.172.162.54/game/Rompecabeza/Img/Pasto/3.png','en','audio3',8]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 4','http://167.172.162.54/game/Rompecabeza/Img/Pasto/4.png','en','audio4',8]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 5','http://167.172.162.54/game/Rompecabeza/Img/Pasto/5.png','en','audio5',8]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 6','http://167.172.162.54/game/Rompecabeza/Img/Pasto/6.png','en','audio6',8]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 7','http://167.172.162.54/game/Rompecabeza/Img/Pasto/7.png','en','audio7',8]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 8','http://167.172.162.54/game/Rompecabeza/Img/Pasto/8.png','en','audio8',8]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 9','http://167.172.162.54/game/Rompecabeza/Img/Pasto/9.png','en','audio9',8]);
        //Pera
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 1','http://167.172.162.54/game/Rompecabeza/Img/Pera/1.png','en','audio1',9]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 2','http://167.172.162.54/game/Rompecabeza/Img/Pera/2.png','en','audio2',9]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 3','http://167.172.162.54/game/Rompecabeza/Img/Pera/3.png','en','audio3',9]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 4','http://167.172.162.54/game/Rompecabeza/Img/Pera/4.png','en','audio4',9]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 5','http://167.172.162.54/game/Rompecabeza/Img/Pera/5.png','en','audio5',9]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 6','http://167.172.162.54/game/Rompecabeza/Img/Pera/6.png','en','audio6',9]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 7','http://167.172.162.54/game/Rompecabeza/Img/Pera/7.png','en','audio7',9]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 8','http://167.172.162.54/game/Rompecabeza/Img/Pera/8.png','en','audio8',9]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 9','http://167.172.162.54/game/Rompecabeza/Img/Pera/9.png','en','audio9',9]);
        //Sol
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 1','http://167.172.162.54/game/Rompecabeza/Img/Sol/1.png','en','audio1',10]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 2','http://167.172.162.54/game/Rompecabeza/Img/Sol/2.png','en','audio2',10]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 3','http://167.172.162.54/game/Rompecabeza/Img/Sol/3.png','en','audio3',10]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 4','http://167.172.162.54/game/Rompecabeza/Img/Sol/4.png','en','audio4',10]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 5','http://167.172.162.54/game/Rompecabeza/Img/Sol/5.png','en','audio5',10]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 6','http://167.172.162.54/game/Rompecabeza/Img/Sol/6.png','en','audio6',10]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 7','http://167.172.162.54/game/Rompecabeza/Img/Sol/7.png','en','audio7',10]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 8','http://167.172.162.54/game/Rompecabeza/Img/Sol/8.png','en','audio8',10]);
        DB::insert('insert into recursos (Label, Image, idioma, Audio, rompecabeza_id) values (?, ?, ?, ?, ?)', ['Pieza 9','http://167.172.162.54/game/Rompecabeza/Img/Sol/9.png','en','audio9',10]);
    }

}
