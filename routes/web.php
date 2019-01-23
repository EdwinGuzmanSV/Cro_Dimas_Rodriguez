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

Route::get('/', function () {
    return redirect()->route('listaAnecdotas');
});

Auth::routes();

Route::get('/listaAnecdotas', 'Web\PageController@listaAnecdotas')->name('listaAnecdotas');

Route::get('/anecdota/{slug}', 'Web\PageController@anecdota')->name('anecdota');
//Route::get('/category/{slug}', 'Web\PageController@category')->name('category');
Route::get('/tag/{slug}', 'Web\PageController@tag')->name('tag');
Route::get('/faq/{slug}', 'Web\PageController@faq')->name('faq');
 

Route::resource('tags', 		'Admin\TagController');
//Route::resource('categories', 	'Admin\CategoryController');
//Route::resource('posts', 		'Admin\PostController');
Route::resource('faqs', 		'Admin\FaqController');
Route::resource('anecdotas', 		'Admin\AnecdotaController');

