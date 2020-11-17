<?php

use App\Http\Controllers\FirstTaskController;
use App\Http\Controllers\HttpController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssignmentController;

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



Route::prefix('assignments/v1')->group(function () {

});

Route::get('evenize', [AssignmentController::class, 'evenize']);

Route::get('/jobs', [\App\Http\Controllers\JobController::class, 'getAll']);
Route::get('/jobs/{job}', [\App\Http\Controllers\JobController::class, 'get']);
Route::delete('/jobs/{job}', [\App\Http\Controllers\JobController::class, 'delete']);
Route::put('/jobs/{job}', [\App\Http\Controllers\JobController::class, 'update']);
Route::post('/jobs', [\App\Http\Controllers\JobController::class, 'create']);


Route::get('/categories', [\App\Http\Controllers\CategoryController::class, 'getAll']);
Route::get('/categories/{category}', [\App\Http\Controllers\CategoryController::class, 'get']);
Route::delete('/categories/{category}', [\App\Http\Controllers\CategoryController::class, 'delete']);
Route::put('/categories/{category}', [\App\Http\Controllers\CategoryController::class, 'update']);
Route::post('/category', [\App\Http\Controllers\CategoryController::class, 'create']);

Route::get('/category/{category}/jobs', [\App\Http\Controllers\CategoryController::class, 'jobs']);
Route::get('/jobs/{job}/categories', [\App\Http\Controllers\JobController::class, 'categories']);

Route::get('/category/{category}/jobs/{job}', [\App\Http\Controllers\CategoryController::class, 'attachToJob']);
Route::get('/jobs/{job}/categories/{category}', [\App\Http\Controllers\JobController::class, 'attachToCategory']);

