<?php

use App\Http\Controllers\AdviseController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenController;

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

Route::get('/example', function (Request $request) {
    return response()->json([
        'message' => 'Hello from Laravel API!'
    ]);
});

//Gen
Route::get('/gen', [GenController::class, 'gen']);
Route::get('/gen/{id}', [GenController::class, 'gen_specific']);


Route::get('/advise/{gen_code}', [AdviseController::class, 'advise']);

//Users
Route::get('/user', [UserController::class, 'user']);
Route::get('/user/{id}', [UserController::class, 'user_specific']);