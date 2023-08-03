<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExercicioSeisFormRequest;
use Illuminate\Http\Request;

class ExercicioseisController extends Controller
{
    public function idade(ExercicioSeisFormRequest $request)
    {
        if ($request->idade >= 12 && $request->idade <= 18) {
            return json_encode([
                'menssage' => "Ele é um adolecente"
            ]);
        } else if ($request->idade <= 11) {
            return json_encode([
                'menssage' => "Ele é uma criança"
            ]);
        } else {
            return json_encode([
                'menssage' => "Ele é um adulto"
            ]);
        }
    }
}
