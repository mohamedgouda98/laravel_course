<?php

use App\Http\Controllers\FirstTaskController;
use App\Http\Controllers\HttpController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('http/data/{status}', [HttpController::class, 'data']);


Route::get('http/even', [FirstTaskController::class, 'evenTask']);
