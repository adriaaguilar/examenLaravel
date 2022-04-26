<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CasalController;

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

Route::get('/default', function () {
    return view('welcome');
});

Route::get('/', [CasalController::class, 'mostrarTaula']);
Route::get('/taula', [CasalController::class, 'mostrarTaula']);
Route::get('/formulari', [CasalController::class, 'mostrarFormulari']);

Route::post('/comprobarRegistre', [CasalController::class, 'comprobarRegistre'])
->name('comprobarRegistre');
