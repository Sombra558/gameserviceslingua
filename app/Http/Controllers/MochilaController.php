<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class MochilaController extends Controller
{

    public function show($id,$idioma)
    {
       $data=collect();
       $recursos = app('db')->select("SELECT * FROM `mochilarecursos` WHERE `mochila_id` = $id AND `idioma` = '$idioma' ");
       $data=(["array"=>$recursos]);
        return json_encode($data);
    }

}