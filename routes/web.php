<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoucherCodeController;
use App\Http\Controllers\MultiLanguageController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\DocumentCompanyController;
use App\Http\Controllers\UserInfoController;

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
//Provider Wallet 
Route::get('/provider/wallet/add/{id}',[ProviderController::class,'provider_add_wallet'])->name('provider-add-wallet');
Route::post('/provider/update/add/wallet',[ProviderController::class,'provider_update_add_wallet'])->name('provider-update-add-wallet');
Route::get('/provider/wallet/deduct/{id}',[ProviderController::class,'provider_deduct_wallet'])->name('provider-deduct-wallet');
Route::post('/provider/update/deduct/wallet',[ProviderController::class,'provider_update_deduct_wallet'])->name('provider-update-deduct-wallet');

//Companyy
Route::get('/company/list',[CompanyController::class,'company_index'])->name('company-index');
Route::get('/company/show',[CompanyController::class,'company_show'])->name('company-show');
Route::post('/company/create',[CompanyController::class,'company_create'])->name('company-create');
Route::get('/company/edit{id}',[CompanyController::class,'company_edit'])->name('company-edit');
Route::get('/company/delete{id}',[CompanyController::class,'company_delete'])->name('company-delete');
Route::post('/company/update/{id}',[CompanyController::class,'company_update'])->name('company-update');
Route::post('/company/search',[CompanyController::class,'company_search'])->name('company-search');

//Company's Document company-document-work
Route::get('/company/decument/show/{id}',[DocumentCompanyController::class,'company_document_show'])->name('company-document-show');
Route::post('/company/decument/create',[DocumentCompanyController::class,'company_document_create'])->name('company-document-create');
Route::get('/company/decument/work/{id}',[DocumentCompanyController::class,'company_document_work'])->name('company-document-work');
Route::get('/company/decument/work/{id}',[DocumentCompanyController::class,'company_document_work'])->name('company-document-work');
Route::get('/company/decument/delete/{id}',[DocumentCompanyController::class,'company_document_delete'])->name('company-document-delete');


//User 
Route::get('/', [UserInfoController::class,'index'])->name('home');
Route::get('/create', [UserInfoController::class,'create'])->name('create');
Route::post('/store', [UserInfoController::class,'store'])->name('store');
Route::get('/wallet/{id}',[UserInfoController::class,'wallet'])->name('wallet');
Route::post('/wallet/{id}',[UserInfoController::class,'wallet_edit'])->name('Change_wallet');
Route::get('/edit/{id}' , [UserInfoController::class,'edit'])->name('edit');
Route::post('/edit/{id}' , [UserInfoController::class,'edit_form'])->name('edit_post');
Route::post('/search' , [UserInfoController::class,'show'])->name('search');
Route::get('/delete/{id}', [UserInfoController::class,'delete'])->name('delete');