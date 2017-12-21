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
Route::get('/universities/{id}/login','UniversityController@LoginForm');


//UNIVERSITY-COMPONENTS
Route::get('universities/{id}/university_comp/add','UniversityComponentController@add');
Route::post('universities/{id}/university_comp/add','UniversityComponentController@newcomp');
Route::get('universities/{id}/university_comp/edit/{comp_id}','UniversityComponentController@edit');
Route::patch('universities/{id}/university_comp/edit/{comp_id}','UniversityComponentController@update');
Route::post('universities/{id}/university_comp/{comp_id}','UniversityComponentController@destroy');


Route::get('universities/{id}/university_comp/update','UniversityComponentController@updateDefaults');
Route::post('universities/{id}/university_comp/update','UniversityComponentController@store');
Route::get('universities/{id}/university_comp/{param}','UniversityComponentController@show');
Route::get('universities/{id}/university_comp','UniversityComponentController@showAdminComp');


//UNIVERSITY SUB-COMPONENTS
Route::get('universities/{id}/university_comp/{comp_id}/university-subcomp/create','UniverSubCompController@create');
Route::post('universities/{id}/university_comp/{comp_id}/university-subcomp/create','UniverSubCompController@store');
Route::get('universities/{id}/university_comp/{comp_id}/university-subcomp/show','UniverSubCompController@show');


Route::get('universities/{id}/university_comp/{comp_id}/university-subcomp/add','UniverSubCompController@add');
Route::post('universities/{id}/university_comp/{comp_id}/university-subcomp/add','UniverSubCompController@addNew');

Route::get('universities/{id}/university_comp/{comp_id}/university-subcomp','UniverSubCompController@showAdminComp');


 /*Route::get('universities/{id}/university-subcomp','UniversitySubCompController@index');
Route::get('universities/{id}/university_comp/{comp_id}/university-subcomp/update','UniversitySubCompController@create');
Route::post('universities/{id}/university_comp/{comp_id}/university-subcomp/update','UniversitySubCompController@update');
Route::get('universities/{id}/university_comp/{comp_id}/university-subcomp/add','UniversitySubCompController@add');
Route::post('universities/{id}/university_comp/{comp_id}/university-subcomp/add','UniversitySubCompController@store');
Route::get('universities/{id}/university_comp/{comp_id}/university-subcomp/show','UniversitySubCompController@show');
*/

//Search
Route::get('search',array('as'=>'search','uses'=>'SearchController@search'));
Route::get('autocomplete',array('as'=>'autocomplete','uses'=>'SearchController@autocomplete'));


//Admins
Route::get('universities/{id}/admin','AdminPageController@index');





