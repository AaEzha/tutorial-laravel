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

Route::get('/home', 'HomeController@index')->name('home');

// Route untuk CRUD Sederhana
// Read
Route::get('/crud', 'CrudController@index')->name('read');
// Create
Route::get('/crud/create', 'CrudController@create')->name('create');
Route::post('/crud/create', 'CrudController@store')->name('store');
// Update
Route::get('/crud/{id}/edit', 'CrudController@edit')->name('edit');
Route::patch('/crud/{id}/edit', 'CrudController@update')->name('update');
// Delete
Route::get('crud/{id}/delete', 'CrudController@destroy')->name('destroy');
