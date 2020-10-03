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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/dummy', 'DummyController@index');

Route::get('/faculty', 'FacultyController@index');
Route::get('/faculty/create', 'FacultyController@create');
Route::post('/faculty', 'FacultyController@store');
Route::get('/faculty/edit/{id}', 'FacultyController@edit');
Route::put('/faculty', 'FacultyController@update');
Route::get('/faculty/delete/{id}', 'FacultyController@destroy');
Route::get('/faculty/show/{id}', 'FacultyController@show');

Route::get('/majority', 'MajorityController@index');
Route::get('/majority/create', 'MajorityController@create');
Route::post('/majority', 'MajorityController@store');
Route::get('/majority/edit/{id}', 'MajorityController@edit');
Route::put('/majority', 'MajorityController@update');
Route::get('/majority/delete/{id}', 'MajorityController@destroy');
Route::get('/majority/show/{id}', 'MajorityController@show');

Route::get('/student', 'StudentController@index');
Route::get('/student/create', 'StudentController@create');
Route::post('/student', 'StudentController@store');
Route::get('/student/edit/{id}', 'StudentController@edit');
Route::put('/student', 'StudentController@update');
Route::get('/student/delete/{id}', 'StudentController@destroy');
Route::get('/student/show/{id}', 'StudentController@show');

Route::get('/card', 'CardController@index');
Route::get('/card/create', 'CardController@create');
Route::post('/card', 'CardController@store');
Route::get('/card/edit/{id}', 'CardController@edit');
Route::put('/card', 'CardController@update');
Route::get('/card/delete/{id}', 'CardController@destroy');
// Route::get('/card/show/{id}', 'CardController@show');

Route::get('/credit', 'CreditController@index');
Route::get('/credit/create', 'CreditController@create');
Route::post('/credit', 'CreditController@store');
Route::get('/credit/edit/{id}', 'CreditController@edit');
Route::put('/credit', 'CreditController@update');
Route::get('/credit/delete/{id}', 'CreditController@destroy');
Route::get('/credit/show/{id}', 'CreditController@show');

Route::get('/club', 'ClubController@index');
Route::get('/club/create', 'ClubController@create');
Route::post('/club', 'ClubController@store');
Route::get('/club/edit/{id}', 'ClubController@edit');
Route::put('/club', 'ClubController@update');
Route::get('/club/delete/{id}', 'ClubController@destroy');
Route::get('/club/show/{id}', 'ClubController@show');

// Route::get('/product', 'ProductController@index');

// Route::get('/', function () {
//     return view('welcome');
// });
