<?php

namespace App\Model\perfil;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $table = 'perfils';

    protected $fillable = [
    	'nmCompleto','cpf_cnpj','rg_ie','sexo','dtNasc','estCivil','tel','proficao','end','bairro','cep','estado','cidade','nascionalidade'
    ];
}
