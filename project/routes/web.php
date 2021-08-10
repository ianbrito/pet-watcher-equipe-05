<?php

Route::get('/', 'PetWatcherController@home');

Route::get('especie', 'EspecieController@index');

Route::get('especie/especie_{id}', 'EspecieController@show');

Route::get('especie/create', 'EspecieController@create');

Route::post('especie/store', 'EspecieController@store');

Route::get('especie/especie_{id}/edit', 'EspecieController@edit');

Route::put('especie/especie_{id}', 'EspecieController@update');

Route::delete('especie/especie_{id}', 'EspecieController@destroy');
