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
		'uses' => 'PostsController@index'
	]
);

Route::get('/posts',[
		'uses' => 'PostsController@index'
	]
);

Route::get('/users',[
		'uses' => 'UsersController@index'
	]
);

Route::get('/posts/create/view',[
		'uses' => 'PostsController@renderCreateView'
	]
);

Route::get('/users/create/view',[
		'uses' => 'UsersController@renderCreateView'
	]
);

Route::get('/users/login/view',[
		'uses' => 'UsersController@renderLoginView'
	]
);

Route::get('/users/logout/view',[
		'uses' => 'UsersController@renderLoginView'
	]
);

Route::get('/posts/create',[
		'uses' => 'PostsController@create'
	]
);

Route::post('/users/create',[
		'uses' => 'UsersController@create'
	]
);

Route::get('/comments/create',[
		'uses' => 'CommentsController@create'
	]
);

Route::get('/posts/delete',[
		'uses' => 'PostsController@delete'
	]
);

Route::get('/users/delete',[
		'uses' => 'UsersController@delete'
	]
);

Route::get('/comments/delete',[
		'uses' => 'CommentsController@delete'
	]
);
