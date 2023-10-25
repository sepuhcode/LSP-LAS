<?php

use App\Http\Controllers\SearchController;
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

Route::get('/', [SearchController::class, 'showHomePage']);
Route::get('search/{keyword}', [SearchController::class, 'search']);
Route::get('/convert/date', [SearchController::class, 'convertDate']);
Route::get('/check/date', [SearchController::class, 'checkDate']);
Route::post('/cari/setifikat',[SearchController::class,'cariSertifikat'])->name('cari.sertifikat');

