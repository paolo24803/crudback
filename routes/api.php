<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Categorias;
use App\Http\Controllers\Productos;

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
Route::get('/categorias', [Categorias::class, 'index']);
Route::get('/productos', [Productos::class, 'index']);
Route::get('/buscar/{idCategoria}', 'Categorias@buscar');
