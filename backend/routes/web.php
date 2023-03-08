<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


 Route::get('/', function () { return view('index');});
// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [AuthController::class, 'login']);
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/', [AuthController::class, 'login']);
// Route::post('/', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        // Only authenticated users with admin privileges may enter...
    });

    Route::get('/admin/users', function () {
        // Only authenticated users with admin privileges may enter...
    });
    Route::get('/admin/profile', function () {
        // Only authenticated users may enter...
    });

    Route::get('/admin/settings', function () {
        // Only authenticated users may enter...
    });
});
