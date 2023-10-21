<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class,"welcome"])->name('welcome');

Route::get('rezepte', function () {
    return view('rezepte');
})->name('rezepte');

Route::get('belegte-brötchen', function () {
    return view('belegte-brötchen');
})->name('belegte-brötchen');

Route::get('rezept-brötchen', function () {
    return view('rezept-brötchen');
})->name('rezept-brötchen');
