<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Lumen\Routing\Controller as BaseController;


use App\Silueta;

class SiluetaController extends Controller
{
    public function show($id,$idioma)
    {
       $data=collect();
       $recursos = app('db')->select("SELECT * FROM `siluetasrecursos` WHERE `silueta_id` = $id AND `idioma` = '$idioma' ");
       $data=(["array"=>$recursos,"array2"=>$recursos]);
        return json_encode($data);
    }


    public function store(Request $request)
    {
       

        return response('Successful insert');
    }

}