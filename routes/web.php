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

//route till orginal laravel hemsidan för att det ska vara enklare att hitta
Route::get('/', 'PagesController@welcome');

// route till hemskärmen
Route::get('/home', 'PagesController@home');

//route till login sidan
Route::get('/login', 'PagesController@login');

//route till designer sidan (där man kan hitta designers)
Route::get('/designers', 'PagesController@designers');