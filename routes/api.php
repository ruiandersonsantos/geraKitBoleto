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



    Route::resource('/usuarios','Api\UserController');

    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });
});

// Rotas para endpoints da empresa
Route::resource('/empresas','Api\EmpresasController');

// Rotas para endpoints do CFOP
Route::resource('/cfops','Api\CfopController');


// Rotas para endpoints da Classificação Finnaceira
Route::resource('/classificacao_financeiras','Api\ClassificacaoFinanceiraController');

// Rotas para endpoints do CRD
Route::resource('/crds','Api\CrdController');

// Rotas para endpoints da familias
Route::resource('/familias','Api\FamiliaController');

// Rotas para endpoints do impostos
Route::resource('/impostos','Api\ImpostoController');

// Rotas para endpoints do impostos
Route::resource('/moedas','Api\MoedaController');

// Rotas para endpoints do nbs
Route::resource('/nbs','Api\NbsController');

// Rotas para endpoints do ncm
Route::resource('/ncm','Api\NcmController');

// Rotas para endpoints do series
Route::resource('/series','Api\SerieController');

// Rotas para endpoints do unidades medidas
Route::resource('/unidade_medidas','Api\UnidadeMedidaController');
