<?php

namespace App\Http\Controllers\Api;

use App\Model\Ncm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NcmController extends Controller
{
    //Aqui estou declarando a ultilização
    //do CrudControllerTrait
    use CrudControllerTrait;

    protected $model;

    public function __construct(Ncm $model)
    {
        $this->model = $model;
    }
}
