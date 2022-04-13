<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\TicketsController;

use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource("patients",PatientsController::class)->middleware(['auth', 'verified']);
Route::resource("doctors",DoctorsController::class)->middleware(['auth', 'verified']);
Route::resource("department",DepartmentController::class)->middleware(['auth', 'verified']);
Route::resource("tickets",TicketsController::class)->middleware(['auth', 'verified']);
require __DIR__.'/auth.php';
