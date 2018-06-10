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

Route::group(['middleware' => ['web']], function() {
  Auth::routes();

  // Registration Routes...
  Route::get('registreer', 'Auth\RegisterController@showRegistrationForm')->name('register');
  Route::post('registreer', 'Auth\RegisterController@register');


  Route::get('/', 'HomeController@index')->name('home');
  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/wat-is-seksuele-intimidatie', 'WatIsSeksueleIntimidatieController@index')->name('WatIsSeksueleIntimidatie');
  Route::get('verhalen', 'VerhaalsController@index')->name('Verhalen');
  Route::get('/media', 'MediaController@index')->name('Media');
  Route::get('/wat-kan-u-zelf-doen', 'WatKanUZelfDoenController@index')->name('WatKanUZelfDoen');
  Route::get('/profiel', 'ProfielController@index')->name('Profiel');

  Route::get('/verhalen/toevoegen', 'VerhaalsController@addVerhaal')->middleware('auth')->name('addVerhaal');
  Route::post('/verhalen/invoegen', 'VerhaalsController@insertVerhaal')->middleware('auth')->name('insertVerhaal');
  Route::get('verhalen/wijzigen/{id}', 'VerhaalsController@editVerhaal')->middleware('auth');
  Route::post('verhalen/wijzigen/{id}', 'VerhaalsController@updateVerhaal')->middleware('auth');
  Route::post('verhalen/goedkeuren/{id}', 'VerhaalsController@goedkeuren');
  Route::post('verhalen/verwijderen/bevestigen/{id}', 'VerhaalsController@delete');
  Route::get('verhalen/verwijderen/{id}', 'VerhaalsController@showConfirm');
  Route::post('verhalen', 'VerhaalsController@index');

  Route::get('/media/toevoegen', 'MediaController@addMedia')->middleware('auth')->name('addMedia');
  Route::post('/media/invoegen', 'MediaController@insertMedia')->middleware('auth')->name('insertMedia');
  Route::get('media/wijzigen/{id}', 'MediaController@editMedia')->middleware('auth');
  Route::post('media/wijzigen/{id}', 'MediaController@updateMedia')->middleware('auth');
  Route::post('media/goedkeuren/{id}', 'MediaController@goedkeuren');
  Route::post('media/verwijderen/bevestigen/{id}', 'MediaController@delete');
  Route::get('media/verwijderen/{id}', 'MediaController@showConfirm');
  Route::post('media', 'MediaController@index');

  Route::get('/profiel/wijzigen/{id}', 'ProfielController@editProfiel')->middleware('auth');
  Route::post('/profiel/wijzigen/{id}', 'ProfielController@updateProfiel')->middleware('auth');

  Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

  Route::get('/game', 'GameController@index')->name('Game');
});
