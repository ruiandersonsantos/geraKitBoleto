<?php

namespace App\Http\Controllers\Api;

use App\Model\Moeda;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MoedaController extends Controller
{
    //Aqui estou declarando a ultilização
    //do CrudControllerTrait
    use CrudControllerTrait;

    protected $model;

    public function __construct(Moeda $model)
    {
        $this->model = $model;
    }
}
