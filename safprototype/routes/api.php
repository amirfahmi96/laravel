<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddController;
use App\Http\Controllers\PartialTransController;
use App\Http\Controllers\get_users_by_field;

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
Route::post('add', [AddController::class, 'add']);
Route::post('/test3', [PartialTransController::class, 'doGet']);
Route::post('/test4', [PartialTransController::class, 'doPost']);
Route::post('/getuser', [get_users_by_field::class, 'getuser']);