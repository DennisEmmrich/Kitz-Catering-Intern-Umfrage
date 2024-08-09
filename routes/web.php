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


Route::get('/', [PageController::class,'messages'])->name('welcome');



use App\Http\Controllers\SurveyController;

Route::get('/umfrage', function () {
    return view('umfrage');
})->name('umfrage');

Route::get('/ergebnisse', function () {
    return view('ergebnisse');
})->name('ergebnisse');

