<?php

use App\Http\Controllers\TodoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/todos')->group( function () {
    Route::get('/', [TodoController::class, 'index'])->name('Todo.index');
    Route::get('/{id}', [TodoController::class, 'show'])->name('Todo.show');
    Route::post('/', [TodoController::class, 'store'])->name('Todo.store');
    Route::put('/{id}', [TodoController::class, 'update'])->name('Todo.update');
    Route::delete('/{id}', [TodoController::class, 'destroy'])->name('Todo.destroy');
});