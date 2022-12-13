<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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

//No metodo api resource eu consigo utilizar o crud padrão do metodo crudable do
//    quickstart sem nenhuma implementaçao dessas funcções no controller. Apenas
// extender a classe crudable e importar os repositories e manager, caso necessite
Route::apiResource('/emails', EmailsController::class);

Route::get('verifica-falhas','EmailsController@verificaFalhas');



