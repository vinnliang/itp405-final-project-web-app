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
use Illuminate\Support\Facades\Input;

Route::get('/', function () {
    return redirect('/welcome');
});

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/login/google', 'LoginController@redirectToGoogle');
Route::get('/login/google/callback', 'LoginController@handleGoogleCallback');
Route::get('/logout', 'LoginController@logout');
Route::get('/welcome', 'WelcomeController@index');
Route::get('/welcome', 'WelcomeController@user');
Route::get('/search_players', 'SearchPlayersController@index');
Route::get('/search_results', 'SearchPlayersController@search');
Route::get('/player-details/{id}', 'PlayerDetailsController@index');
Route::post('/player-details/{id}', 'PlayerDetailsController@savePlayer');
Route::get('/signup', 'SignupController@index');
Route::post('/signup', 'SignupController@signup');




Route::middleware(['protected'])->group(function()
{
  Route::get('/profile', 'AdminController@index');
  Route::get('/profile/fantasyteam', 'FantasyController@index');
  Route::get('/profile/fantasyteam/{id}/delete', 'FantasyController@delete');
  Route::get('/profile/fantasyteam/fantasyfinal', 'FantasyController@final');
});
