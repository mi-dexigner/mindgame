<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\WordController;

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



Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [AuthController::class, 'login'])->name('login');
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



// Route::get('admin/users', 'App\Http\Controllers\UserController@index')->name('admin.users.index');

Route::resource('admin/users', UserController::class)->names([
    'index' => 'admin.users',
    'create' => 'admin.users.create',
    'store' => 'admin.users.store',
    'show' => 'admin.users.show',
    'edit' => 'admin.users.edit',
    'update' => 'admin.users.update',
    'destroy' => 'admin.users.destroy',
]);

Route::middleware(['auth'])->group(function () {
    Route::get('admin/dashboard', function () { return view('dashboard.index');})->name('dashboard');
    Route::resource('admin/users', UserController::class)->names([
        'index' => 'admin.users',
        'create' => 'admin.users.create',
        'store' => 'admin.users.store',
        'show' => 'admin.users.show',
        'edit' => 'admin.users.edit',
        'update' => 'admin.users.update',
        'destroy' => 'admin.users.destroy',
    ]);
    Route::resource('admin/levels', LevelController::class)->names([
        'index' => 'admin.levels',
        'create' => 'admin.levels.create',
        'store' => 'admin.levels.store',
        'show' => 'admin.levels.show',
        'edit' => 'admin.levels.edit',
        'update' => 'admin.levels.update',
        'destroy' => 'admin.levels.destroy',
    ]);
    Route::resource('admin/words', WordController::class)->names([
        'index' => 'admin.words',
        'create' => 'admin.words.create',
        'store' => 'admin.words.store',
        'show' => 'admin.words.show',
        'edit' => 'admin.words.edit',
        'update' => 'admin.words.update',
        'destroy' => 'admin.words.destroy',
    ]);

    // Route::get('/admin/users', function () {
    //     // Only authenticated users with admin privileges may enter...
    // });
    Route::get('/admin/profile', function () {
        // Only authenticated users may enter...
    });

    Route::get('/admin/settings', function () {
        // Only authenticated users may enter...
    });
});
