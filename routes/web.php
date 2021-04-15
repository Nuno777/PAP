<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/ProjetosFotos', [App\Http\Controllers\ProjetosFotosController::class, 'index'])->name('ProjetosFotos');
Route::post('/ProjetosFotos', [App\Http\Controllers\ProjetosFotosController::class, 'store']);
Route::get('/ProjetosFotos/create', [App\Http\Controllers\ProjetosFotosController::class, 'create'])->name('ProjetosFotos.create');
