<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExercicioNoveFormRequest;
use Illuminate\Http\Request;

class ExercicioNoveController extends Controller
{
    
    public function exibirdivisivel(ExercicioNoveFormRequest $request)
    {
        $numeros = [];

        for ($i = 1; $i <= 100; $i++) {
            if ($i % $request->numero == 0) {
                array_push($numeros, $i . ' É divisivel');
            } else {
                array_push($numeros, $i . ' Não é divisivel');
            }
        }

        return json_encode([
            'valores' => $numeros
        ]);
    }
}
