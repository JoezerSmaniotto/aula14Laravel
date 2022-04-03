<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FornecedorRequest extends FormRequest
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
            'nome'=>'required | max:20',
            'endereco'=>'required | max: 150',
            'cnpj'=> 'required | max:18',
            'telefone'=> 'required'
            // 'nome'=>'required | max:20',
            // 'descricao'=> 'required | max: 500',
            // 'qtd_estoque'=> 'required | numeric | min:1',
            // 'preco'=> 'required | numeric | min:1.99',
            // 'importado'=> 'nullable | boolean',
            // 'fornecedor_id'=> 'required| exists:fornecedores,id'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O nome do Fornecedor e Obrigatorio!',
            'nome.max' => 'O nome não pode passar de vinte caracteres!',
            'endereco.required' => 'O Endereco e Obrigatorio!',
            'cnpj.required' => 'O CNPJ e Obrigatorio!',
            'telefone.required' => 'O Telefone e Obrigatorio!',
        ];
    }
}
