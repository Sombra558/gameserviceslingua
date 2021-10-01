<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class RompecabezaController extends Controller
{

    public function show($id,$idioma)
    {
       $data=collect();
       $recursos = app('db')->select("SELECT * FROM `recursos` WHERE `rompecabeza_id` = $id AND `idioma` = '$idioma' ");
       $data=(["array"=>$recursos,"array2"=>$recursos]);
        
       return json_encode($data);
    }

}