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

Route::get('/home', 'HomeController@index');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/companies', 'CompanyController@index');
Route::get('/companies/matches', 'CompanyController@getTopTen');
Route::get('/cities', 'CityController@index');
Route::get('/jobposts', 'JobPostController@index');
Route::get('/jobposts/hr', 'JobPostController@hrindex');
Route::get('/profile', 'EmployeeInfoController@index');
Route::post('/profile/edit', 'EmployeeInfoController@store');
Route::post('/profile/create', 'EmployeeInfoController@create');
//Quick Stats
Route::get('/quick1', function () {
    return view('quickStats/quickone');
});
Route::get('/quick2', function () {
    return view('quickStats/quicktwo');
});
Route::get('/quick3', function () {
    return view('quickStats/quickthree');
});
Route::get('/quick4', function () {
    return view('quickStats/quickfour');
});
Route::get('/quick5', function () {
    return view('quickStats/quickfive');
});
Route::get('/quick6', function () {
    return view('quickStats/quicksix');
});