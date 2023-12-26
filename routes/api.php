<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Models\Account;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/login', [AuthController::class, 'signin']);
Route::get('/register', [AuthController::class, 'signup']);

// MY CRUD ROUTES

Route::post('/account/add', [AccountController::class, 'store']);

Route::get('/account/delete/{id}', [AccountController::class, 'delete'])->name('account.delete');

Route::post('/account/update/{id}', [AccountController::class, 'update']);

Route::get('/account/status/update/{id}/{status}', [AccountController::class, 'update_status'])->name('account.status.update');