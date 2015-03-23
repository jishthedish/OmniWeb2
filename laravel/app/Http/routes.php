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

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('downloads', 'pagesController@downloads');
Route::get('promotions', 'PagesController@promotions');
Route::get('aboutus', 'PagesController@aboutus');
Route::get('contactus', 'PagesController@contactus');
Route::get('services', 'PagesController@services');
Route::get('registration', 'PagesController@registration');

Route::get('campaigns', 'OmniController@campaigns');
Route::post('campaigns/add',['as' => 'addentry', 'uses' => 'OmniController@add']);
//Get Campaign
Route::get('/campaigns/get/{filename}', ['as' => 'getentry', 'uses' => 'OmniController@get']);
Route::get('getcampaigns', 'OmniController@getAll');

//Remove Campaign
Route::get('/campaigns/truncate','OmniController@delete');

//Remove All data
Route::get('/truncate','OmniController@delete');

//Contact Information
Route::get('/contacts', 'OmniController@contacts');
Route::post('/contacts/add', ['as' => 'addcontacts', 'uses' => 'OmniController@postUpload']);
Route::get('/getcontacts', 'OmniController@getcontacts');

