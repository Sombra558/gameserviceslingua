<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class RompecabezaController extends Controller
{
    
    public function show($id)
    {
        $grupo = array();
       
        $recursos = app('db')->select("SELECT * FROM `recursos` WHERE `rompecabeza_id` = $id");
      
    
        return '"array":'. json_encode($recursos);
    }

}