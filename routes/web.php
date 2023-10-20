<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\bievenidoController;
use App\Http\Controllers\alumnosController;
/*


|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');

});
Route::get('/bienvenido',[bievenidoController::class,'bienvenido']);

Route::get('/inicio',[bievenidoController::class,'inicio']);

Route::get('/alumnos',[alumnosController::class,'alumnos']);


