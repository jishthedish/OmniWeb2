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

/* From the lessons
Route::get('/', 'OmniController@index');
Route::get('about', 'OmniController@about');

Route::get('lessons/{id}','OmniController@show');
*/ 


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	'home' => 'Auth\AuthController',
]);
 
// Add campaign
Route::get('/campaigns', 'OmniController@campaigns');
Route::post('/campaigns/add',['as' => 'addentry', 'uses' => 'OmniController@addcampaigns']);
//Get Campaign
Route::get('/campaigns/get/{filename}', ['as' => 'getentry', 'uses' => 'OmniController@getcampaigns']);
Route::get('/getcampaigns', 'OmniController@getAll');

//Remove All data
Route::get('/truncate','OmniController@delete');

//Contact Information
Route::get('/contacts', 'OmniController@contacts');
Route::post('/contacts/add', ['as' => 'addcontacts', 'uses' => 'OmniController@postUpload']);
Route::get('/getcontacts', 'OmniController@getcontacts');