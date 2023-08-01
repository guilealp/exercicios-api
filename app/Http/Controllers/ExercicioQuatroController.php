<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioQuatroController extends Controller
{

    public function verificar(Request $request){
        $entrada = $request ->Entrada; 

        if ($entrada % 2 == 0 ){
        return json_encode([
            "é par"

        ]);
    
    } else{ 
        return json_encode([
        "é impar"
        ]);
}
}}
