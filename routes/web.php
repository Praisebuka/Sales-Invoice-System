<?php

use App\Http\Controllers\SalesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/edit_profile', 'HomeController@edit_profile')->name('edit_profile');
Route::POST('/update_profile/{id}', 'HomeController@update_profile')->name('update_profile');


Route::resource('category', 'CategoryController');
Route::resource('tax', 'TaxController');
Route::resource('unit', 'UnitController');
Route::resource('supplier', 'SupplierController');
Route::resource('customer', 'CustomerController');
Route::resource('product', 'ProductController');
Route::resource('invoice', 'InvoiceController');
Route::get('/sales', [SalesController::class, 'index'])->name('sales.index');
Route::resource('purchase', 'PurchaseController');
Route::get('/findPrice', 'InvoiceController@findPrice')->name('findPrice');
Route::get('/findPricePurchase', 'PurchaseController@findPricePurchase')->name('findPricePurchase');


