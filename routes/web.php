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
    return redirect(route('businesses.index'));
});

Route::prefix('businesses')->group(function () {

    // list businesses
    Route::get('/', 'BusinessController@index')->name('businesses.index');

    // create business
    Route::get('/create', 'BusinessController@create')->name('businesses.create');

    // store business
    Route::post('/', 'BusinessController@store')->name('businesses.store');

    // show business
    Route::get('/{business}', 'BusinessController@show')->name('businesses.show');
});
