<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SolicitacaoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nomeUserSolicitante' =>'required | max:20',
            'pet'=> 'required | numeric | min:1',
            'aceita'=> 'nullable | boolean',
        ];
    }

    public function messages()
    {
        return [
            'nomeUserSolicitante.required' => 'O nome do Solcitante e Obrigatorio!',
            'nomeUserSolicitante.max' => 'O nome não pode passar de vinte caracteres!',
            'pet.required' => 'O Pet e Obrigatorio!',
            'aceita.required' => 'Aceita e Obrigatorio!',
        ];
    }
}
