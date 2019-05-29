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

	
	
	Route::get('user/profile', 'HomeController@profile')->name('profile');
	

	Route::get('/home', 'HomeController@index')->name('home');
	Route::resource('/contracts', 'PeContractsController');
	Route::resource('/commencements', 'commencementsController');
	Route::resource('/bills', 'PeBillsController');

	Route::get('certificates', 'certificateController@index');
	Route::get('certificates/{type}', 'certificateController@index');
	Route::get('certificates/{type}', 'certificateController@index');

	Route::get('certificates/payment-certificate/{id}', 'certificateController@paymentCertificate')->name('payment-certificate');
	Route::get('certificates/payment-certificates/{id}', 'certificateController@paymentCertificates')->name('payment-certificates');
	Route::post('certificates/store-payment-certificate/{id}', 'certificateController@storePaymentCertificates')->name('store-payment-certificate');
	Route::get('certificates/payment-certificate/view/{id}', 'certificateController@showPaymentCertificate')->name('show-payment-certificate');
	

	Route::get('certificates/completion-certificate/{id}', 'certificateController@completionCertificate')->name('completion-certificate');
	Route::get('certificates/finalize-completion-certificate/{id}', 'certificateController@finalizeCompletionCertificateForm');
	Route::post('certificates/store-completion-certificate/{id}', 'certificateController@finalizeCompletionCertificateStore');

	// Route::get('certificates/pdf-completion-certificate/{id}', 'certificateController@makeCompletionCertificatePdf');


	Route::resource('certificate-files', 'CertificateFilesController');
	Route::get('/old-certificate-files', 'CertificateFilesController@createOld');
	Route::post('/old-certificate-files', 'CertificateFilesController@storeOld');
    
});


Route::get('/search', 'SearchController@index');
Route::get('search/cc', 'SearchController@search_completion');
Route::get('search/cc/{id}', 'SearchController@search_completion_show');
Route::post('search/cc', 'SearchController@search_completion');
Route::get('search/pc', 'SearchController@search_payment');
Route::post('search/pc', 'SearchController@search_payment');
Route::get('search/pc/{id}', 'SearchController@search_payment_show');
Route::get('search/cwh', 'SearchController@search_work_in_hand');
Route::post('search/cwh', 'SearchController@search_work_in_hand');


// Route::get('search', function () {
//     return 'Found Data URL';
// });

Route::get('/', 'PagesController@index');

Route::get('/what-we-do', 'PagesController@whatWeDo');


Route::get('staff', 'PagesController@staff');
Route::get('contact', 'PagesController@contact');

//Route::resource('uploads', 'UploadsController');
