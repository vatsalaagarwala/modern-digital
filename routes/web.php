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
Route::post("/signup", "PagesController@postSignup");

Route::get('/signin', 'PagesController@signin');
Route::post('/signin', 'PagesController@postSignin');

// Route::get('/services', 'PagesController@services');



// Route::get('/user/{id}', function ($id) {
    // return 'This is user'.$id;
// });

