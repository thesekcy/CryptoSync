<?php

namespace App\Model\Contratos;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $fillable = ['id_contratante','id_contratado','valor','prazo','servico','contrato'];
}
