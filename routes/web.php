<?php

use App\Http\Controllers\CarouselController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SearchController;
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
// Route::get('/', [SearchController::class, 'showHomePage']);
Route::get('/home', [SearchController::class, 'showHomePage'])->name('home');
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login',[LoginController::class,'authenticate'])->middleware('guest');
Route::get('/logout',[LoginController::class,'logout'])->middleware('auth');
Route::post('/cari/setifikat',[SearchController::class,'cariSertifikat'])->name('cari.sertifikat');


//admin routes
Route::resource('/admin/user',UserController::class); //CRUD data user
Route::resource('/admin/carousel',CarouselController::class); //CRUD gambar carousel
Route::resource('/admin/tuk', TukController::class); //CRUD gambar tuk


