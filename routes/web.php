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
    return view('master');
});

Route::prefix('customer')->group(function () {
    Route::get('/', 'CustomerController@index')->name('list.customer');

    Route::get('index', 'CustomerController@index');

    Route::get('create', 'CustomerController@create')->name('create.customer');

    Route::post('store', 'CustomerController@store')->name('store.customer');

    Route::get('{id}/show', 'CustomerController@edit')->name('edit.customer');

    Route::put('{id}/update', 'CustomerController@update')->name('update.customer');

    Route::get('{id}', 'CustomerController@destroy')->name('delete.customer');
});
