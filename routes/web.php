<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoucherCodeController;
use App\Http\Controllers\LanguageController;
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
// Voucher 
Route::get('/',[VoucherCodeController::class,'index'])->name('index');
Route::post('/create',[VoucherCodeController::class,'create'])->name('create');
Route::get('/edit/{id}',[VoucherCodeController::class,'edit'])->name('edit');
Route::post('/update/{id}',[VoucherCodeController::class,'update'])->name('update');
Route::get('/delete/{id}',[VoucherCodeController::class,'delete'])->name('delete');

//Languages
Route::get('/list',[LanguageController::class,'index'])->name('index');
Route::get('/add',function(){
    return view('language.addLang');
})->name('addLang');

//Route::post('/create',[LanguageController:class,'create'])->name('create');

Route::post('/create',[LanguageController::class,'create'])->name('create');
Route::get('/edit/{id}',[LanguageController::class,'edit'])->name('edit');
Route::post('/update/{id}',[LanguageController::class,'update'])->name('update');
Route::post('/search',[LanguageController::class,'search'])->name('search');