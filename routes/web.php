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



//home page
Route::get('/', 'moviesController@index');


Route::get('/dodajFilm', 'moviesController@add');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/filmovi', 'moviesController@showMovies');

Route::get('/izbrisiFilm/{movie_id}', 'moviesController@deleteMovie');

Route::get('/dodajGledanje/{movie_id}', 'moviesController@addToSchedule');




//POST routes

//executing the form for adding schedule
Route::post('/dodajGledanjeExe', 'watchingController@addWatching');

//execute the form for adding movies
Route::post('/dodajFilmExe', 'moviesController@addMovieExe');
