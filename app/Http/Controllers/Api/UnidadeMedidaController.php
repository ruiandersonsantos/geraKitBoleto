<?php

namespace App\Http\Controllers\Api;

use App\Model\UnidadeMedida;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UnidadeMedidaController extends Controller
{
    //Aqui estou declarando a ultilização
    //do CrudControllerTrait
    use CrudControllerTrait;

    protected $model;

    public function __construct(UnidadeMedida $model)
    {
        $this->model = $model;
    }
}
