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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/wat-is-seksuele-intimidatie', 'WatIsSeksueleIntimidatieController@index')->name('WatIsSeksueleIntimidatie');
Route::get('/verhalen', 'VerhaalsController@index')->name('Verhalen');
Route::get('/wat-kan-u-zelf-doen', 'WatKanUZelfDoenController@index')->name('WatKanUZelfDoen');

Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
