<?php

use App\Http\Controllers\Carousel2Controller;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\GambarTukController;
use App\Http\Controllers\SearchController;
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
    return view('welcome');
});

Route::get('search/{keyword}', [SearchController::class, 'search']);
Route::get('/convert/date', [SearchController::class, 'convertDate']);
Route::get('/check/date', [SearchController::class, 'checkDate']);

Route::post('/cari/setifikat',[SearchController::class,'cariSertifikat'])->name('cari.sertifikat');
Route::get('/home', [SearchController::class, 'showHomePage']);

//admin routes
Route::resource('/admin/user',UserController::class); //CRUD data user
Route::resource('/admin/carousel',CarouselController::class); //CRUD gambar carousel
// Route::get('/test/routes',[Carousel2Controller::class]);
Route::resource('/admin/tuk', GambarTukController::class); //DRUD gambar tuk

