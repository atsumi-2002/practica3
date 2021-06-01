<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalzadoController;
use App\Http\Controllers\VentaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/calzado', function () {
    return view('calzado.index');
});

Route::get('/calzado/create',[CalzadoController::class,'create']);
*/

Route::resource('calzado',CalzadoController::class);
Route::resource('ventas',VentaController::class);