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

Route::get('/', 'PagesController@index');


Route::get('/signup', 'PagesController@signup');

Route::get('/services', 'PagesController@services');



// Route::get('/user/{id}', function ($id) {
    // return 'This is user'.$id;
// });

