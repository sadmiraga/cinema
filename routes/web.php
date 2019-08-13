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


Route::get('/dodajFilm', 'moviesController@add');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/dodajFilmExe', 'moviesController@addMovieExe');

Route::get('/filmovi', 'moviesController@showMovies');

Route::get('/izbrisiFilm/{movie_id}', 'moviesController@deleteMovie');

Route::get('/dodajGledanje/{movie_id}', 'moviesController@addToSchedule');
