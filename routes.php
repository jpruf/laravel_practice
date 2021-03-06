<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::group(['prefix' => 'dir1'], function(){
    Route::get('/{fruit}/{name?}', [
        'uses' => 'FruitController@getFruit',
        'as' => 'fruitgetpg']
    );
    
    Route::post('/', [
        'uses' => 'FruitController@postFruit',
        'as' => 'fruitpostpg']
    );
});
