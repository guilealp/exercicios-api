<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioDezController extends Controller
{
    public function exibirimpar(Request $request)
    {
        $numeros = [];

        for ($i = 1; $i <= 80; $i++) {
            if ($i %  3 == 0) {
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
