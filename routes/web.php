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
    return 'hello world';
});

Route::get('/articles/{article}/{id}', function ($article, $id) {
    return $article. '-' .$id;
});

Route::prefix('admin')->group(function(){

    Route::get('/', function () {
        return 'Admin panel ';
    });

    Route::get('/articles', function () {
        return 'Admin articles';
    });

    Route::get('/users', function () {
        return 'hello ';
    });

    Route::get('/categories', function () {
        return 'hello ';
    });
});

