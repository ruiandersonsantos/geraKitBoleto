<?php

namespace App\Http\Controllers\Api;

use App\Model\Serie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SerieController extends Controller
{
    //Aqui estou declarando a ultilização
    //do CrudControllerTrait
    use CrudControllerTrait;

    protected $model;

    public function __construct(Serie $model)
    {
        $this->model = $model;
    }
}
