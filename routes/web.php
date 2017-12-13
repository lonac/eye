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
// Registrations


Route::get('/home', 'HomeController@index');
Route::get('/about','HomeController@about');


/*Route::get('/colleges/create','CollegeController@create');
Route::post('/colleges/create','CollegeController@store');
Route::get('/colleges/index','CollegeController@index');
Route::get('/colleges/{id}/show','CollegeController@show'); */

//Route::resource('colleges','CollegeController');

//Route::get('colleges/{id}/staffs/index','StaffController@index');






