<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    //return $router->app->version();
    return view('home');
});

$router->get('/worshipinfo', function() use ($router) {
	return view('pages.worshipinfo');
});

$router->get('/worshipverses', function() use ($router){
	return view('pages.worshipverses');
});
//routes for Admin Dashboard Links
//Routes for WorshipInfo
Route::get('/worshipinfo', 'WorshipinfoController@index');
Route::get('/addwinfo', 'WorshipinfoController@create');
Route::post('/addwinfo', 'WorshipinfoController@store');

//Routes for WorshipVerses
Route::get('/worshipverses', 'WorshipversesController@index');
Route::get('/addwverse', 'WorshipversesController@create');
Route::get('/addwverse', 'WorshipversesController@WorshipTime');
Route::post('/addwverse', 'WorshipversesController@store');

//Routes for API Calls only.
//Get WORSHIP DATA based on Worship Time
Route::get('/worshipverse/{winfotime}', 'WorshipversesController@show'); 




