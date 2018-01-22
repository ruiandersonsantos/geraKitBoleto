<?php


namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;

trait CrudControllerTrait
{
    public function index(Request $request){

        $result = $this->model->all();
            //->where('is_deletado', '=', 0);
        return response()->json($result);
    }

    public function create()
    {
        //
    }

    public function store(Request $request){
        $result = $this->model->create($request->all());
        return response()->json($result);
    }

    public function show($id){
        $result = $this->model
                        ->where('id',$id)
                        ->where('is_deletado', 0)
                        ->first();

        return response()->json($result);
    }


    public function update(Request $request, $id){
        $result = $this->model->findOrFail($id);
        $result->update($request->all());
        return response()->json($result);

    }

    public function destroy($id){
        $result = $this->model->findOrFail($id);
        $result['is_deletado'] = 1;
        $result->update();
        return response()->json($result);
    }

    public function edit($id)
    {
        //
    }
}