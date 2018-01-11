<?php

namespace App\Http\Controllers\Api;

use App\Model\Crd;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CrdController extends Controller
{
    //Aqui estou declarando a ultilização
    //do CrudControllerTrait
    use CrudControllerTrait;

    protected $model;

    public function __construct(Crd $model)
    {
        $this->model = $model;
    }
}
