<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class SimonController extends Controller
{

    public function show($id,$idioma)
    {
       $data=collect();
       $recursos = app('db')->select("SELECT * FROM `simonrecursos` WHERE `simondice_id` = $id AND `idioma` = '$idioma' ");
       $data=(["array"=>$recursos]);
        return json_encode($data);
    }

}