<?php

use Illuminate\Support\Facades\Route;

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



use App\Http\Controllers\SaludoController;

Route::get('/saludo/{name}', [SaludoController::class, 'saludar']) ->where('name', '[A-Za-z]+');

Route::get('/suma/{num1}/{num2}', [SaludoController::class, 'sumar'])->where('num2','[0-9]+');

