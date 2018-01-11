<?php

namespace App\Http\Controllers\Api;

use App\Model\ClassificacaoFinanceira;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClassificacaoFinanceiraController extends Controller
{
    //Aqui estou declarando a ultilização
    //do CrudControllerTrait
    use CrudControllerTrait;

    protected $model;

    public function __construct(ClassificacaoFinanceira $model)
    {
        $this->model = $model;
    }
}
