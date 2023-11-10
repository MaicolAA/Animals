<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\indexController;
use App\Http\Controllers\crudController;

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

Route::get('/index', [indexController::class, 'index'])->name('index');

Route::get('/crud', [crudController::class, 'crud'])->name('crud');

Route::get('/animals/{idanimal}/edit', [crudController::class, 'edit'])->name('edit');

Route::post('/animals/{idanimal}/update', [crudController::class, 'update'])->name('update');

Route::get('/new', [crudController::class, 'new'])->name('new');

Route::delete('/animals/{idanimal}/delete', [crudController::class, 'delete'])->name('delete');


Route::get('/animal/create', [crudController::class, 'new'])->name('new');
Route::post('/animal/store', [crudController::class, 'store'])->name('store');
