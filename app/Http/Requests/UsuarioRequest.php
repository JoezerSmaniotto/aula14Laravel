<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
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

            'name'=> 'required | max: 120',
            'email'=> 'required | max:100',
            'cpf'=> 'required | max:14',
            'endereco'=> 'required | max: 200',
            'celular'=> 'required',
            'password'=> 'required'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'O nome do Usuario e Obrigatorio!',
            'email.required' => 'O email e Obrigatorio!',
            'cpf.required' => 'O CPF é obrigatorio!',
            'endereco.required' => 'O endereco é obrigatorio!',
            'celular.required' =>'O celular é obrigatorio!',
            'password.required' =>'O senha é obrigatoria!',

        ];
    }
}
