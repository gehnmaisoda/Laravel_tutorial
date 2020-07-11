<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;
use App\Http\Middleware\NiceMiddleware;

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

Route::get('test/{param?}', function ($param = 'おっす') {
    return "テスト:{$param}";
});

Route::get('good', 'GoodController@index');
Route::post('good', 'GoodController@post');

Route::get('good/add', 'GoodController@add');
Route::post('good/add', 'GoodController@create');

Route::get('good/edit', 'GoodController@edit');
Route::post('good/edit', 'GoodController@update');

Route::get('person', 'PersonController@index');

Route::get('person/find', 'PersonController@find');
Route::post('person/find', 'PersonController@search');

Route::get('person/add', 'PersonController@add');
Route::post('person/add', 'PersonController@create');

Route::get('board', 'BoardController@index');

Route::get('board/add', 'BoardController@add');
Route::post('board/add', 'BoardController@create');



Route::get('hello', 'HelloController@index')
  ->middleware(NiceMiddleware::class);
Route::post('hello', 'HelloController@post');




// 以下遊び用
Route::get('foo', function() {
  return 'hello';
})->name('profile');


Route::get('bar', function() {
  return '<a href="/foo">asdf</a>';
});











