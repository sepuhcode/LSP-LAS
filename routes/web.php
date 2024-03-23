<?php

use App\Http\Controllers\CarouselController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PosisiLasController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SertifikasiController;
use App\Http\Controllers\SkemaSertifikasiController;
use App\Http\Controllers\TukController;
use App\Http\Controllers\UserController;
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

Route::get('/', function() {
    return redirect('/home');
});

// Route::get('search/{keyword}', [SearchController::class, 'search']); //cuma buat test
// Route::get('/convert/date', [SearchController::class, 'convertDate']); //cuma buat test
// Route::get('/check/date', [SearchController::class, 'checkDate']); //cuma buat test

// auth
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login',[LoginController::class,'authenticate'])->middleware('guest');
Route::get('/logout',[LoginController::class,'logout'])->middleware('auth');

Route::get('/home', [SearchController::class, 'showHomePage'])->name('home');
Route::get('/cari/sertifikat',[SearchController::class,'showSertifikatPage'])->name('sertifikat');
Route::post('/cari/sertifikat',[SearchController::class,'cariSertifikat']);


// Route::get('/home', [SearchController::class, 'showHomePage'])->name('home');

//admin routes
Route::prefix('/admin')->name('admin.')->group(function(){
    Route::resource('/user',UserController::class); //CRUD data user
    Route::resource('/carousel',CarouselController::class); //CRUD gambar carousel
    Route::resource('/tuk', TukController::class); //CRUD gambar tuk
    Route::resource('/registration', RegistrationController::class); //verifikasi registrasi akun user
    Route::resource('/skema-sertifikasi', SkemaSertifikasiController::class); //verifikasi registrasi akun user
    Route::resource('/posisi-las', PosisiLasController::class); //verifikasi registrasi akun user

    Route::post('/sertifikat/import', [SertifikasiController::class,'saveImport'])->name('import-sertifikat');
    Route::get('/sertifikat/import', [SertifikasiController::class,'showImport'])->name('import-sertifikat');
});


//registration route
Route::resource('/register',RegistrationController::class);


//test halaman admin
Route::view('testadmin','admin.dashboard.index');
Route::view('testtuk','admin.tuk.index');
