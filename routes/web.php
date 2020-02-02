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
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/contact', 'PagesController@contact');
Route::get('/blog', 'PagesController@blog');

Route::post('/contact/submit', 'MessagesController@store');

Route::get('/admin', 'AdminsController@index');
Route::get('/blank', 'AdminsController@blank');
Route::get('/mail_compose', 'AdminsController@mail_compose');
Route::get('/post', 'AdminsController@post_table');
Route::get('/login', 'AdminsController@login');
Route::get('/update', 'AdminsController@update');
Route::get('/view', 'AdminsController@view');
Route::get('/profile', 'AdminsController@profile');
Route::get('/add_user', 'AdminsController@add_user');
Route::get('/posts', 'Posts@index');
//Route::get('/mail', 'MessagesController@destroy');
Route::resource('/mail', 'MessagesController'); //Routes for ALl my contact
Route::resource('/view', 'PostsController'); //Routes for ALl my Blog Pages
//Route::get('/posts', 'PostsController@index'); //Routes for ALl my Blog Pages



