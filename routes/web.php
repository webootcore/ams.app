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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employee', function () {
    return view('employees');
});

Route::get('/attendace-logs', function () {
    return view('attendance-logs');
});

Route::get('/shift', function () {
    return view('shift');
});

Route::get('/payroll', function () {
    return view('payroll');
});
