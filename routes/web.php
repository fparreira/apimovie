<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix'=>'api'], function (){

    Route::get('/',function (){
        return response()->json(['message'=>'System API', 'status'=>'Connected'], 200);
    });

    Route::resource('/movies', 'MovieApiController');


});