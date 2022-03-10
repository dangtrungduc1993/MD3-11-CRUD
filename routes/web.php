<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
})->name('welcome');
Route::get('users',[UserController::class,"index"])->name('user.index');
Route::get('register',[AuthController::class,"showForm"])->name('showForm');
Route::post('register',[AuthController::class,"register"])->name('register')->middleware('checkRegister');

Route::get('login',[AuthController::class,"showFormLogin"])->name('showFormLogin');
Route::post('login',[AuthController::class,"login"])->name('login');
Route::get('logout',[AuthController::class,"logout"])->name('logout');
