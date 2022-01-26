<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuckingUsersController;
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

Route::get('/', [FuckingUsersController::class, 'initCreateUser']);
Route::post('/createUser', [FuckingUsersController::class, 'createUser'])->name('create.user');
Route::get('/login', [FuckingUsersController::class, 'initLogin']);
Route::post('/auth', [FuckingUsersController::class, 'authUser'])->name('auth.user');
Route::get('/dashboard', [FuckingUsersController::class, 'authUser']);
