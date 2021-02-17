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

Route::get('/num1', [Page1Controller::class, 'index'])->name('page1');

Route::get('/num2', [Page2Controller::class, 'index'])->name('page2');

Route::get('/num3', [Page3Controller::class, 'index'])->name('page3');