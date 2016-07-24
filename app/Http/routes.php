<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use horsefly\Part;

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::resource('task','TaskController');
Route::resource('venue','VenueController');
Route::resource('material','MaterialController');





Route::resource('material','MaterialController');
Route::resource('parts','PartController');
Route::put('parts','PartController@edit');




//hola 
//
//

//Route::get('/nombre/{nombre}', function($nombre){
	//return "mi nombre es ".$nombre;
//});



