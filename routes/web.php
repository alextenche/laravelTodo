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

Route::get('/', 'TodoListController@index');
//Route::get('/todos', 'TodoListController@index');
//Route::get('/todos/{id}', 'TodoListController@show');

Route::resource('todos', 'TodoListController');

Route::get('/dbs', function(){
    $result = DB::table('todo_list')->where('name', 'test')->first();
    return $result->name;
//    return DB::table('todo_list')->get();
});
