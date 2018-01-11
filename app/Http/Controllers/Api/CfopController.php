<?php

namespace App\Http\Controllers\Api;

use App\Model\Cfop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CfopController extends Controller
{
    //Aqui estou declarando a ultilização
    //do CrudControllerTrait
    use CrudControllerTrait;

    protected $model;

    public function __construct(Cfop $model)
    {
        $this->model = $model;
    }
}
