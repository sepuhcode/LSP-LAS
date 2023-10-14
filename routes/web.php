<?php

use App\Http\Controllers\testSearchController;
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

Route::get('search/{keyword}', [testSearchController::class, 'search']);
Route::get('/convert/date', [testSearchController::class, 'convertDate']);
Route::get('/check/date', [testSearchController::class, 'checkDate']);

Route::post('/cari/setifikat',[testSearchController::class,'cariSertifikat'])->name('cari.sertifikat');
Route::get('/home', [testSearchController::class, 'showHomePage']);