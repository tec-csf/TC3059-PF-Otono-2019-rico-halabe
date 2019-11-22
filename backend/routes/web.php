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
Route::get('/cotizacion/{id}/{i}', 'Quote@index')->name('home');
Route::get('/clientes', 'Clients@index')->name('clients');
Route::get('/newsletter', 'Clients@newsletter')->name('newsletter');
// Route::get('/contacto', 'Contact@index')->name('contact');
// Route::get('/admin', 'Admin@index')->name('admin');
Route::get('/perfil', 'Profile@index')->name('profile');
Route::put('/update', 'Profile@update')->name('profile_update');
