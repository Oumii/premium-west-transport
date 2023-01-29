<?php

use Illuminate\Support\Facades\Route;

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

//Route For Home
Route::get('/', 'HomeController@index')->name('acceuil');

//Route For Services
Route::get('/services', 'ServiceController@index')->name('services');

//Route For Flottes
Route::get('/flottes', 'FlotteController@index')->name('flottes');

//Route For Contacts
Route::get('/contacts', 'ContactController@index')->name('contacts');
Route::post('/contact/store', 'ContactController@store')->name('contact.store');

//Route For Reservation
Route::get('/reservations', 'ReservationController@index')->name('reservations');
Route::post('/confirm', 'ReservationController@store')->name('reservation.store');

//Route For Legal
Route::get('/mentions-legales', 'LegalController@index')->name('mentions-legales');
