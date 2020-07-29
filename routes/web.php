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

Route::get('/', ['as' => 'getHome', 'uses' => 'PagesController@getHome']);

Route::get('/about', ['as' => 'getAbout', 'uses' => 'PagesController@getAbout']);

Route::get('/contact', ['as' => 'getContact', 'uses' => 'PagesController@getContact']);


Route::post('/contact/submit', ['as' => 'submit', 'uses'=>'MessagesController@submit']);

Route::get('/messages', ['as' => 'getMessages', 'uses'=>'MessagesController@getMessages']);


