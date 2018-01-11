<?php

namespace App\Http\Controllers\Api;

use App\Model\Nbs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NbsController extends Controller
{
    //Aqui estou declarando a ultilização
    //do CrudControllerTrait
    use CrudControllerTrait;

    protected $model;

    public function __construct(Nbs $model)
    {
        $this->model = $model;
    }
}
