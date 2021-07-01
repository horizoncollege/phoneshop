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

Route::get('/', 'App\Http\Controllers\TelefoonController@indexTwo');

Route::get('/extrainfo/{telefoons_id}', 'App\Http\Controllers\ExtraPhoneInfoController@indexTwo')->name('extrainfo');

Route::resource('telefoons', 'App\Http\Controllers\TelefoonController');

Route::resource('phoneinfo', 'App\Http\Controllers\ExtraPhoneInfoController');
