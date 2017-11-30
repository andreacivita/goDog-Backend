<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

// Login
Route::post('login', 'Auth\LoginController@login');
// Logout
Route::post('logout', 'Auth\LoginController@logout');


// API protette
//Route::group(['middleware' => 'auth:api'], function () {
//
//
//// Standard API per users
//Route::get('getutenti', 'UserController@getall');
//Route::get('getutente/{id}', 'UserController@getById');
//Route::get('utente/{id}/getindirizzo', 'UserController@getindirizzo');
//Route::post('inserisci-utente', 'UserController@create');
//Route::post('modifica-utente', 'UserController@update');
//Route::post('elimina-utente', 'UserController@delete');
//
//// Standard API per indirizzo
//Route::get('getindirizzi', 'IndirizzoController@getall');
//Route::get('getindirizzo/{id}', 'IndirizzoController@getById');
////Route::get('indirizzo/{id}/getrelated/{type}', 'IndirizzoController@getrelated');
//Route::post('inserisci-indirizzo', 'IndirizzoController@create');
//Route::post('modifica-indirizzo', 'IndirizzoController@update');
//Route::post('elimina-indirizzo', 'IndirizzoController@delete');
//});


// Standard API per users
Route::get('getutenti', 'UserController@getall');
Route::get('getutente/{id}', 'UserController@getById');
Route::get('utente/{id}/getindirizzo', 'UserController@getindirizzo');
Route::post('inserisci-utente', 'UserController@create');
Route::post('modifica-utente', 'UserController@update');
Route::post('elimina-utente', 'UserController@delete');

// Standard API per indirizzo
Route::get('getindirizzi', 'IndirizzoController@getall');
Route::get('getindirizzo/{id}', 'IndirizzoController@getById');
//Route::get('indirizzo/{id}/getrelated/{type}', 'IndirizzoController@getrelated');
Route::post('inserisci-indirizzo', 'IndirizzoController@create');
Route::post('modifica-indirizzo', 'IndirizzoController@update');
Route::post('elimina-indirizzo', 'IndirizzoController@delete');



// Standard API per recensione
Route::get('/recensioni','RecensioneController@allRec');

Route::get('/recensione/{id}','RecensioneController@getById');

Route::post('/inserisci-recensione','RecensioneController@newRec');

Route::post('/modifica-recensione','RecensioneController@modificaRecensione');

Route::post('/elimina-recensione','RecensioneController@eliminaRecensione');

Route::get('/allrecensioni/{id}','RecensioneController@getByIdRecensable');


// Standard API per inserzione
Route::get('/inserzioni', 'InserzioneController@inserzioni');

Route::get('/inserzione/{id}', 'InserzioneController@inserzione');

Route::post('/inserisci-inserzione', 'InserzioneController@inseriscinserzione');

Route::post('/modifica-inserzione', 'InserzioneController@modificainserzione');

Route::post('/elimina-inserzione', 'InserzioneController@eliminainserzione');
