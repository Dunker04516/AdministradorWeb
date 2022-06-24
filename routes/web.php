<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\WebController;
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

Route::prefix('admin')->name("admin.")->group(function(){
    Route::get("/", [AdminController::class, 'index'])->name("index");
    Route::post("guardar", [AdminController::class, 'guardar'])->name("guardar");
});

Route::get("/", [WebController::class, 'index'])->name("index");