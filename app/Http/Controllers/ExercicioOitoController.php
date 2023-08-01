<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioOitoController extends Controller
{
    public function exibirtabuada(Request $request)
    {
        $numeros = []; 

        for ($i = 1; $i <= 10; $i++) {
          array_push($numeros, $i * $request->numero);
        }

        return json_encode([
            'valores'=> $numeros
        ]);
    }
}
