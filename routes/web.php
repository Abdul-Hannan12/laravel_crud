<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\AccountController;
use App\Models\Account;

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

Route::get('/', [AccountController::class, 'view']);

Route::get('/hi/{name?}', function($name = null){
    $data = compact('name');
    echo '<a href="https://www.google.com"> google </a>';
    return view('hello')->with($data);
});

Route::get('/about', [DemoController::class, 'about']);

Route::get('/accounts', function(){
    $accounts = Account::all();
    echo '<pre>';
    print_r($accounts->toArray());
});

// MY CRUD ROUTES

Route::group(['prefix' => '/account'], function (){

    Route::get('/add', [AccountController::class, 'add'])->name('account.add');
    
    Route::get('/view', [AccountController::class, 'view'])->name('account.view');
    
    Route::get('/edit/{id}', [AccountController::class, 'edit'])->name('account.edit');

});