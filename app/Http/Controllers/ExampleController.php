<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class ExampleController extends Controller
{
    public function example(Request $request)
    {
 
        $name = $request->input('perfil_id');
        $name2 = $request->input('actividad_id');
        $name3 = $request->input('idioma');
        dd($name2);
    }
}