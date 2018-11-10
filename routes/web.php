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

Route::resource('/laravel', 'EducationalController');
Route::get('/event', 'EducationalController@event');
Route::get('/seniorHigh', 'EducationalController@seniorHigh');
Route::get('/highSchool', 'EducationalController@highSchool');
Route::get('/scholarship', 'EducationalController@scholarship');
Route::get('/guidanceCenter', 'EducationalController@guidanceCenter');
Route::get('/registrar', 'EducationalController@registrar'); 
Route::get('/clinic', 'EducationalController@clinic'); 
Route::get('/library', 'EducationalController@library');
Route::get('/building', 'EducationalController@building');
Route::get('/staff', 'EducationalController@staff');
Route::get('/teacher', 'EducationalController@teacher');