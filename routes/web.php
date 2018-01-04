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
		
	});



	Route::get('/', function () {
        return view('home');
    });
	

	Route::get('/home', 'HomeController@index')->name('home');

    
});
