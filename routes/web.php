<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Task\TaskController;

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
    return view('index');
})->middleware('auth');

////// Route Mange Tasks
Route::group(['prefix', 'middleware' => ['auth']], function () {
    Route::get('search',[TaskController::class, 'search']);
    Route::get('catogry', [TaskController::class, 'getCatogry']);
    Route::resource('tasks', TaskController::class);
});


//// Route all of process in Authantaction
require __DIR__ . '/auth.php';
