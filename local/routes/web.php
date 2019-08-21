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
    return view('welcome');
});

// Parameter Address link
Route::get('sayhello', function () {
    echo 'Hello Laravel. I am a newbie Laravel';
});

Route::get('sayhello/{name}', function ($name) {
    echo 'Hello Laravel. I am '.$name;
});

Route::get('sum2num/{num1}/{num2}', function ($num1, $num2) {
    $tong = $num1 + $num2;
    echo 'Sum of ' . $num1 . ' + ' . $num2 . ' = ' . $tong;
});

// Group
Route::group(['prefix' => 'admin'], function () {
    Route::get('home', function () {
        echo 'This is Home page';
    });

    Route::group(['prefix' => 'product'], function () {
        Route::get('Create', function () {
            return 'Create new product';
        });
        Route::get('Update', function () {
            return 'Update product';
        });
        Route::get('Delete', function () {
            return 'Delete product';
        });
    });
});

// Controller
Route::get('controller', 'MyFirstController@getController');

Route::get('controller/{num1}/{num2}', 'MyFirstController@getController');