<?php

use App\Http\Controllers\FirstTaskController;
use App\Http\Controllers\HttpController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/http/data', [HttpController::class, 'data']);

Route::get('/http/task', [HttpController::class, 'task']);


Route::get('/http/task/even', [FirstTaskController::class, 'evenTaskApi']);


