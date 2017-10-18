<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmpresasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = \App\Model\Empresa::all();

        return response()->json($result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $key_secret = \App\Model\Empresa::getKeySecret($empresa['cnpj'],$empresa['email']);
        $empresa['key_secret'] = md5($key_secret);

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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = \App\Model\Empresa::findOrFail($id);

        return response()->json($result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $result = \App\Model\Empresa::findOrFail($id);
        $result->update($request->all());
        return response()->json($result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        return ['error' => 'operação de exclusao não é permitida'];
    }


}
