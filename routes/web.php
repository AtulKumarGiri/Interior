<?php

use Illuminate\Support\Facades\Auth;
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
    return view('layouts.frontend.index');
});

Route::get('/members', function() {
    return view('layouts.frontend.members');
});

Route::get('/more-designs', function() {
    return view('layouts.frontend.more-design');
});

// Auth::routes();
Route::post('/make-appointment', [App\Http\Controllers\HomeController::class, 'makeAppointment']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
    Route::get('/appointments', [App\Http\Controllers\HomeController::class, 'showAppointment']);
});
Auth::routes();

