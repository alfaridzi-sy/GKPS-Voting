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
    return view('auth/login');
});

Route::get('/test', function () {
    return view('test');
});

Route::resource('/pengaturansesi', 'PengaturanSesiController');
Route::resource('/pendaftarankandidat', 'PendaftaranKandidatController');
Route::resource('/pengaturanabsensi', 'PengaturanAbsensiController');
Route::resource('/prosesvoting', 'ProsesVotingController');
Route::resource('/hasilvoting', 'HasilVotingController');
Route::resource('/suratsuaraviaadmin', 'SuratSuaraViaAdminController');
Route::resource('/absenviaadmin', 'AbsenViaAdminController');
Route::resource('/registrasiklienmanual', 'RegistrasiKlienManualController');
Route::resource('/sesi', 'SesiController');
Route::resource('/klien', 'KlienController');
Route::resource('/tambahjenispemilihan', 'MasterData');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/autocomplete/fetch', 'PendaftaranKandidatController@fetch')->name('autocomplete.fetch');
Route::post('/hentikanabsen', 'PengaturanAbsensiController@hentikan')->name('pengaturanabsensi.hentikan');
Route::post('/hentikanvote', 'ProsesVotingController@hentikanVote')->name('prosesvoting.hentikan');
Route::post('/gotovote', 'PengaturanAbsensiController@gotoVote')->name('pengaturanabsensi.gotovote');
Route::post('/gotohasil', 'ProsesVotingController@gotoHasil')->name('prosesvoting.gotohasil');
Route::post('/akhirivote', 'HasilVotingController@akhiriVote')->name('hasilvoting.akhiri');
