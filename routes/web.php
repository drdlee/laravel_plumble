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

Route::get('/', 'FrontEndController@index')->name('index');

Auth::routes();

Route::get('/test', function(){
  return Auth::user();
});

Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){
  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/post/create', 'PostsController@create')->name('post.create');
  Route::post('/post', 'PostsController@store')->name('post.store');
  Route::get('/post', 'PostsController@index')->name('post.index');
  Route::get('/post/edit/{id}', 'PostsController@edit')->name('post.edit');
  Route::post('/post/edit/{id}', 'PostsController@update')->name('post.update');
  Route::get('/post/delete/{id}', 'PostsController@destroy')->name('post.delete');
  Route::get('/post/trashed', 'PostsController@trashed')->name('post.trashed');
  Route::get('/post/kill/{id}', 'PostsController@kill')->name('post.kill');
  Route::get('/post/restore/{id}', 'PostsController@restore')->name('post.restore');

  Route::get('/category/create', 'CategoriesController@create')->name('category.create');
  Route::post('/category', 'CategoriesController@store')->name('category.store');
  Route::get('/category', 'CategoriesController@index')->name('category.index');
  Route::get('/category/edit/{id}', 'CategoriesController@edit')->name('category.edit');
  Route::post('/category/edit/{id}', 'CategoriesController@update')->name('category.update');
  Route::get('/category/delete/{id}', 'CategoriesController@destroy')->name('category.delete');

  Route::get('/tag', 'TagsController@index')->name('tag.index');
  Route::get('/tag/create', 'TagsController@create')->name('tag.create');
  Route::post('/tag', 'TagsController@store')->name('tag.store');
  Route::get('/tag/edit/{id}', 'TagsController@edit')->name('tag.edit');
  Route::post('/tag/edit/{id}', 'TagsController@update')->name('tag.update');
  Route::get('/tag/delete/{id}', 'TagsController@destroy')->name('tag.delete');

  Route::get('/user', 'UsersController@index')->name('user.index');
  Route::get('/user/create', 'UsersController@create')->name('user.create');
  Route::post('/user', 'UsersController@store')->name('user.store');
  Route::get('/user/admin/{id}', 'UsersController@makeAdmin')->name('user.admin');
  Route::get('/user/not-admin/{id}', 'UsersController@notAdmin')->name('user.not.admin');

  Route::get('/user/profile', 'ProfilesController@index')->name('user.profile');
  Route::post('/user/profile', 'ProfilesController@update')->name('user.profile.update');
  Route::get('/user/delete/{id}', 'UsersController@destroy')->name('user.delete');

  Route::get('/settings', 'SettingsController@edit')->name('settings');
  Route::post('/settings', 'SettingsController@update')->name('settings.update');

});
