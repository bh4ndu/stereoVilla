<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

route::view('/login', "login")->name('login');
route::view('/registro', "register")->name('registro');
route::post('/inicio',[LoginController::class,'register'])->name('validar-registro');
route::post('/inicio', [LoginController::class, 'login'])->name('iniciar-sesion');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    route::view('/inicio', "inicio")->name('inicio');
});


