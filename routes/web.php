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

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('about',function(){
    return view('pages/about');
});

Route::get('users/{id}/{name}',function($id,$name){
    return 'this is '.$id.' user as '.$name;
});
*/

Route::get('/', 'PagesController@index');
Route::get('/minyak', 'PagesController@minyak');
Route::get('/jenis', 'PagesController@jenis');
Route::get('/minyak_add', 'PostsController@minyak_add');
Route::get('/jenis_add', 'PostsController@jenis_add');

Route::resource('posts','PostsController');