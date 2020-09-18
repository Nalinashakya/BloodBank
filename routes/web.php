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
    return view('frontend.home.home');
});


Route::get('/dashboard',function(){
	return view('home');
});



Route::get('/home',function(){
	return view('frontend.home.home');

});
Route::get('/about',function(){
	return view('frontend.about.about');

});
Route::get('/add-organization', 'Organizationcontroller@add');
Route::post('/store-organization', 'Organizationcontroller@store');
Route::get('/view-organization','Organizationcontroller@view');
Route::get('/delete-organization/{id}','Organizationcontroller@deleteorganization');

Route::get('/edit-organization/{id}','Organizationcontroller@edit');
Route::post('/update-organization/{id}', 'Organizationcontroller@update');

Route::get('/add-donor', 'Donorcontroller@add');
Route::post('/store-donor', 'Donorcontroller@store');
Route::get('/view-donor','Donorcontroller@view');
Route::get('/delete-donor/{id}','Donorcontroller@deletedonor');

Route::get('/edit-donor/{id}','Donorcontroller@edit');
Route::post('/update-donor/{id}', 'Donorcontroller@update');


Route::get('/add-event', 'Eventcontroller@add');
Route::post('/store-event', 'Eventcontroller@store');
Route::get('/view-event','Eventcontroller@view');
Route::get('/delete-event/{id}','Eventcontroller@deleteevent');

Route::get('/edit-event/{id}','Eventcontroller@edit');
Route::post('/update-event/{id}', 'Eventcontroller@update');

