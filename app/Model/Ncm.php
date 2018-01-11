<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ncm extends Model
{
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
