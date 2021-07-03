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


use App\Http\Controllers\SearchController;





Route::get('/', 'HomeController@index');

Route::get('/home', function () {

    return redirect('/');

});

Route::get('/index', function () {

    return redirect('/');

});

Route::get('/readmore', 'HomeController@readMore');



Route::get('/about', 'AboutController@aboutPage');
Route::get('/contact', 'AboutController@contactPage');
Route::get('/map', 'MapController@mapPage');
Route::get('/pharmacy', 'PharmacyController@pharmacyPage');
Route::get('/pharmacy/{id}', 'PharmacyController@view');



Route::get('/results', 'SearchController@resultsPage');


Route::get('/search', [SearchController::class, 'search'])-> name ('web.search');



