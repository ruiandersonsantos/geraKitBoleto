<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Moeda extends Model
{
    /**
     * @var array
     */
    protected $fillable = [

        'codigo',
        'descricao',
        'user_id',
        'user_id_alter',
        'empresa_id',
        'tela_id',
        'origem_id',
        'origem_tela_id'
    ];
}
