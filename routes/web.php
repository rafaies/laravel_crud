<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('todos', TodoController::class);

Route::get('todos/delete/{todo}', [TodoController::class,'destroy'])->name(name: 'todos.delete');
