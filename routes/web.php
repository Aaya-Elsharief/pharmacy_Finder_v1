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
Route::get('/', 'HomeController@index');
Route::get('/home', function () {

    return redirect('/');

});


Route::get('/about', 'AboutController@aboutPage');


Route::get('/test1', function () {
    return "Welcome World ♥";
});
 //route parametars

Route::get('/test2/{id}', function ($id) {
    return ( $id);
});

Route::get('/test2/{id}', function ($id) {
    return ( $id);
}) -> name('a');



