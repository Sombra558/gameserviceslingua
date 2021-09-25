<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class RompecabezaController extends Controller
{

    public function show($id)
    {
       $data=collect();
       $recursos = app('db')->select("SELECT * FROM `recursos` WHERE `rompecabeza_id` = $id");
       $data=(["array"=>$recursos]);
      
        return json_encode($data);
    }

}