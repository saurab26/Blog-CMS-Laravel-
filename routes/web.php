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

Route::get('/', [
    'uses'=> 'Blogcontroller@index',
    'as'=>'blog'
]);
    

Route::get('/blog/{post}',[
    'uses'=>'BlogController@show',
    'as'=>'blog.show'
    
]);
Route::get('/category/{category}',[
    'uses'=>'BlogController@category',
    'as'=>'category'
    
]);
Route::get('/author/{author}',[
    'uses'=>'BlogController@author',
    'as'=>'author'
    
]);

Auth::routes();

Route::get('/home', 'Backend\HomeController@index')->name('home');

Route::put('/backend/blog/restore/{blog}',[
    'uses'=>'Backend\BlogController@restore',
    'as'=>'backend.blog.restore'
]);

Route::resource('/backend/blog','Backend\BlogController');