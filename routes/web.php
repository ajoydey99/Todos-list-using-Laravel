<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('todos', 'TodosController@index');

Route::get('todos/{todo}','TodosController@show');

Route::get('new_todos','TodosController@create');

Route::post('store_todos','TodosController@store');

Route::get('todos/{todo}/edit','TodosController@edit');

Route::post('todos/{todo}/update_todos','TodosController@update');

Route::get('todos/{todo}/delete','TodosController@destroy');

Route::get('todos/{todo}/complete','TodosController@complete');