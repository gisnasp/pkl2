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
    Route::resource('kategori','KategoriController');
    Route::resource('artikel','ArtikelController');
    // Route::resource('kategori','KategoriController');
});

    Route::get('book', function () {
        return view('book');
    });
    Route::get('categori', function () {
        return view('categori');
    });
    Route::get('about', function () {
        return view('about');
    });
    Route::get('welcome', function () {
        return view('welcome');
    });

    Route::get('ayat2', function () {
        return view('frontend.ayat2');
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
    Route::get('empat', function () {
        return view('frontend.romantis.empat');
    });
    Route::get('kekasih', function () {
        return view('frontend.romantis.kekasih');
    });
    Route::get('cintaa', function () {
        return view('frontend.romantis.cintaa');
    });
    Route::get('dilan', function () {
        return view('frontend.romantis.dilan');
    });
    Route::get('asiyah', function () {
        return view('frontend.romantis.asiyah');
    });
    Route::get('ikhlas', function () {
        return view('frontend.romantis.ikhlas');
    });
    Route::get('suramadu', function () {
        return view('frontend.horor.suramadu');
    });
    Route::get('rumah', function () {
        return view('frontend.horor.rumah');
    });
    Route::get('misteri', function () {
        return view('frontend.horor.misteri');
    });
    Route::get('rasuk', function () {
        return view('frontend.horor.rasuk');
    });
    Route::get('aku', function () {
        return view('frontend.horor.aku');
    });
    Route::get('kamar', function () {
        return view('frontend.horor.kamar');
    });
    Route::get('koala', function () {
        return view('frontend.komedi.koala');
    });
    Route::get('bronto', function () {
        return view('frontend.komedi.bronto');
    });
    Route::get('babi', function () {
        return view('frontend.komedi.babi');
    });
    Route::get('marmut', function () {
        return view('frontend.komedi.marmut');
    });
    Route::get('ubur', function () {
        return view('frontend.komedi.ubur');
    });
    Route::get('radikus', function () {
        return view('frontend.komedi.radikus');
    });
