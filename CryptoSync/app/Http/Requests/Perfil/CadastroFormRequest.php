<?php

namespace App\Http\Requests\Perfil;

use Illuminate\Foundation\Http\FormRequest;

class CadastroFormRequest extends FormRequest
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
             'cpf_cnpj'      => 'required|max:20',
             'nmCompleto'    => 'required|max:200',
             'rg_ie'         => 'required|max:13',
             'sexo'          => 'required|max:1',
             'dtNasc'        => 'required|max:10',
             'estCivil'      => 'required|max:10',
             'tel'           => 'required|max:15',
             'proficao'      => 'required|max:100',
             'end'           => 'required|max:200',
             'bairro'        => 'required|max:150',
             'cep'           => 'required|max:10',
             'estado'        => 'required|max:100',
             'cidade'        => 'required|max:100',
             'nascionalidade'=> 'required|max:100'
         ];
     }
}
