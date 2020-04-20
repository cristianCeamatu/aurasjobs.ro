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

// WELCOME PAGE get ROUTES
Route::get('/', 'WelcomeController@index')->name('home');

// WELCOME PAGE post ROUTES
Route::post('/contact', 'WelcomeController@contactRequest')->name('contact');
Route::post('/apply', array('uses' => 'WelcomeController@store'))->name('apply');

// CANDIDATES PAGE get ROUTES
Route::get('/candidates', 'CandidatesController@index')->name('candidates');
Route::get('/candidates/status/{status}', 'CandidatesController@indexByStatus');

// CANDIDATES PAGE post ROUTES
Route::post('/candidates/action', 'CandidatesController@candidatesAction')->name('candidatesAction');

// AUTH ROUTES
Auth::routes();
