<?php

use App\Http\Controllers\userAPIController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/**Rota responsável por encaminhar para tela de login**/
Route::get('/', function () {
    return view('login');
});

/**Rota responsável por encaminhar para tela de informações sobre a api**/
Route::get('/info', function () {
    return view('info');
});

/**Rotas responsável por encaminhar para as funções da controler**/

Route::get('/list',[userAPIController::class,'show']);

Route::post('/create',[userAPIController::class,'create']);

Route::post('/edit',[userAPIController::class,'edit']);

Route::post('/update',[userAPIController::class,'update']);

Route::post('/updateuser',[userAPIController::class,'updateUser']);

Route::post('/destroy',[userAPIController::class,'destroy']);

Route::get('/token',[userAPIController::class,'getToken']);

/**Fim das funções da controller**/
