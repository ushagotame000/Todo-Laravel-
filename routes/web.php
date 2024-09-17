<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', function () {
return redirect()->route('getTodo');
});
Route::get('/getTodo',[TodoController::class,'index'])->name('getTodo');
Route::resource('todo', TodoController::class);

// Route::get('/create', function () {
//     return view('create');
// });

    Route::post('/store', [TodoController::class,'store']);
Route::delete('/todo/{id}', 'TodoController@destroy');
Route::get('/todo/{id}/edit', [TodoController::class, 'edit']);
Route::patch('/todo/{id}', [TodoController::class, 'update']);