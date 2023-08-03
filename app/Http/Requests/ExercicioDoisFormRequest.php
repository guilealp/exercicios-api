<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ExercicioDoisFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'primeira_entrada' => 'required|numeric' ,
            'segunda_entrada' => 'required|numeric',
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
            'primeira_entrada.required' => "Preencher o campo primeiro número",
            'primeira_entrada.numeric' => "o campo é somente número",
            'segunda_entrada.required' => "Preencher o campo segundo número",
            'segunda_entrada.numeric' => "o campo é somente número",
        ];
    }
}
