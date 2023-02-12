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

Route::get('/dashboard', function () {
    return view('employee.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Admin route stats
Route::prefix('employee')->middleware(['auth', 'verified'])->group(function () {
    
});



require __DIR__.'/auth.php';


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');


// Admin route stats
Route::prefix('admin')->middleware(['auth:admin', 'verified'])->group(function () {
    
});

require __DIR__.'/adminauth.php';