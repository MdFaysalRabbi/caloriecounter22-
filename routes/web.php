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



Route::get('/aa','FoodlistController@create');
Route::post('/st','FoodlistController@store');


Route::get('/bb','FoodlistController@viewfood');
Route::get('/bb1','FoodlistController@viewfood1');
Route::get('/bb2','FoodlistController@viewfood2');
Route::get('/bb3','FoodlistController@viewfood3');

Route::get('/a', function () {
    return view('user.login');
});

















Route::get('/x','RegisController@show')->name('show');

Route::post('/store','RegisController@save');

Route::get('/return','RegisController@return');




Route::post('/gg','RegisController@index');

//Route::get('/return','RegisController@logout');




















Route::get('/form/{id}','EnergyController@showenergy');
Route::post('/en','EnergyController@energystore');



Route::get('/mn','MorningController@store');
Route::get('/nn','NoonController@noon');
Route::get('/ev','EveningController@evening');
Route::get('/dn','DinnerController@dinner');

Route::post('/mn1','MorningController@sokal');
Route::post('/nn1','NoonController@dupur');
Route::post('/ev1','EveningController@sondha');
Route::post('/dn1','DinnerController@rat');

Route::get('/mm','MorningController@enr');


Route::get('/as','UregistrationController@usershow');
Route::post('/us','UregistrationController@saveuser');

Route::get('/ff','UregistrationController@returnuser');
Route::post('/to','UregistrationController@index');


Route::get('/vv', function () {
    return view('user.showtype');
});





Route::get('/ww', function () {
    return view('user.adminshow');
});







Route::get('/sm','ExerciseController@createexe');


Route::post('/xc','ExerciseController@exstore');


Route::get('/hh','ExerciseController@exr');
