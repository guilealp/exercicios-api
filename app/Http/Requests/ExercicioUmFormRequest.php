<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ExercicioUmFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'primeiro_numero' => 'required' ,
            'segundo_numero' => 'required',
        ];
    }
    public function failedValidertion(Validator $validator){
        throw new HttpResponseException(
            response()->json([
                'success' => false,
                'error' => $validator->errors()
            ]));
    }
    public function messages()
    {
        return[
            'primeiro_numero.required' => "Preencher o campo primeiro número",
            'primeiro_numero.numeric' => "o campo é somente número",
            'segundo_numero.required' => "Preencher o campo segundo número",
            'segundo_numero.numeric' => "o campo é somente número",
        ];
    }
}