<?php

use App\Http\Controllers\CarouselController;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\FotoKaryawanController;
use App\Http\Controllers\FotoKegiatanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PosisiLasController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LandingPageController;
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

Route::get('/', function () {
    return redirect('/home');
});

// auth
Route::get('/daftar', [AuthController::class, 'indexRegister'])->middleware('guest')->name('daftar');
Route::get('/login', [AuthController::class, 'indexLogin'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/home', [LandingPageController::class, 'showHomePage'])->name('home');
Route::get('/sertifikat', [LandingPageController::class, 'showSertifikatPage'])->name('sertifikat');
Route::post('/sertifikat/find', [LandingPageController::class, 'cariSertifikatNew'])->name('sertifikat.find');

Route::get('/pendaftaran', [LandingPageController::class, 'showPendaftaran'])->name('pendaftaran');
Route::get('/about', [LandingPageController::class, 'showAbout'])->name('about');

//admin routes
Route::prefix('/admin')->name('admin.')->group(function () {
    Route::get('/user-asesor', [UserController::class, 'userAsesor'])->name('user-asesor'); //user asesor
    Route::get('/user-tuk', [UserController::class, 'userTuk'])->name('user-tuk'); //user TUK
    Route::get('/user-user', [UserController::class, 'userUser'])->name('user-user'); //user biasa
    Route::resource('/user/registration', RegistrationController::class); //verifikasi registrasi akun user
    Route::resource('/user', UserController::class); //CRUD data user
    Route::resource('/gambar-carousel', CarouselController::class); //CRUD gambar carousel
    Route::resource('/gambar-karyawan', FotoKaryawanController::class); //CRUD foto karyawan
    Route::resource('/gambar-kegiatan', FotoKegiatanController::class); //CRUD foto kegiatan
    Route::resource('/tuk', TukController::class); //CRUD gambar tuk
    Route::resource('/skema-sertifikasi', SkemaSertifikasiController::class); //CRUD skema sertifikasi
    Route::resource('/posisi-las', PosisiLasController::class); //CRUD posisi las

    Route::post('/sertifikat/import', [SertifikasiController::class, 'saveImport'])->name('import-sertifikat');
    Route::get('/sertifikat/import', [SertifikasiController::class, 'showImport'])->name('import-sertifikat');
    Route::resource('/sertifikat', SertifikasiController::class); //CRUD Sertifikat
    Route::post('/get-posisilas', [SertifikasiController::class, 'fetchPosisiLas']);
    Route::get('/view-file/{file}', [SertifikasiController::class, 'viewFile']);
});

Route::get('/change-password', [ChangePassword::class, 'changePassword']);
Route::post('/change-password', [ChangePassword::class, 'savePassword']);


//registration route
Route::resource('/register', RegistrationController::class);


//test halaman admin
Route::view('testadmin', 'admin.dashboard.index');
Route::view('testtuk', 'admin.tuk.index');
