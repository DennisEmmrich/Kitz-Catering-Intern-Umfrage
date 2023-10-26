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


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('betriebsanweisungen', function () {
    return view('betriebsanweisungen');
})->name('betriebsanweisungen');

Route::get('rezepte', function () {
    return view('rezepte');
})->name('rezepte');

Route::get('rezept-brötchen', function () {
    return view('rezept-brötchen');
})->name('rezept-brötchen');

Route::get('/belegte-brötchen', [PageController::class,"belegtebrötchen"])->name('belegte-brötchen');

