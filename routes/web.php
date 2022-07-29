<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoucherCodeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\CompanyController;
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
Route::get('/voucher',[VoucherCodeController::class,'index'])->name('index');
Route::post('/voucher/create',[VoucherCodeController::class,'create'])->name('create');
Route::get('/voucher/edit/{id}',[VoucherCodeController::class,'edit'])->name('edit');
Route::post('/voucher/update/{id}',[VoucherCodeController::class,'update'])->name('update');
Route::get('/voucher/delete/{id}',[VoucherCodeController::class,'delete'])->name('delete');

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


//Banner 
Route::get('/banner/list',[BannerController::class,'banner_index'])->name('banner-index');
Route::get('/banner/show',[BannerController::class,'banner_show'])->name('banner-show');
Route::post('/banner/create',[BannerController::class,'banner_create'])->name('banner-create');
Route::post('/banner/search',[BannerController::class,'banner_search'])->name('banner-search');
Route::get('/banner/edit/{id}',[BannerController::class,'banner_edit'])->name('banner-edit');
Route::get('/banner/delete/{id}',[BannerController::class,'banner_delete'])->name('banner-delete');
Route::post('/banner/update/{id}',[BannerController::class,'banner_update'])->name('banner-update');


//Provider
Route::get('/provider/list',[ProviderController::class,'provider_index'])->name('provider-index');
Route::get('/provider/show',[ProviderController::class,'provider_show'])->name('provider-show');

//Companyy
Route::get('/company/list',[CompanyController::class,'company_index'])->name('company-index');
Route::get('/company/show',[CompanyController::class,'company_show'])->name('company-show');

