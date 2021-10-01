<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class SiluetaController extends Controller
{

    public function show($id,$idioma)
    {
       $data=collect();
       $recursos = app('db')->select("SELECT * FROM `siluetasrecursos` WHERE `silueta_id` = $id AND `idioma` = '$idioma' ");
       $data=(["array"=>$recursos,"array2"=>$recursos]);
        return json_encode($data);
    }

}