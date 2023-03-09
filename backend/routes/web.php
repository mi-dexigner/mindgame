<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\UserController;

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


 Route::get('/', function () { return view('dashboard.index');});
// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [AuthController::class, 'login']);
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/', [AuthController::class, 'login']);
// Route::post('/', [AuthController::class, 'logout'])->name('logout');

Route::resource('admin/users', UserController::class)->names([
    'index' => 'admin.users',
    'create' => 'admin.users.create',
    'store' => 'admin.users.store',
    'show' => 'admin.users.show',
    'edit' => 'admin.users.edit',
    'update' => 'admin.users.update',
    'destroy' => 'admin.users.destroy',
]);


// Route::get('admin/users', 'App\Http\Controllers\UserController@index')->name('admin.users.index');

// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/admin/dashboard', function () {
//         // Only authenticated users with admin privileges may enter...
//     });

//     // Route::get('/admin/users', function () {
//     //     // Only authenticated users with admin privileges may enter...
//     // });
//     Route::get('/admin/profile', function () {
//         // Only authenticated users may enter...
//     });

//     Route::get('/admin/settings', function () {
//         // Only authenticated users may enter...
//     });
// });
