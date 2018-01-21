<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tela extends Model
{
    const NIVEL_1 = 1;
    const NIVEL_2 = 2;
    const NIVEL_3 = 3;

    const BASICO = 1;
    const DOCUMENTOS = 2;
    const PROCESSAMENTO = 3;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'codigo',
        'nome',
        'titulo',
        'icone',
        'descricao',
        'tabela',
        'tipo',
        'nivel',
        'help'
    ];
}
