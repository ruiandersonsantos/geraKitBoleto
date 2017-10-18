<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::group(['middleware'=>['auth:api']],function (){

    // Rotas para endpoints da empresa
    Route::resource('/empresas','Api\EmpresasController');

    Route::resource('/usuarios','Api\UserController');

    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });
});





