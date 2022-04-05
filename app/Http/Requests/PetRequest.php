<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PetRequest extends FormRequest
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
            'user_id'=> 'required| exists:users,id',
            'nomePet'=> 'required | max: 120',
            'sexo'=> 'required',
            'raca'=> 'required',
            'inforAdic'=> 'required',
            'idade'=> 'required',
            'adotado'=> 'required',
        ];
    }

    public function messages(){
        return [
            'user_id.required' => 'O do usuario e Obrigatorio!',
            'user_id.exists' => ' Este usuario não esta cadastrado!',
            'nomePet.required' => 'O Nome do Pet e Obrigatorio!',
            'sexo.required' => 'O SEXO é obrigatorio!',
            'raca.required' => 'O raca é obrigatorio!',
            'inforAdic.required' =>' Informacoes adicionais sao obrigatorias!',
            'idade'=> 'required | numeric | min:1',
            'adotado' => 'nullable | boolean',

        ];
    }
}
