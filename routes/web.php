<?php

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


Route::get('/gen', [GenController::class, 'gen']);

Route::get('/gen/{id}', [GenController::class, 'gen_specific']);