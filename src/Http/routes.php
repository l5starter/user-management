<?php

Route::group(['namespace' => 'L5Starter\UserManagement\Http\Controllers\Admin', 'middleware' => ['web', 'auth']], function () {
    Route::get('admin/users', ['as' => 'admin.users.index', 'uses' => 'UserController@index']);
    Route::post('admin/users', ['as' => 'admin.users.store', 'uses' => 'UserController@store']);
    Route::get('admin/users/create', ['as' => 'admin.users.create', 'uses' => 'UserController@create']);
    Route::put('admin/users/{users}', ['as' => 'admin.users.update', 'uses' => 'UserController@update']);
    Route::patch('admin/users/{users}', ['as' => 'admin.users.update', 'uses' => 'UserController@update']);
    Route::delete('admin/users/{users}', ['as' => 'admin.users.destroy', 'uses' => 'UserController@destroy']);
    Route::get('admin/users/{users}/edit', ['as' => 'admin.users.edit', 'uses' => 'UserController@edit']);
});