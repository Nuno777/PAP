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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\ProjetosFotosController::class, 'home'])->name('home');

//Eventos
Route::get('/ProjetosFotos', [App\Http\Controllers\ProjetosFotosController::class, 'index'])->name('ProjetosFotos');
Route::post('/ProjetosFotos', [App\Http\Controllers\ProjetosFotosController::class, 'store']);
Route::get('/ProjetosFotos/create', [App\Http\Controllers\ProjetosFotosController::class, 'create'])->name('ProjetosFotos.create');

Route::get('/ProjetosFotos/{ProjetosFotos}/edit', [App\Http\Controllers\ProjetosFotosController::class, 'edit'])->name('ProjetosFotos.edit');
Route::put('/ProjetosFotos/{ProjetosFotos}', [App\Http\Controllers\ProjetosFotosController::class, 'update'])->name('ProjetosFotos.update');

Route::get('/ProjetosFotos/show', [App\Http\Controllers\ProjetosFotosController::class, 'show']);
Route::delete('/ProjetosFotos/{ProjetosFotos}', [App\Http\Controllers\ProjetosFotosController::class, 'destroy'])->name('ProjetosFotos.delete');
Route::delete('/ProjetosFotos/{images}', [App\Http\Controllers\ProjetosFotosController::class, 'destroy'])->name('ProjetosFotos.deletefoto');

//Noticias
Route::get('/Noticias', [App\Http\Controllers\ProjetosFotosController::class, 'index'])->name('ProjetosFotos');
Route::post('/Noticias', [App\Http\Controllers\NoticiasController::class, 'store']);
Route::get('/Noticias/create', [App\Http\Controllers\NoticiasController::class, 'create'])->name('Noticias.create');

Route::get('/Noticias/show', [App\Http\Controllers\NoticiasController::class, 'show']);
Route::delete('/Noticias/{Noticias}', [App\Http\Controllers\NoticiasController::class, 'destroy'])->name('Noticias.delete');
