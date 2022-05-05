<?php

use App\Http\Controllers\CompanyController;
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

// Guest routes
Route::view('/', 'welcome');

// Auth routes
Route::group(['middleware'=> 'auth'], function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::resource('companies', CompanyController::class);
});

require __DIR__.'/auth.php';
