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
	return redirect('login'); 
});

Route::get('/admin2', function () { 
	return view('layouts.admin3'); 
});

 // subcategoris
Route::get('/barangkeluar/getIdCustomer','BarangkeluarController@getDetailCustomer');
Route::get('/barangmasuk/getIdSupplier','BarangmasukController@getDetailSupplier');
Route::get('/barangkeluar/getIdBarang','BarangKeluarController@getDetailBarang')->name('getIdBarang');
Route::get('/barangmasuk/getIdBarang','BarangmasukController@getDetailBarang')->name('getIdBarang');
Route::get('/keuntungan/getIdCustomer','KeuntunganController@getDetailCustomer');
// endsubcategoris


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('settings/profile', 'SettingsController@profile');

Route::group(['middleware'=>['auth','role:admin']], function () {
	// Route diisi disini...
	Route::resource('barangmaster','BarangmasterController');
	Route::get('delete-data/{id}','BarangmasterController@destroy');
	Route::resource('customer','CustomerController');
	Route::resource('supplier','SupplierController');
	


});



	//excel 

	Route::get('export/barangmaster', [
    'as' => 'export.barangmaster',
    'uses' => 'BarangmasterController@exportPost'
	]);

	Route::get('export/laporan', [
    'as' => 'export.laporan',
    'uses' => 'LaporankeluarController@exportPost'
	]);

	Route::get('export/laporanmasuk', [
    'as' => 'export.laporanmasuk',
    'uses' => 'LaporanmasukController@exportPost'
	]);

//Laporan keluar
Route::resource('/keluar', 'LaporankeluarController');
Route::post('/reportkeluar' , 'LaporankeluarController@index2');

//laporan pemasukan

Route::resource('/masuk', 'LaporanmasukController');
Route::post('/reportmasuk' , 'LaporanmasukController@index2');

//Keuntungan 

Route::resource('/keuntungan', 'KeuntunganController');
Route::post('/reportuntung' , 'KeuntunganController@index2');


	//PDF

	Route::get('/barang/report/{view_type}', 'BarangmasterController@report');
	Route::get('/laporan/report/{view_type}', 'LaporankeluarController@report');
	Route::get('/laporanmasuk/reportmasuk/{view_type}', 'LaporanmasukController@report');

	//Member

Route::group(['middleware'=>['auth','role:member|admin']], function () {
	// Route diisi disini..
	Route::resource('barangmasuk','BarangmasukController');
	Route::resource('barangkeluar','BarangkeluarController');
	Route::get('barangkeluar/{id}','BarangkeluarController@getdataedit');
	

});

Route::post('/reportpdf2' , 'LaporanmasukController@pdf2');
Route::post('/reportpdf22' , 'LaporankeluarController@pdf22');
Route::post('/modal/{$id}', 'CustomerController@modal');
Route::post('/coba', 'CustomerController@store');
// Route::get('/modal2/{$id}', 'CustomerController@bebas')->name('naon');

//sweetalert



