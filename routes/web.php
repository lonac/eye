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
Route::get('colleges/{id}/register','Auth\RegisterController@showRegistrationForm');
Route::post('colleges/{id}/register','Auth\RegisterController@register');

Route::get('/home', 'HomeController@index');

Route::get('/staffId/create','StaffIDController@create');
Route::post('/staffId/create','StaffIDController@store');

/*Route::get('/colleges/create','CollegeController@create');
Route::post('/colleges/create','CollegeController@store');
Route::get('/colleges/index','CollegeController@index');
Route::get('/colleges/{id}/show','CollegeController@show'); */

Route::resource('colleges','CollegeController');



Route::get('colleg/choose','collegController@colleg');

Route::get('/colleges/{id}/categories/create','CategoryController@create');
Route::post('/colleges/{id}/categories/create','CategoryController@store');

Route::get('/colleges/{id}/collegedepartments/create','DepartmentsController@create');
Route::post('/colleges/{id}/collegedepartments/create','DepartmentsController@store');
Route::get('/colleges/{id}/collegedepartments/show','DepartmentsController@show');


 Route::get('colleges/{id}/lecturers/create','LecturersController@create');
Route::post('colleges/{id}/lecturers/create','LecturersController@store');
Route::get('colleges/{id}/lecturers/index','LecturersController@index');
Route::get('colleges/{id}/lecturers/show','LecturersController@show');



Route::get('colleges/{id}/otherstaffs/create','OtherStuffsController@create');
Route::post('colleges/{id}/otherstaffs/create','OtherStuffsController@store');

Route::get('colleges/{id}/collegestaffIDs/create','CollegeStaffIDsController@create');
Route::post('colleges/{id}/collegestaffIDs/create','CollegeStaffIDsController@store');

Route::get('colleges/{id}/collegeAdministrations/show','CollegeAdministrationController@show');

Route::get('colleges/{id}/collegeCafteria/create','CollegeCafteriaController@create');
Route::post('colleges/{id}/collegeCafteria/create','CollegeCafteriaController@store');
Route::get('colleges/{id}/collegeCafteria/index','CollegeCafteriaController@index');
Route::get('colleges/{id}/collegeCafteria/show','CollegeCafteriaController@show');



Route::get('colleges/{id}/collegeHostels/create','CollegeHostelController@create');
Route::post('colleges/{id}/collegeHostels/create','CollegeHostelController@store');
Route::get('colleges/{id}/collegeHostels/show','CollegeHostelController@show');

Route::get('colleges/{id}/collegeHospital/create','CollegeHospitalController@create');
Route::post('colleges/{id}/collegeHospital/create','CollegeHospitalController@store');
Route::get('colleges/{id}/collegeHospital/show','CollegeHospitalController@show');


Route::get('colleges/{id}/financial/create','FinancialController@create');
Route::get('colleges/{id}/financial/show','FinancialController@show');
Route::post('colleges/{id}/financial/create','FinancialController@store');


Route::get('status/create','StatusController@create');
Route::post('status/create','StatusController@store');
Route::get('status/show','StatusController@show');





