<?php

use App\Http\Controllers\LinkController;
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
    return view('welcome', ['title' => 'Welcome!']);
});


Route::prefix('link')->group(function () {
    Route::get('create', [LinkController::class, 'create']);

    Route::post('/', [LinkController::class, 'simpan']);
});
