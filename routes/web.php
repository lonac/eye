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



//UNIVERSITY
Route::get('/universities/register', 'UniversityController@register');
Route::post('/universities/register', 'UniversityController@store');
Route::get('/universities', 'UniversityController@index');
Route::get('/universities/{id}','UniversityController@show');


//Search
Route::get('search',array('as'=>'search','uses'=>'SearchController@search'));
Route::get('autocomplete',array('as'=>'autocomplete','uses'=>'SearchController@autocomplete'));


//Admins
Route::get('universities/{id}/admin','AdminPageController@index');



//university_component
Route::get('universities/{id}/university_comp/add','UniversityComponentController@add');
Route::post('universities/{id}/university_comp/add','UniversityComponentController@newcomp');
Route::get('universities/{id}/university_comp/edit/{comp_id}','UniversityComponentController@edit');

Route::get('universities/{id}/university_comp/update','UniversityComponentController@update');
Route::post('universities/{id}/university_comp/update','UniversityComponentController@store');
Route::get('universities/{id}/university_comp/show','UniversityComponentController@show');



