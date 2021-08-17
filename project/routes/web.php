<?php

    use Illuminate\Support\Facades\Route;

    Route::get('credenciada','CredenciadaController@index')->middleware('role:3');
    Route::get('credenciada/credenciada_{id}/edit', 'CredenciadaController@edit')->middleware('role:3');
    Route::get('credenciada/create', 'CredenciadaController@create')->middleware('role:3');
    Route::post('credenciada/store', 'CredenciadaController@store')->middleware('role:3');
    Route::get('credenciada/credenciada_{id}/password', 'CredenciadaController@editPassword')->middleware('role:3');
    Route::put('credenciada/credenciada_{id}/password_', 'CredenciadaController@updatePassword')->middleware('role:3');
    Route::put('credenciada/credenciada_{id}', 'CredenciadaController@update')->middleware('role:3');
    Route::delete('credenciada/credenciada_{id}', 'CredenciadaController@destroy')->middleware('role:3');


    Route::get('/', 'UserController@index');

    Route::get('home', 'PetWatcherController@home');

    Route::get('especie', 'EspecieController@index')->middleware('role:3');

    Route::get('especie/especie_{id}', 'EspecieController@show');

    Route::get('especie/create', 'EspecieController@create');

    Route::post('especie/store', 'EspecieController@store');

    Route::get('especie/especie_{id}/edit', 'EspecieController@edit');

    Route::put('especie/especie_{id}', 'EspecieController@update');

    Route::delete('especie/especie_{id}', 'EspecieController@destroy');

    Route::get('user/edit}', 'UserController@edit');
    Route::get('login', 'UserController@index');
    Route::put('', 'UserController@update');

    Route::get('login', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login');
    Route::get('logout', 'Auth\LoginController@logout');


