<?php

use App\Http\Controllers\DetalharDiarias;
use App\Http\Controllers\ListarDiarias;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

Route::get('/', ListarDiarias::class);

Route::get('/diarias/{id}', DetalharDiarias::class)->name('diarias.show');

//http://127.0.0.1:8000/diarias/valor1

Route::get('/sobre', [SiteController::class, 'sobre']);
Route::get('/contato', [SiteController::class, 'contato']);

