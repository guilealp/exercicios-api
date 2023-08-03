<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExercicioOitoFormRequest;
use Illuminate\Http\Request;

class ExercicioOitoController extends Controller
{
    public function exibirtabuada(ExercicioOitoFormRequest $request)
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
