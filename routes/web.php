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




Auth::routes();


Route::middleware(['auth'])->group(function () {
	Route::middleware(['admin'])->group(function () {
		Route::resource('admin/users', 'UsersController');
		Route::resource('admin/gusers', 'GusersController');
		Route::resource('admin/divisions', 'DivisionsController');
		Route::resource('admin/districts', 'DistrictsController');
		Route::resource('admin/zones', 'ZonesController');
		Route::resource('admin/circles', 'CirclesController');
		Route::resource('admin/peoffices', 'PeofficesController');
		Route::resource('admin/contracts', 'ContractsController');
		Route::resource('admin/projects', 'ProjectsController');
		Route::resource('admin/bills', 'BillsController');



	});

	
	
	

	Route::get('/home', 'HomeController@index')->name('home');
	Route::resource('/contracts', 'PeContractsController');
	Route::resource('/commencements', 'commencementsController');
	Route::resource('/bills', 'PeBillsController');

	Route::get('certificates', 'certificateController@index');
	Route::get('certificates/{type}', 'certificateController@index');
	Route::get('certificates/{type}', 'certificateController@index')              ;
	Route::get('certificates/payment-certificate/{id}', 'certificateController@paymentCertificate')->name('payment-certificate');
	Route::get('certificates/completion-certificate/{id}', 'certificateController@completionCertificate')->name('completion-certificate');
	Route::get('certificates/finalize-completion-certificate/{id}', 'certificateController@finalizeCompletionCertificateForm');
	Route::post('certificates/store-completion-certificate/{id}', 'certificateController@finalizeCompletionCertificateStore');

	Route::get('certificates/pdf-completion-certificate/{id}', 'certificateController@makeCompletionCertificatePdf');

    
});

Route::get('/', 'SearchController@index');
Route::get('search/cc', 'SearchController@search_completion');
Route::get('search/cc/{id}', 'SearchController@search_completion_show');
Route::post('search/cc', 'SearchController@search_completion');
Route::get('search/pc', 'SearchController@search_payment');
Route::post('search/pc', 'SearchController@search_payment');


Route::get('search', function () {
    return 'Found Data URL';
});
Route::get('pubs/staff', 'SearchController@staff');
