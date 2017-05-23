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
Route::get('/register','Auth\RegisterController@showRegistrationForm');
Route::post('/colleges/{id}/register','Auth\RegisterController@register');

Route::get('/home', 'HomeController@index');

Route::get('/staffId/create','StaffIDController@create');
Route::post('/staffId/create','StaffIDController@store');

/*Route::get('/colleges/create','CollegeController@create');
Route::post('/colleges/create','CollegeController@store');
Route::get('/colleges/index','CollegeController@index');
Route::get('/colleges/{id}/show','CollegeController@show'); */

Route::resource('colleges','CollegeController');


Route::get('/colleges/{id}/categories/create','CategoryController@create');
Route::post('/colleges/{id}/categories/create','CategoryController@store');

Route::get('/colleges/{id}/collegedepartments/create','DepartmentsController@create');
Route::post('/colleges/{id}/collegedepartments/create','DepartmentsController@store');


Route::get('colleges/{id}/lecturers/create','LecturersController@create');
Route::post('colleges/{id}/lecturers/create','LecturersController@store');

Route::get('colleges/{id}/otherstaffs/create','OtherStuffsController@create');
Route::post('colleges/{id}/otherstaffs/create','OtherStuffsController@store');

Route::get('colleges/{id}/collegestaffIDs/create','CollegeStaffIDsController@create');
Route::post('colleges/{id}/collegestaffIDs/create','CollegeStaffIDsController@store');