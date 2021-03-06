<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group([ 'middleware' => 'auth' ], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('product', 'ProductController');
    Route::resource('brand', 'BrandController');
    Route::resource('categorie', 'CategorieController');
    Route::resource('user', 'UserController');
    Route::resource('transaksi', 'TransaksiController');
    Route::get('/laporanmasuk', 'ProductController@laporanmasuk');
    Route::get('/laporankeluar', 'TransaksiController@laporankeluar');
    route::get('/laporanmasuk/cetak', 'ProductController@cetakBarangMasuk');
    route::get('/laporankeluar/cetak', 'TransaksiController@cetakBarangKeluar');
   });