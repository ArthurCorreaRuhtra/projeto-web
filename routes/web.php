<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/registration', function () {
    return view('registration.registration');
});
Route::get('/profile', function () {
    return view('profile.profile');
});
Route::get('/entrepreneurProfileTest', function () {
    return view('entrepreneurProfileTest.entrepreneurProfileTest');
});
Route::get('/entrepreneurProfileTest/test01', function () {
    return view('entrepreneurProfileTest.test01');
});

Route::get('/', function () {
    return view('welcome');
});
