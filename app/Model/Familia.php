<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Familia extends Model
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
