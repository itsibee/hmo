<?php

use Illuminate\Support\Facades\Route;

// include 'sign_route.php';


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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/', [App\Http\Controllers\HomeController::class, 'registerEvent'])->name('register.event');

Route::get('stafflist/export/', [App\Http\Controllers\HomeController::class, 'exportAttendee']);

