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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/property', 'PagesController@property');
Route::get('/aboutus', 'PagesController@aboutus');
Route::get('/Our-Partner', 'PagesController@Ourpartner');
Route::get('/all-type', 'PagesController@alltype');
Route::get('/For-Sale', 'PagesController@ForSale');
Route::get('/For-Rent', 'PagesController@ForRent');
Route::get('/News', 'PagesController@News');
Route::get('/news1', 'PagesController@news1');
Route::get('/news2', 'PagesController@news2');
Route::get('/news3', 'PagesController@news3');
Route::get('/news4', 'PagesController@news4');
Route::get('/news5', 'PagesController@news5');
Route::get('/news6', 'PagesController@news6');
Route::get('/contact', 'PagesController@contact');
Route::get('/Agent', 'PagesController@Agent');
Route::get('/Admin', 'PagesController@Admin');
Route::get('/NewsContent', 'PagesController@NewsContent');

Route::get('/property/show', 'PagesController@show');


Auth::routes();
Route::get('/dashboard', 'DashboardController@index');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('posts','PostsController');



