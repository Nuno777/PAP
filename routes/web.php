<?php

use Illuminate\Support\Facades\DB;
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
    $projetosFotos = DB::table('projetosFotos');
    return view('welcome', compact('projetosFotos'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/ProjetosFotos', [App\Http\Controllers\ProjetosFotosController::class, 'index'])->middleware('auth')->name('ProjetosFotos');
Route::post('/ProjetosFotos', [App\Http\Controllers\ProjetosFotosController::class, 'store']);
Route::get('/ProjetosFotos/create', [App\Http\Controllers\ProjetosFotosController::class, 'create'])->middleware('auth')->name('ProjetosFotos.create');
Route::get('/ProjetosFotos/{ProjetosFotos}/edit', [App\Http\Controllers\ProjetosFotosController::class, 'edit'])->middleware('auth');
Route::put('/ProjetosFotos/{ProjetosFotos}', [App\Http\Controllers\ProjetosFotosController::class, 'update']);
Route::get('/ProjetosFotos/show', [App\Http\Controllers\ProjetosFotosController::class, 'show']);
Route::delete('/ProjetosFotos/{ProjetosFotos}', [App\Http\Controllers\ProjetosFotosController::class, 'destroy']);
