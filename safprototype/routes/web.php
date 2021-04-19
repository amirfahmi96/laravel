<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PartialTransController;
use App\Http\Controllers\get_users_by_field;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bcscourse', function () {
    return view('bcscourse');
});
Route::get('/bitcourse', function () {
    return view('bitcourse');
});
Route::get('/bcscourse/INFO3401', function () {
    return view('INFO3401');
});
Route::get('/bcscourse/CSC1100', function () {
    return view('CSC1100');
});
Route::get('/bcscourse/INFO1103', function () {
    return view('INFO1103');
});
Route::get('/bcscourse/INFO2201', function () {
    return view('INFO2201');
});
Route::get('/bcscourse/INFO3304', function () {
    return view('INFO3304');
});
Route::get('/bcscourse/INFO3305', function () {
    return view('INFO3305');
});

Route::get('/popupform', function () {
    return view('popupform');
});
Route::get('/g', function () {
    return view('transcript');
});
Route::get('/profile', function () {
    return view('userprofile');
});
Route::get('/getuser1', function () {
    return view('getuser1');
});
