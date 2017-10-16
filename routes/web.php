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

Route::get('/', 'Homeroute@wel');

Route::get('/2080', 'Homeroute@admin');

Route::get('/create', 'Homeroute@create');

Route::get('/index', 'Homeroute@index');