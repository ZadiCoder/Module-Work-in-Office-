<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoucherCodeController;
use App\Http\Controllers\MultiLanguageController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\DocumentController;



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
Route::get('/list',[MultiLanguageController::class,'index'])->name('index');
Route::get('/add',function(){
    return view('language.addLang');
})->name('addLang');

//Route::post('/create',[LanguageController:class,'create'])->name('create');

Route::post('/create',[MultiLanguageController::class,'create'])->name('create');
Route::get('/edit/{id}',[MultiLanguageController::class,'edit'])->name('edit');
Route::post('/update/{id}',[MultiLanguageController::class,'update'])->name('update');
Route::post('/search',[MultiLanguageController::class,'search'])->name('search');


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
Route::post('/provider/create',[ProviderController::class,'provider_create'])->name('provider-create');
Route::get('/provider/edit/{id}',[ProviderController::class,'provider_edit'])->name('provider-edit');
Route::get('/provider/delete/{id}',[ProviderController::class,'provider_delete'])->name('provider-delete');
Route::post('/provider/update/{id}',[ProviderController::class,'provider_update'])->name('provider-update');
Route::post('/provider/search',[ProviderController::class,'provider_search'])->name('provider-search');

//provider Bank
Route::get('/provider/bank/edit/{id}',[BankController::class,'provider_bank_edit'])->name('provider-bank-edit');
Route::post('/provider/bank/update/{id}',[BankController::class,'provider_bank_update'])->name('provider-bank-update');
//provider Documents
Route::get('/provider/decument/show/{id}',[ProviderController::class,'provider_document_show'])->name('provider-document-show');
Route::post('/provider/decument/work-experience',[DocumentController::class,'provider_create_work'])->name('provider-create-work');
Route::get('/provider/decument/work/show/{id}',[DocumentController::class,'provider_show_work'])->name('provider-show-work');


//Companyy
Route::get('/company/list',[CompanyController::class,'company_index'])->name('company-index');
Route::get('/company/show',[CompanyController::class,'company_show'])->name('company-show');

