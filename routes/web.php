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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/example', function () {
    return view('example');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/show', 'HomeController@show')->name('home.show');

Route::resource('photos', 'PhotoController');

Route::get('/create', 'BlogController@create')->name('blogs.create');
Route::post('/create', 'BlogController@store')->name('blogs.store');


Route::get('user/{id}', 'UserDetailController@show')->name('user.details.show');

Route::get('/blogs/{id}', 'BlogController@show')->name('blogs.show');
Route::post('/comments', 'CommentController@store')->name('comments.store');

Route::get('/postcreate', 'PostController@create')->name('posts.create');
Route::post('/posts', 'PostController@store')->name('posts.store');

Route::get('/jsonsample', 'JsonSampleController@index')->name('jsonsample');

Route::get('/comments', 'CommentController@index')->name('comments.index');


Route::get('/collect', function () {
    $collection = collect(['taylor', 'abigail', null])->map(function ($name) {
        return strtoupper($name);
    })->reject(function ($name) {
        return empty($name);
    });

    dd($collection);
});

Route::get('/enter', function () {
    dd('testing');
})->middleware('checkage');


Route::get('/pagination', 'PaginationController@index')->name('pagination');
