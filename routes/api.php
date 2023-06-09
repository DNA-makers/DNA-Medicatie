<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//admin login
Route::post('/login', [AdminController::class, 'login']);

//edit advice
Route::post('edit/advice', [AdminController::class, 'updateAdvice']);

//delete advice
Route::delete('/delete/advice/{id}', [AdminController::class, 'deleteAdvice']);