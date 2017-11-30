<?php

namespace App\Http\Controllers\Api;

use App\Notifications\UserCreated;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // pegando o usuario logado
        $usuariologado = $request->user();

        $result = \App\Model\User::where('cia_secret','=',$usuariologado->cia_secret)->get();

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
        $usuario = $request->all();

        if($this->existUsuario($usuario['email'])){
            return response()->json(['error' => 'E-mail já existente'],403);
        }

        // pegando o usuario logado
        $usuariologado = $request->user();

        // passando a cia_secret do usuario que está efetuando o cadastro para o novo usuario
        $usuario['cia_secret'] = $usuariologado->cia_secret;

        $result = \App\Model\User::create($usuario);
        $result->notify(new UserCreated());
        return response()->json($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $usuariologado = $request->user();

        $result = \App\Model\User::where('cia_secret','=',$usuariologado->cia_secret)
            ->Where('id','=',$id)
            ->get();

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
        $result = \App\Model\User::findOrFail($id);
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
        // Fazendo exclusão logica - inativação
        $result = \App\Model\User::find($id);
        $result->status = 0;
        $result->save();
        return response()->json($result);
    }


    private function existUsuario($email){
        $result = \App\Model\User::where('email','=',$email)->get();
        return ($result->first() != null);

    }

}
