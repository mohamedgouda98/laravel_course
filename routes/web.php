<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\StudentController;
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

Route::get('students', [StudentController::class, 'students']);
Route::get('student/{code}', [StudentController::class, 'getStudent']);



//Categories
Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('categories/show/{id}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('categories/delete/{id}', [CategoryController::class, 'destroy'])->name('categories.delete');


//Jobs
Route::get('jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('jobs/show/{id}', [JobController::class, 'show'])->name('jobs.show');
Route::get('jobs/create', [JobController::class, 'create'])->name('jobs.create');
Route::post('jobs/store', [JobController::class, 'store'])->name('jobs.store');
Route::get('jobs/edit/{id}', [JobController::class, 'edit'])->name('jobs.edit');
Route::post('jobs/update/{id}', [JobController::class, 'update'])->name('jobs.update');
Route::get('jobs/delete/{id}', [JobController::class, 'destroy'])->name('jobs.delete');
