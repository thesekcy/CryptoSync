<?php

namespace App\Model\Perfil;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $fillable = [
    	'id_users','nmCompleto','cpf_cnpj','rg_ie','sexo','dtNasc','estCivil','tel','proficao','end','bairro','cep','estado','cidade','nascionalidade','imagem'
    ];
}
