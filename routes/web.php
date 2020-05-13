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

Route::prefix('/')->group(function(){
    Route::name('index')->get('/', ['uses' => 'MainController@index'], function(){});
    });
/*
Route::name('auth::')->prefix('auth')->group(function(){
    Route::name('view')->get('auth_view', ['uses' => 'upgr@authview'], function(){});
    Route::name('act_auth')->post('act_auth', ['uses' => 'upgr@act_auth'], function(){});
    Route::name('logout')->get('logout', ['uses' => 'upgr@logout'], function(){});
});
*/