<?php

namespace App\Http\Controllers\Api;

use App\Model\Imposto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImpostoController extends Controller
{
    //Aqui estou declarando a ultilização
    //do CrudControllerTrait
    use CrudControllerTrait;

    protected $model;

    public function __construct(Imposto $model)
    {
        $this->model = $model;
    }
}
