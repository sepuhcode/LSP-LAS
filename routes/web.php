<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimController;
use App\Http\Controllers\TukController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PosisiLasController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\SertifikasiController;
use App\Http\Controllers\SurveillanceController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\SkemaSertifikasiController;


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
Route::post('/daftar/store', [AuthController::class, 'postRegister'])->middleware('guest')->name('daftar.store');
Route::get('/login', [AuthController::class, 'indexLogin'])->middleware('guest')->name('login');
Route::post('/login/authenticate', [AuthController::class, 'authenticate'])->middleware('guest')->name('login.authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/home', [LandingPageController::class, 'showHomePage'])->name('home');
Route::get('/sertifikat', [LandingPageController::class, 'showSertifikatPage'])->name('sertifikat');
Route::post('/sertifikat/find', [LandingPageController::class, 'cariSertifikatNew'])->name('sertifikat.find');

Route::get('/pendaftaran', [LandingPageController::class, 'showPendaftaran'])->name('pendaftaran');
Route::get('/about', [LandingPageController::class, 'showAbout'])->name('about');
Route::get('/surveillance', [LandingPageController::class, 'showSurveillance'])->name('surveillance');
Route::post('/surveillance', [LandingPageController::class, 'storeSurveillance'])->name('store.surveillance');

//admin routes
Route::prefix('/admin')->name('admin.')->middleware(['role:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/user', UserController::class);
    Route::post('/verification/accept/{id}', [VerificationController::class, 'postAccept'])->name('verification.post-accept');
    Route::post('/verification/reject/{id}', [VerificationController::class, 'postReject'])->name('verification.post-reject');
    Route::resource('/verification', VerificationController::class);
    Route::resource('/carousel', CarouselController::class);
    Route::resource('/tim', TimController::class);
    Route::resource('/surveillance', SurveillanceController::class);
    Route::resource('/kegiatan', KegiatanController::class);
    Route::resource('/tuk', TukController::class);
    Route::resource('/skema-sertifikasi', SkemaSertifikasiController::class);
    Route::resource('/posisi-las', PosisiLasController::class);
    Route::post('/sertifikat/import/store', [SertifikasiController::class, 'saveImport'])->name('sertifikat.import.store');
    Route::get('/sertifikat/import', [SertifikasiController::class, 'showImport'])->name('sertifikat.import.create');
    Route::resource('/sertifikat', SertifikasiController::class);
    Route::post('/get-posisi-las', [SertifikasiController::class, 'fetchPosisiLas']);
    Route::get('/view-file/{file}', [SertifikasiController::class, 'viewFile']);
});

Route::get('/change-password', [ChangePassword::class, 'changePassword']);
Route::post('/change-password', [ChangePassword::class, 'savePassword']);

Route::view('testtuk', 'admin.tuk.index');
