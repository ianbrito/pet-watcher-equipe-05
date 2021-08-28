<?php

use Illuminate\Support\Facades\Route;

Route::get('credenciada', 'CredenciadaController@index')->middleware('role:3');
Route::get('credenciada/credenciada_{id}/edit', 'CredenciadaController@edit')->middleware('role:3');
Route::get('credenciada/create', 'CredenciadaController@create')->middleware('role:3');
Route::post('credenciada/store', 'CredenciadaController@store')->middleware('role:3');
Route::get('credenciada/credenciada_{id}/password', 'CredenciadaController@editPassword')->middleware('role:3');
Route::put('credenciada/credenciada_{id}/password_', 'CredenciadaController@updatePassword')->middleware('role:3');
Route::put('credenciada/credenciada_{id}', 'CredenciadaController@update')->middleware('role:3');
Route::delete('credenciada/credenciada_{id}', 'CredenciadaController@destroy')->middleware('role:3');
Route::get('credenciada/credenciada_{id}', 'CredenciadaController@show')->middleware('role:3');

Route::get('user/edit}', 'UserController@edit');
//Route::get('login', 'UserController@index');
Route::put('', 'UserController@update');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');

Route::get('licenca', 'LicencaController@index')->middleware('role:3')->name('licenca.index');
Route::get('licenca/create', 'LicencaController@create')->middleware('role:3');
Route::delete('licenca/licenca_{id}', 'LicencaController@destroy')->middleware('role:3');
Route::get('licenca/revogar', 'LicencaController@edit')->middleware('role:3');
Route::put('licenca/revogar', 'LicencaController@find')->middleware('role:3');
Route::post('licenca/create', 'LicencaController@store')->middleware('role:3');
//Route::post('licenca/create', 'LicencaController@findCredenciada')->middleware('role:3');


Route::get('/', 'UserController@index');

Route::get('dashboard', 'PetWatcherController@dashboard')->name('home');

// Espécie
Route::get('especie', 'EspecieController@index')->middleware('role:3');
Route::get('especie/especie_{id}', 'EspecieController@show');
Route::get('especie/create', 'EspecieController@create');
Route::post('especie/store', 'EspecieController@store');
Route::get('especie/especie_{id}/edit', 'EspecieController@edit');
Route::put('especie/especie_{id}', 'EspecieController@update');
Route::delete('especie/especie_{id}', 'EspecieController@destroy');

// Funcionarios
Route::get('funcionario', 'FuncionarioController@index')->middleware('role:2');
Route::get('funcionario/create', 'FuncionarioController@create')->middleware('role:2');
Route::post('funcionario/store', 'FuncionarioController@store')->middleware('role:2');
Route::delete('funcionario/funcionario_{id}', 'FuncionarioController@destroy')->middleware('role:2');
Route::get('funcionario/{id}', 'FuncionarioController@show')->middleware('role:2');
Route::get('funcionario/{id}/edit', 'FuncionarioController@edit')->middleware('role:2');
Route::put('funcionario/{id}/update', 'FuncionarioController@update')->middleware('role:2');


// Proprietario
Route::get('proprietario', 'ProprietarioController@index');
Route::get('proprietario/create', 'ProprietarioController@create');
Route::post('proprietario/store', 'ProprietarioController@store');
Route::get('/proprietario/{id}/info', 'ProprietarioController@show');
Route::get('proprietario/edit/{id}', 'ProprietarioController@edit');
Route::put('proprietario/{id}', 'ProprietarioController@update');
Route::delete('proprietario/{id}', 'ProprietarioController@destroy');


// Animal
Route::put('animal/search', 'AnimalController@findAnimal');
Route::get('animal', 'AnimalController@index');
Route::get('animal/create', 'AnimalController@create');
Route::post('animal/store', 'AnimalController@store');
Route::get('/animal/{id}/info', 'AnimalController@show');
Route::get('animal/{id}/edit', 'AnimalController@edit');
Route::put('animal/{id}', 'AnimalController@update');
Route::delete('animal/{id}', 'AnimalController@destroy');
Route::get('animal/buscar', 'AnimalController@buscar');
