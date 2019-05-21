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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//

Route::group(['namespace' => 'Admin', 'prefix' => 'panel-admin', 'middleware' => ['admin']], function ($router) {
    $router->get('/home', 'AdminController@index')->name('home');
    $router->get('/panel', 'AdminController@index');
    $router->get('/panel/index', 'AdminController@index')->name('panel.index');
    /*******USER-Admin********/
    $router->get('/create-user', 'userAdminController@index')->name('create.user');
    $router->get('/show-user', 'userAdminController@show')->name('show.user');
    $router->get('/search', 'userAdminController@search')->name('search');
    $router->resource('/user-Admin', 'userAdminController');
    /*******PRODUCTS********/
    $router->resource('/product', 'ProductController');
    $router->get('/search', 'ProductController@search')->name('product.search');
    /*******COMMENTS********/
    $router->get('/comments', 'ProductController@com')->name('com');
});

Route::group(['namespace' => 'user'], function ($router) {
    $router->get('/', 'FrontEndIndexController@index');
    /*******SinglePage********/
    $router->get('/single-page/{id}', 'FrontEndIndexController@singlePage')->name('user.singlePage');
    $router->post('/single-page/comment', 'FrontEndIndexController@comment')->name('comment.single.page');
    /*******Login & Registration********/
    $router->get('/login-registration', 'FrontEndIndexController@loginRegister')->name('user.login.registration');
    $router->post('/register', 'FrontEndIndexController@register')->name('user.register');
    $router->post('/loginUser', 'FrontEndIndexController@login')->name('user.login');

    $router->resource('/user','FrontEndIndexController');
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
//Route::group(['prefix' => 'panel'],fu);
