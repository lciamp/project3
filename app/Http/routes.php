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
/*
Route::get('/', function () {

    $commands = ['add', 'commit', 'diff', 'push'];

    return view('welcome', compact('commands'));
});
*/

Route::get('/', 'PagesController@home');

//Route::get('/about', 'PagesController@about');

//Route::get('/icon', 'PagesController@icon');

//Route::get('/controller', 'PagesController@controller');

// INDEX OF ALL CARDS
Route::get('cards', 'CardsController@index');

// ROUTE FOR FORM TO CREATE NEW CARD
Route::get('cards/create', 'CardsController@create');

// ROUTE TO STORE THE CARD IN THE DATABASE
Route::post('/cards', 'CardsController@store');

