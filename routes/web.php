<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homepageController;
use App\Http\Controllers\objekWisataController;
use App\Http\Controllers\KabupatenController;
use App\Http\Controllers\atraksiController;
use App\Http\Controllers\eventController;
use App\Http\Controllers\beritaController;
use App\Http\Controllers\fasilitasController;
use App\Http\Controllers\geleriWisataController;
use App\Http\Controllers\KategoriWisataController;
use App\Http\Controllers\adminController\adminIndexController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\PengalamanController;

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


// --USER SIDE--
//Home Page
Route::get('/', [homepageController::class, 'indexAction']);
Route::get('/auth/redirect', 'App\Http\Controllers\Auth\RegisterController@redirectToProvider');
Route::get('/auth/callback', 'App\Http\Controllers\Auth\RegisterController@handleProviderCallback');
// Route::get('/beranda',[MahasiswaController::class, 'Peraturan']);


//Destination => objek wisata
Route::get('/objek-wisata', [objekWisataController::class, 'indexAction']);
Route::get('/objek-wisata/detail1/{id}', [objekWisataController::class, 'indexAction2']);
Route::get('/objek-wisata/detail2/{id}', [objekWisataController::class, 'indexAction3']);

//blog
//atraksiController
Route::get('/atraksi', [atraksiController::class, 'indexAction']);
Route::get('/atraksi-wisata/detail1/{id}', [atraksiController::class, 'indexAction2']);
Route::get('/atraksi-wisata/detail2/{id}', [atraksiController::class, 'indexAction3']);
//event controller
Route::get('/eventwisata', [eventController::class, 'indexAction']);
Route::get('/event-wisata/detail1/{id}', [eventController::class, 'indexAction2']);
Route::get('/event-wisata/detail2/{id}', [eventController::class, 'indexAction3']);
//berita
Route::get('/beritawisata', [beritaController::class, 'indexAction']);
Route::get('/berita-wisata/detail/{id}', [beritaController::class, 'indexAction2']);
//fasiltias
Route::get('/fasilitaswisata', [fasilitasController::class, 'indexAction']);
Route::get('/fasilitas-wisata/detail1/{id}', [fasilitasController::class, 'indexAction2']);
Route::get('/fasilitas-wisata/detail2/{id}', [fasilitasController::class, 'indexAction3']);
//galeri wisata
Route::get('/galeriwisata', [geleriWisataController::class, 'indexAction']);

//pengalaman wisata
Route::get('/pengalaman-wisata', [PengalamanController::class, 'indexAction']);
Route::get('/tambah-pengalamanwisata', [PengalamanController::class, 'indexActiontambahpengalaman'])->middleware('auth');
Route::post('/tambahpengalamanwisata', [PengalamanController::class, 'TambahPengalaman'])->middleware('auth')->name('TambahPengalaman');
Route::get('/pengalamanwisata-saya', [PengalamanController::class, 'indexActionpengalamansaya'])->middleware('auth');
Route::get('/ubah-pengalamansaya/{id}', [PengalamanController::class, 'editPengalamanSaya']);
Route::post('/edit-pengalamanwisata-saya/{id}', [PengalamanController::class, 'updatePengalamanSaya'])->name('pengalamansaya.ubah')->middleware('auth');
Route::get('/pengalaman-wisata/detail/{id}', [PengalamanController::class, 'indexAction2']);

//--USER SIDE--

//--ADMIN SIDE--//

Route::group(['middleware' => ['auth',  'ceklevel:3']], function () {

        //Index utama
        Route::get('/admin-wisata', [adminIndexController::class, 'indexAction']);

        //Kelola Objek Wisatawa
        Route::get('/kelolaobjek', [objekWisataController::class, 'kelolaindexAction']);
        Route::get('/tambah-objek-wisata', [objekWisataController::class, 'tambah']);
        Route::get('/ubah-objek-wisata/{id}', [objekWisataController::class, 'edit']);
        Route::post('/ubah-objek-wisata/{id}', [objekWisataController::class, 'update'])->name('objekwisata.ubah');
        Route::post('/tambah-objek-wisata/store', [objekWisataController::class, 'store'])->name('formobjekwisata.store');
        Route::get('/objekwisata/hapus/{id}', [objekWisataController::class, 'hapus'])->name('objekwisata.hapus');
        Route::get('/lihat-objekwisata/{id}', [objekWisataController::class, 'kelolaindexActionView']);

        //kelolaberita
        Route::get('/kelolaberita', [beritaController::class, 'kelolaindexAction']);
        Route::get('/tambah-berita-wisata', [beritaController::class, 'tambah']);
        Route::get('/ubah-berita-wisata/{id}', [beritaController::class, 'edit']);
        Route::post('/ubah-berita-wisata/{id}', [beritaController::class, 'update'])->name('beritawisata.ubah');
        Route::post('/tambah-berita-wisata/store', [beritaController::class, 'store'])->name('formberitawisata.store');
        Route::get('/berita/hapus/{id}', [beritaController::class, 'hapus'])->name('beritawisata.hapus');
        Route::get('/lihat-beritawisata/{id}', [beritaController::class, 'kelolaindexActionView']);

        //kelola galeriwisata
        Route::get('/kelolagaleri', [geleriWisataController::class, 'kelolaindexAction']);
        Route::get('/tambah-galeri-wisata', [geleriWisataController::class, 'tambah']);
        Route::get('/ubah-galeri-wisata/{id}', [geleriWisataController::class, 'edit']);
        Route::post('/ubah-galeri-wisata/{id}', [geleriWisataController::class, 'update'])->name('galeriwisata.ubah');
        Route::post('/tambah-galeri-wisata/store', [geleriWisataController::class, 'store'])->name('formgaleriwisata.store');
        Route::get('/galeri/hapus/{id}', [geleriWisataController::class, 'hapus'])->name('galeriwisata.hapus');

        //fasilitas
        Route::get('/daftar-fasilitas', [fasilitasController::class, 'kelolaindexActionDaftarFasilitas']);
        Route::get('/tambah-fasilitas-wisata', [fasilitasController::class, 'tambahfasilitas']);
        Route::get('/ubah-fasilitas-wisata/{id}', [fasilitasController::class, 'editfasilitas']);
        Route::post('/ubah-fasilitas-wisata/{id}', [fasilitasController::class, 'update'])->name('fasilitaswisata.ubah');
        Route::post('/tambah-fasilitas/store', [fasilitasController::class, 'storefasilitas'])->name('formdaftarfasilitas.store');
        Route::get('/fasilitas/hapus/{id}', [fasilitasController::class, 'hapus'])->name('fasilitas.hapus');
        Route::get('/lihat-fasilitaswisata/{id}', [fasilitasController::class, 'kelolaindexActionView']);

        //kelola atraksi
        Route::get('/kelolaatraksi', [atraksiController::class, 'kelolaindexAction']);
        Route::get('/tambah-atraksi-wisata', [atraksiController::class, 'tambah']);
        Route::get('/ubah-atraksi-wisata/{id}', [atraksiController::class, 'edit']);
        Route::post('/ubah-atraksi-wisata/{id}', [atraksiController::class, 'update'])->name('atraksiwisata.ubah');
        Route::post('/tambah-atraksi-wisata/store', [atraksiController::class, 'store'])->name('formatraksiwisata.store');
        Route::get('/atraksiwisata/hapus/{id}', [atraksiController::class, 'hapus'])->name('atraksiwisata.hapus');
        Route::get('/lihat-atraksiwisata/{id}', [atraksiController::class, 'kelolaindexActionView']);

        //kelola event
        Route::get('/kelolaevent', [eventController::class, 'kelolaindexAction']);
        Route::get('/tambah-event-wisata', [eventController::class, 'tambah']);
        Route::get('/ubah-event-wisata/{id}', [eventController::class, 'edit']);
        Route::post('/ubah-event-wisata/{id}', [eventController::class, 'update'])->name('eventwisata.ubah');
        Route::post('/tambah-event-wisata/store', [eventController::class, 'store'])->name('formeventwisata.store');
        Route::get('/eventwisata/hapus/{id}', [eventController::class, 'hapus'])->name('eventwisata.hapus');
        Route::get('/lihat-eventwisata/{id}', [eventController::class, 'kelolaindexActionView']);

        //kelola kabupaten
        Route::get('/kelolakab', [KabupatenController::class, 'kelolaindexAction']);
        Route::get('/tambah-kab', [KabupatenController::class, 'tambah']);
        Route::get('/ubah-kab/{id}', [KabupatenController::class, 'edit']);
        Route::post('/ubah-kab/{id}', [KabupatenController::class, 'update'])->name('kabupaten.ubah');
        Route::post('/tambah-kab/store', [KabupatenController::class, 'store'])->name('formkabupaten.store');
        Route::get('/kabupaten/hapus/{id}', [KabupatenController::class, 'hapus'])->name('kabupaten.hapus');

        //kelola kategori wisata
        Route::get('/kelolakat', [KategoriWisataController::class, 'index']);
        Route::get('/tambah-kat', [KategoriWisataController::class, 'tambah']);
        Route::get('/ubah-kat/{id}', [KategoriWisataController::class, 'edit']);
        Route::post('/ubah-kat/{id}', [KategoriWisataController::class, 'update'])->name('kategori.ubah');
        Route::post('/tambah-kat/store', [KategoriWisataController::class, 'store'])->name('formkategoriwisata.store');
        Route::get('/kategoriwisata/hapus/{id}', [KategoriWisataController::class, 'destroy'])->name('kabupaten.hapus');

        //Kelola Sampul fasilitas 
        Route::get('/sampul-fasilitas', [fasilitasController::class, 'kelolaindexActionSampul']);
        Route::get('/tambah-sampul-fasilitas', [fasilitasController::class, 'tambahsampul']);
        Route::get('/ubah-sampulfasilitas-wisata/{id}', [fasilitasController::class, 'editsampul']);
        Route::post('/ubah-sampulfasilitas-wisata/{id}', [fasilitasController::class, 'updatesampul'])->name('formsampulfasilitas.ubah');
        Route::post('/tambah-sampul-fasilitaswisata/store', [fasilitasController::class, 'store'])->name('formsampulfasilitas.store');
        Route::get('/sampul-fasilitas/hapus/{id}', [fasilitasController::class, 'hapusSampul'])->name('sampulfasilitas.hapus');

        //sampul atraksi
        Route::get('/sampul-atraksi', [atraksiController::class, 'kelolaindexActionSampul']);
        Route::get('/tambah-sampul-atraksi', [atraksiController::class, 'tambahsampul']);
        Route::get('/ubah-sampulatraksi/{id}', [atraksiController::class, 'editsampul']);
        Route::post('/ubah-sampulatraksi/{id}', [atraksiController::class, 'updatesampul'])->name('formsampulatraksi.ubah');
        Route::post('/tambah-sampul-atraksi/store', [atraksiController::class, 'storesampul'])->name('formsampulatraksi.store');
        Route::get('/sampul-atraksi/hapus/{id}', [atraksiController::class, 'hapusSampul'])->name('sampulatraksi.hapus');

    //sampul event
        Route::get('/sampul-event', [eventController::class, 'kelolaindexActionSampul']);
        Route::get('/tambah-sampul-event', [eventController::class, 'tambahsampul']);
        Route::get('/ubah-sampulevent/{id}', [eventController::class, 'editsampul']);
        Route::post('/ubah-sampulevent/{id}', [eventController::class, 'updatesampul'])->name('formsampulevent.ubah');
        Route::post('/tambah-sampul-event/store', [eventController::class, 'storesampul'])->name('formsampulevent.store');
        Route::get('/sampul-event/hapus/{id}', [eventController::class, 'hapusSampul'])->name('sampulevent.hapus');

        //kelola pengalaman wisata
         Route::get('/kelolapengalamanwisata', [PengalamanController::class, 'kelolaindexAction']);
         Route::get('/tambah-pengalaman-wisata', [PengalamanController::class, 'tambah']);
         Route::get('/ubah-pengalaman-wisata/{id}', [PengalamanController::class, 'editpengalaman']);
         Route::post('/ubah-pengalaman-wisata/{id}', [PengalamanController::class, 'update'])->name('pengalamanwisata.ubah');
         Route::post('/tambah-pengalaman-wisata/store', [PengalamanController::class, 'store'])->name('formpengalamanwisata.store');
         Route::get('/pengalamanwisata/hapus/{id}', [PengalamanController::class, 'hapus'])->name('pengalamanwisata.hapus');
       
        //Persetujuan pengalaman wisata
         Route::get('/persetujuanpengalamanwisata', [PengalamanController::class, 'kelolaindexAction2']);
         Route::get('/tambah-persetujuanpengalaman-wisata', [PengalamanController::class, 'tambah']);
         Route::get('/ubah-persetujuanpengalaman-wisata/{id}', [PengalamanController::class, 'editpersetujuan']);
         Route::post('/ubah-persetujuanpengalaman-wisata/{id}', [PengalamanController::class, 'updatepersetujuan'])->name('persetujuanpengalamanwisata.ubah');
         Route::post('/approved-persetujuanpengalaman-wisata/{id}', [PengalamanController::class, 'approve'])->name('persetujuanpengalamanwisata.approved');
         Route::post('/tambah-persetujuanpengalaman-wisata/store', [PengalamanController::class, 'storepersetujuan'])->name('formpersetujuanpengalamanwisata.store');
         Route::get('/persetujuanpengalaman-wisata/hapus/{id}', [PengalamanController::class, 'hapuspersetujuan'])->name('persetujuanpengalamanwisata.hapus');
         Route::get('/lihat-persetujuan/{id}', [PengalamanController::class, 'kelolaindexActionView']);

         //Kelola akun user
         Route::get('/kelolauser', [AkunController::class, 'index']);
         Route::get('/tambahuser', [AkunController::class, 'tambah']);
         Route::get('/ubahuser/{id}', [AkunController::class, 'edit']);
         Route::post('/ubahuser-wisata/{id}', [AkunController::class, 'update'])->name('user.ubah');
         Route::post('/tambahuser/store', [AkunController::class, 'store'])->name('formuser.store');
         Route::get('/userwisata/hapus/{id}', [AkunController::class, 'hapus'])->name('user.hapus');
    });


//--ADMIN SIDE--//

//--AUTHOR SIDE--//
Route::group(['middleware' => ['auth',  'ceklevel:2,3']], function () {
        //Index utama
        Route::get('/admin-wisata', [adminIndexController::class, 'indexAction']);


        //Kelola Objek Wisatawa
        Route::get('/kelolaobjek', [objekWisataController::class, 'kelolaindexAction']);
        Route::get('/tambah-objek-wisata', [objekWisataController::class, 'tambah']);
        Route::get('/ubah-objek-wisata/{id}', [objekWisataController::class, 'edit']);
        Route::post('/ubah-objek-wisata/{id}', [objekWisataController::class, 'update'])->name('objekwisata.ubah');
        Route::post('/tambah-objek-wisata/store', [objekWisataController::class, 'store'])->name('formobjekwisata.store');
        Route::get('/objekwisata/hapus/{id}', [objekWisataController::class, 'hapus'])->name('objekwisata.hapus');
        Route::get('/lihat-objekwisata/{id}', [objekWisataController::class, 'kelolaindexActionView']);

        //kelolaberita
        Route::get('/kelolaberita', [beritaController::class, 'kelolaindexAction']);
        Route::get('/tambah-berita-wisata', [beritaController::class, 'tambah']);
        Route::get('/ubah-berita-wisata/{id}', [beritaController::class, 'edit']);
        Route::post('/ubah-berita-wisata/{id}', [beritaController::class, 'update'])->name('beritawisata.ubah');
        Route::post('/tambah-berita-wisata/store', [beritaController::class, 'store'])->name('formberitawisata.store');
        Route::get('/berita/hapus/{id}', [beritaController::class, 'hapus'])->name('beritawisata.hapus');
        Route::get('/lihat-beritawisata/{id}', [beritaController::class, 'kelolaindexActionView']);

        //kelola atraksi
        Route::get('/kelolaatraksi', [atraksiController::class, 'kelolaindexAction']);
        Route::get('/tambah-atraksi-wisata', [atraksiController::class, 'tambah']);
        Route::get('/ubah-atraksi-wisata/{id}', [atraksiController::class, 'edit']);
        Route::post('/ubah-atraksi-wisata/{id}', [atraksiController::class, 'update'])->name('atraksiwisata.ubah');
        Route::post('/tambah-atraksi-wisata/store', [atraksiController::class, 'store'])->name('formatraksiwisata.store');
        Route::get('/atraksiwisata/hapus/{id}', [atraksiController::class, 'hapus'])->name('atraksiwisata.hapus');
        Route::get('/lihat-atraksiwisata/{id}', [atraksiController::class, 'kelolaindexActionView']);

        //kelola event
        Route::get('/kelolaevent', [eventController::class, 'kelolaindexAction']);
        Route::get('/tambah-event-wisata', [eventController::class, 'tambah']);
        Route::get('/ubah-event-wisata/{id}', [eventController::class, 'edit']);
        Route::post('/ubah-event-wisata/{id}', [eventController::class, 'update'])->name('eventwisata.ubah');
        Route::post('/tambah-event-wisata/store', [eventController::class, 'store'])->name('formeventwisata.store');
        Route::get('/eventwisata/hapus/{id}', [eventController::class, 'hapus'])->name('eventwisata.hapus');
        Route::get('/lihat-eventwisata/{id}', [eventController::class, 'kelolaindexActionView']);


        //fasilitas
        Route::get('/daftar-fasilitas', [fasilitasController::class, 'kelolaindexActionDaftarFasilitas']);
        Route::get('/tambah-fasilitas-wisata', [fasilitasController::class, 'tambahfasilitas']);
        Route::get('/ubah-fasilitas-wisata/{id}', [fasilitasController::class, 'editfasilitas']);
        Route::post('/ubah-fasilitas-wisata/{id}', [fasilitasController::class, 'update'])->name('fasilitaswisata.ubah');
        Route::post('/tambah-fasilitas/store', [fasilitasController::class, 'storefasilitas'])->name('formdaftarfasilitas.store');
        Route::get('/fasilitas/hapus/{id}', [fasilitasController::class, 'hapus'])->name('fasilitas.hapus');
        Route::get('/lihat-fasilitaswisata/{id}', [fasilitasController::class, 'kelolaindexActionView']); 
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

