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

Auth::routes();

Route::prefix('/')->group(function(){
    Route::name('index')->get('/', 'MainController@index');
    Route::name('home')->get('/home', 'HomeController@index');
    });

Route::name('admin::')->prefix('admin')->group(function () {
    Route::name('index')->get('index', 'ProductController@index');
    Route::name('create')->get('create', 'ProductController@create');
    Route::name('edit')->get('edit{product}', 'ProductController@edit');
    Route::name('store')->post('store', 'ProductController@store');
    Route::name('update')->post('update{product}', 'ProductController@update');
    Route::name('destroy')->delete('destroy{product}', 'ProductController@destroy');
    });
    
/*
Route::name('auth::')->prefix('auth')->group(function(){
    Route::name('view')->get('auth_view', ['uses' => 'upgr@authview'], function(){});
    Route::name('act_auth')->post('act_auth', ['uses' => 'upgr@act_auth'], function(){});
    Route::name('logout')->get('logout', ['uses' => 'upgr@logout'], function(){});
});
*/

