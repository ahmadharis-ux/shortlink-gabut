<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\Login;
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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('welcome', ['title' => 'Welcome!']);
    });
    
    Route::get('/link/create',);
    Route::post('/logout', [LoginController::class,'logout']);
});

Route::group(['middleware'=> 'guest'], function(){
    Route::get('/login', [LoginController::class,'index']);
    Route::post('/login', [LoginController::class,'input']);
    
    
    Route::get('/daftar', [DaftarController::class,'index']);
    Route::post('/daftar', [DaftarController::class,'input']);
});
