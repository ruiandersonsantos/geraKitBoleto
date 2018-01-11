<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cfop extends Model
{
    const TIPO_ENTRADA = 1;
    const TIPO_SAIDA = 2;

    /**
     * @var array
     */
    protected $fillable = [

        'codigo',
        'descricao',
        'tipo',
        'user_id',
        'user_id_alter',
        'empresa_id',
        'tela_id',
        'origem_id',
        'origem_tela_id'
    ];



}
