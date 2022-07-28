<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class MochilaController extends Controller
{

    public function show($id,$idioma)
    {
       $data=collect();
       $pru=collect();
       $data2=collect([
        "Label"=>'Mochila',
        "Image"=>'https://app.linguaplanet.com.mx/game/Mochila/Mochila.png',
        "Audio"=>"https://cdn.pixabay.com/download/audio/2021/08/04/audio_67d243357f.mp3?filename=whoosh-6316.mp3",
       ]);
       $pru->push($data2);
       $recursos = app('db')->select("SELECT * FROM `mochilarecursos` WHERE `mochila_id` = $id AND `idioma` = '$idioma' ");
       $data=(["array"=>$recursos,"array2"=>$pru]);
    
     
        return json_encode($data);
    }

}