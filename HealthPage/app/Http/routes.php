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
use Illuminate\Http\Request;
	Route::get("/", function (){
		return redirect('/home');
	});
	Route::group(['prefix'=>'home'], function() {
		Route::get("/","CoreController@index");
	});
	Route::auth();
	Route::get("/home/newPatient/{id}", "NewPatientController@index");
	Route::post("/home/newPatient","NewPatientController@store");
	Route::get("/home/PatientView/{id}", "PatientController@index");

