<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homepageController;
use App\Http\Controllers\objekWisataController;


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
//Home Page

Route::get('/',[homepageController::class, 'indexAction']);
// Route::get('/beranda',[MahasiswaController::class, 'Peraturan']);


//Destination => objek wisata

Route::get('/objek-wisata',[objekWisataController::class, 'indexAction']);

