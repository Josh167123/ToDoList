<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [TodoController::class, 'index'] );

Route::post('/saveItemRoute', [TodoController::class, 'saveItem'])->name('saveItem'); 

Route::post('/markCompleteRoute/{id}', [TodoController::class, 'markComplete'])->name('markComplete'); 

Route::delete('/deletedRoute/{id}', [TodoController::class, 'removeItem'])->name('removeItem');

Route::post('/editRoute/{listItem}/edit', [TodoController::class, 'editItem'])->name('edit');

Route::put('/editRoute/{id}', [TodoController::class, 'update'])->name('update');