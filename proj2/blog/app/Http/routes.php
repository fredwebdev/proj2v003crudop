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

// Route::get('/', function () {return view('welcome');});


// accueil
Route::get('/', function () {return view('Accueil.index');});


// menu
Route::resource('accueil', 'AccueilController');
Route::resource('revues', 'RevueController');
Route::resource('articles', 'ArticleController');
// EvenementController
//Route::get('evenement', function(){return view('Evenements.index');});
//Route::resource('evenement', 'EvenementController');
Route::get('evenement', ['as'=>'evenement', 'uses'=>'EvenementController@evenement']);

// admin
Route::resource('evenements', 'EvenementAdminController');