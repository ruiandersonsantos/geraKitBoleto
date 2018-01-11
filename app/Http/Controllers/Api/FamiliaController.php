<?php

namespace App\Http\Controllers\Api;

use App\Model\Familia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FamiliaController extends Controller
{
    //Aqui estou declarando a ultilização
    //do CrudControllerTrait
    use CrudControllerTrait;

    protected $model;

    public function __construct(Familia $model)
    {
        $this->model = $model;
    }
}
