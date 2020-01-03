<?php

Route::get('/', 'frontController@welcome');

Route::get('admin', 'adminController@admin');

Route::get('setups', 'adminController@setups');

Route::post('addSettings', 'crudController@insertData');

Route::get('categories', 'adminController@categories');

Route::post('addCategory', 'crudController@insertData');

Route::get('deleteCategory/{id}', 'adminController@deleteCategory');

Route::get('editCategory/{id}', 'adminController@editCategory');

Route::post('updateCategory/{id}', 'crudController@updateData');

Route::get('new-post', 'adminController@newPost');

Route::post('addPost','crudController@insertData');
