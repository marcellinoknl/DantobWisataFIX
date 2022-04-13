<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homepageController;
use App\Http\Controllers\objekWisataController;
use App\Http\Controllers\atraksiController;
use App\Http\Controllers\eventController;
use App\Http\Controllers\beritaController;
use App\Http\Controllers\fasilitasController;
use App\Http\Controllers\geleriWisataController;
use App\Http\Controllers\adminController\adminIndexController;
use App\Http\Controllers\accountController;



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

//Login
Route::get('/masuk',[accountController::class, 'login']);

//Register
Route::get('/daftarakun',[accountController::class, 'register']);

//Forgot Password
Route::get('/lupapassword',[accountController::class, 'forgotpassword']);

// --USER SIDE--
//Home Page
Route::get('/',[homepageController::class, 'indexAction']);
// Route::get('/beranda',[MahasiswaController::class, 'Peraturan']);


//Destination => objek wisata
Route::get('/objek-wisata',[objekWisataController::class, 'indexAction']);

//blog
//atraksiController
Route::get('/atraksi',[atraksiController::class, 'indexAction']);

//event controller
Route::get('/eventwisata',[eventController::class, 'indexAction']);

//berita
Route::get('/beritawisata',[beritaController::class, 'indexAction']);

//fasiltias
Route::get('/fasilitaswisata',[fasilitasController::class, 'indexAction']);

//galeri wisata
Route::get('/galeriwisata',[geleriWisataController::class, 'indexAction']);



//--ADMIN SIDE--
Route::get('/admin-wisata',[adminIndexController::class, 'indexAction']);