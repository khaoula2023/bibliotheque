<?php

use App\Http\Controllers\LivresController;
use App\Http\Controllers\PagesController;
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
});

Route::get(' acceuil', function () {
    return view('acceuil');
});

Route::get(' books', function () {
    return view('books');
});
Route::get('admin ', function () {
    return view('admin_home');
});


Route::get('employes ', function () {
    return view('employes');
});

Route::get('auteur', function () {
    return view('auteur');
});


Route::resource('/Livres', LivresController::class);