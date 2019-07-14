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
    return view('shoppy.homepage.homepage');
});

Route::get('/category', function () {
    return view('simpleadmin.category.category');
});

Route::get('/article', function () {
    return view('simpleadmin.article.article');
});

Route::get('/banner', function () {
    return view('simpleadmin.banner.banner');
});

Route::get('/email', function () {
    return view('simpleadmin.email.email');
});

Route::get('/permission', function () {
    return view('simpleadmin.permission.permission');
});

Route::get('/product', function () {
    return view('simpleadmin.product.product');
});

Route::get('/user', function () {
    return view('simpleadmin.user.user');
});

/**
 * Phần shoppy
 */

Route::get('/grids', function () {
    return view('shoppy.grids.grids');
});

Route::get('/portlet', function () {
    return view('shoppy.portlet.portlet');
});

Route::get('/dashboard', function () {
    return view('shoppy.homepage.homepage');
});
Route::get('/404', function () {
    return view('shoppy.404.404');
});
Route::get('/blank', function () {
    return view('shoppy.blank.blank');
});
Route::get('/buttons', function () {
    return view('shoppy.buttons.buttons');
});
Route::get('/charts', function () {
    return view('shoppy.charts.charts');
});
Route::get('/icons', function () {
    return view('shoppy.icons.icons');
});
Route::get('/inbox', function () {
    return view('shoppy.inbox.inbox');
});
Route::get('/inbox-details', function () {
    return view('shoppy.inbox-details.inbox-details');
});
Route::get('/login', function () {
    return view('shoppy.login.login');
});
Route::get('/maps', function () {
    return view('shoppy.maps.maps');
});
Route::get('/partials', function () {
    return view('shoppy.partials.partials');
});
Route::get('/price', function () {
    return view('shoppy.price.price');
});
Route::get('/product', function () {
    return view('shoppy.product.product');
});
Route::get('/signup', function () {
    return view('shoppy.signup.signup');
});
Route::get('/typography', function () {
    return view('shoppy.typography.typo');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
