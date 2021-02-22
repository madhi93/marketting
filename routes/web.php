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

// Route::get('/script', 'HomeController@script')->name('script');


Route::get('/listing-page', 'HomeController@listingPage')->name('lpage');

Route::get('/view', 'HomeController@viewlistingPage')->name('vlpage');

Route::get('/create/ajax-vehicle-type', 'HomeController@createVehiclepage')->name('avp');
Route::get('/due-expense-page', 'HomeController@dueExpensePage')->name('dupage');
Route::get('/due-recipt', 'HomeController@dueRecipt')->name('ddpage');

Route::post('/new-regi', 'HomeController@newRegistration')->name('newreg');

Route::post('/due-recipt', 'HomeController@dueReciptCreate')->name('ddstore');



Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
