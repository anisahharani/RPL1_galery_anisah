<?php

use App\Http\Controllers\GaleryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\PostDec;

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

Route::get('/',[UserController::class,'index']);
Route::get('/register',[UserController::class, 'register']);
Route::post('simpanreg',[UserController::class,'saveRegister']);
Route::post('login',[UserController::class,'proseslogin']);
Route::get('galery/hapus/{id}',[GaleryController::class,'destroy']);

Route::resource('galery',GaleryController::class)->middleware('auth');

Route::get('logout',[UserController::class,'logout']);
