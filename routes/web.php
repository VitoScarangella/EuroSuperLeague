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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ranking', 'HomeController@ranking')->name('ranking');
Route::get('/calendar', 'HomeController@calendar')->name('calendar');
Route::get('/statistics', 'HomeController@statistics')->name('statistics');
Route::get('/fixtures', 'HomeController@fixtures')->name('fixtures');
Route::get('/next_match', 'HomeController@next_match')->name('next_match');

Route::get('/matches/create', 'MatchController@create')->name('matches.create');
Route::post('/matches/store', 'MatchController@store')->name('matches.store');
Route::get('/matches/{match}/edit', 'MatchController@edit')->name('matches.edit');
Route::put('/matches/{match}/update', 'MatchController@update')->name('matches.update');
Route::get('/matches', 'MatchController@index')->name('matches.index');


Route::get('/team/{team}/show', 'TeamController@show')->name('teams.show');

Route::get('/retrieve-matches', 'MatchController@retrieveMatches')->name('matches.retrieve_matches');





