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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// Auth::routes(['register' => false]);

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
// Route::get('/dashboard2', 'HomeController@index2')->name('dashboard2');

Route::resource('user', 'UserController');
Route::resource('doctor', 'DoctorController');
Route::resource('chamber', 'ChamberController');


Route::get('/registerdoctor', 'UserController@registerdoctor')->name('registerdoctor');
Route::get('/registeretailer', 'UserController@registeretailer')->name('registeretailer');
Route::get('/registerlaboratory', 'UserController@registerlaboratory')->name('registerlaboratory');
Route::get('/registercustomer', 'UserController@registercustomer')->name('registercustomer');

// Api Routers
Route::get('/api/users', 'UserController@index')->name('user');
