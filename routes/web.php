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
▲ Abdiel Carrasco ▲
Created on 06-07-2019
Routes
*/

use GuzzleHttp\Client;

//Route @ metho to go root
Route::get('/','PostController@index');

Route::get('posts/{id}','PostController@show');


Route::get('{id}','PostController@comments');
//Comments Controller

/* 
route('products.index', ['manufacturer' => 'Samsung']);
 */
/* // Returns 'http://localhost/products?manufacturer=Samsung'
route('products.show', [$product->id, 'model' => 'T9X']);

comments?postId=1

// Returns 'http://localhost/products/1?model=T9X'
 */
/* 
Route::get('/', function () {

}); */

