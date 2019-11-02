<?php

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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin','middleware' =>['auth','role:admin']],function(){
    Route::get('/',function(){
        return view('admin.index');
    });
    // Route::resource('user','UserController');
    Route::resource('buku','BukuController');
    Route::resource('peminjaman','PeminjamanController');
    Route::resource('detail','DetailController');
    Route::resource('penerbit','PenerbitController');
    Route::resource('peminjam','PeminjamController');
    Route::resource('petugas','PetugasController'); 
    Route::resource('kategori','KategoriController');
    Route::resource('pendaftaran','PendaftaranController');
    
    // Route::resource('kategori','KategoriController'); 
});  
    


//     Route::group(['prefix' => 'petugas','middleware' =>['auth','role:petugas']],function(){
//         Route::get('/',function(){
//             return view('petugas.index');
//  });
//     Route::resource('petugas','PetugasController');  
// });
    Route::resource('peminjam','PeminjamController');
    Route::resource('pendaftaran','PendaftaranController');
    Route::resource('detail','DetailController');

    Route::get('book', function () {
        return view('book');
    });
    Route::get('features', function () {
        return view('features');
    });
    Route::get('about', function () {
        return view('about');
    });
    Route::get('welcome', function () {
        return view('welcome');
    });

    Route::get('hujan', function () {
        return view('frontend.hujan');
    });

    Route::get('ayat', function () {
        return view('frontend.ayat');
    });
    Route::get('beijing', function () {
        return view('frontend.beijing');
    });
    Route::get('hujan2', function () {
        return view('frontend.hujan2');
    });
    Route::get('manusia', function () {
        return view('frontend.manusia');
    });
    Route::get('surga', function () {
        return view('frontend.surga');
    });
    Route::get('danur', function () {
        return view('frontend.danur');
    });
    Route::get('danur2', function () {
        return view('frontend.danur2');
    });
    Route::get('danur3', function () {
        return view('frontend.danur3');
    });