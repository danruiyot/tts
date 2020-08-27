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

Auth::routes();
// Route::view('/{path?}', 'app');
// DiscountsController  EventsController  OffersController Packages ReportsController
Route::middleware('auth')->group(function () {

Route::resource('discounts', 'DiscountsController');
Route::resource('events', 'EventsController');
Route::resource('offers', 'OffersController');
Route::resource('packages', 'PackagesController');
Route::resource('reports', 'ReportsController');
Route::resource('ads', 'AdsController');
Route::resource('dashboard', 'DashboardController');
Route::resource('media', 'FilesController');
Route::resource('posts', 'PostsController');
Route::resource('products', 'ProductsController');
Route::resource('services', 'ServicesController');

});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
// Route::resource('ChurchController');
