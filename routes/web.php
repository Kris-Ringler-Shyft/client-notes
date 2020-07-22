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
/* just need the route and what controller function you want to run when you arrive at that route */

Route::get('/', 'HomeController@index');


Route::post('/create', 'NoteController@create');

Route::get('/note/{id}', 'NoteController@view')
