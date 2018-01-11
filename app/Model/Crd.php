<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Crd extends Model
{
    const CRD_ATIVO = 1;
    const CRD_INATIVO = 0;

    const CRD_SINTETICO = 1;
    const CRD_ANALITICO = 2;

    /**
     * @var array
     */
    protected $fillable = [

        'codigo',
        'descricao',
        'status',
        'tipo',
        'user_id',
        'user_id_alter',
        'empresa_id',
        'tela_id',
        'origem_id',
        'origem_tela_id'
    ];
}
