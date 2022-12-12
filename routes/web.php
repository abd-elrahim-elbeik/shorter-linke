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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','App\Http\Controllers\LinksController@index')
        ->name('links.index');

Route::post('/','App\Http\Controllers\LinksController@store')
     ->name('links.store');


Route::get('{code}' , 'App\Http\Controllers\LinksController@getlink')->name('getlink');
