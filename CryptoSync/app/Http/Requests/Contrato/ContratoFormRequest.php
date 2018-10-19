<?php

namespace App\Http\Requests\Contrato;

use Illuminate\Foundation\Http\FormRequest;

class ContratoFormRequest extends FormRequest
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
            'id_contratado'      => 'required',
            'valor'    => 'required',
            'prazo'         => 'required',
            'servico'          => 'required|max:200',
            'contrato'        => 'required|max:200',
        ];
    }
}