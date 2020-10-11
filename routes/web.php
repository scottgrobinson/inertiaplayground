<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TestOneController;
use App\Http\Controllers\TestTwoController;
use App\Http\Controllers\TestThreeController;

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

Route::get('dashboard', [DashboardController::class, 'init'])->name('dashboard');
Route::get('testone', [TestOneController::class, 'init'])->name('testone');
Route::get('testtwo', [TestTwoController::class, 'init'])->name('testtwo');
Route::get('testthree', [TestThreeController::class, 'init'])->name('testthree');
