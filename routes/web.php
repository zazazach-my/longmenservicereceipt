<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\PDFController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/r/create',[ReceiptController::class,'create']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/r',[ReceiptController::class, 'store']);

Route::get('/r-pdf', [PDFController::class,'generateInvoicePDF']);

