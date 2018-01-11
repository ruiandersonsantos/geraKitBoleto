<?php

namespace App\Http\Controllers\Api;

use App\Model\Empresa;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\CrudControllerTrait;
use App\Http\Controllers\Controller;


class EmpresasController extends Controller
{
    //Aqui estou declarando a ultilização
    //do CrudControllerTrait
    use CrudControllerTrait;

    protected $model;

    public function __construct(Empresa $model)
    {
        $this->model = $model;
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empresa = $request->all();

        $result = \App\Model\Empresa::create($empresa);

        if($result){

           $usuarioMaster = \App\Model\Empresa::geraUsuarioMaster($result);

            if($usuarioMaster){
                $result['usuario_master'] = $usuarioMaster;
                return response()->json($result);
            }

            \App\Model\Empresa::destroy($result->id);

            return ['error' => 'Erro na criação do usuario master'];
        }

        return ['error' => 'Erro na criação da empresa'];
    }




}
