<?php

Route::get('users', ['as' => 'users.index', 'uses' => 'UserController@index']);
Route::get('api/usuarios/listar', ['as' => 'users.listar', 'uses' => 'UserController@listar']);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function () {
    Route::get('/', 'Dashboard\DashboardController@index')->name('dashboard');
    Route::resource('users', 'Dashboard\UserController');

    //          o que vai mostrar na url    / controller e o metodo                 / apelido para acesso
    Route::get('usuarios/papel/{role_id}', 'Dashboard\UserController@role')->name('users.role');
    Route::post('usuarios/papel/{role_id}', 'Dashboard\UserController@roleStore')->name('users.role.store');
    Route::delete('usuarios/papel/{user_id}/{role_id}', 'Dashboard\UserController@roleDestroy')->name('users.role.destroy');

    Route::resource('roles', 'Dashboard\RoleController');
});
