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

Route::name('static::')->prefix('/')->group(function(){
    Route::name('index')->get('/', 'MainController@index');
    Route::name('product')->get('product', 'MainController@product');
    Route::name('category')->get('category', 'MainController@category');
    Route::name('cart')->get('cart', 'MainController@cart');
    Route::name('checkout')->get('checkout', 'MainController@checkout');
    Route::name('contact')->get('contact', 'MainController@contact');
    /* Страницы с заглушкой */
    Route::name('women')->get('redirect', 'MainController@women');
    Route::name('men')->get('redirect', 'MainController@men');
    Route::name('jewelry')->get('redirect', 'MainController@jewelry');
    Route::name('sneakers')->get('redirect', 'MainController@sneakers');
    Route::name('sandals')->get('redirect', 'MainController@sandals');
    Route::name('shoes')->get('redirect', 'MainController@shoes');
    Route::name('boots')->get('redirect', 'MainController@boots');
    Route::name('flops')->get('redirect', 'MainController@flops');
    Route::name('blog')->get('redirect', 'MainController@blog');
});
/*
Route::name('admin::')->prefix('admin')->group(function () {
    Route::name('index')->get('index', 'ProductController@index');
    Route::name('create')->get('create', 'ProductController@create');
    Route::name('edit')->get('edit{product}', 'ProductController@edit');
    Route::name('store')->post('store', 'ProductController@store');
    Route::name('update')->post('update{product}', 'ProductController@update');
    Route::name('destroy')->delete('destroy{product}', 'ProductController@destroy');
    });
*/
Route::prefix('admin')->middleware('auth')->group(function() {
    Route::name('home')->get('/home', 'HomeController@index');
    Route::resource('/category', 'CategoryController', ['as'=>'admin']);
    Route::resource('/product', 'ProductController', ['as'=>'admin']);
    Route::resource('/user', 'UserController', ['as' => 'admin']);
});
    
/*
Route::name('auth::')->prefix('auth')->group(function(){
    Route::name('view')->get('auth_view', ['uses' => 'upgr@authview'], function(){});
    Route::name('act_auth')->post('act_auth', ['uses' => 'upgr@act_auth'], function(){});
    Route::name('logout')->get('logout', ['uses' => 'upgr@logout'], function(){});
});
*/

