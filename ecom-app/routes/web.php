<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;

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

Route::get('/admin/login',[AdminLoginController::class,'adminLogin'])->name('adminLogin');
Route::get('/admin/dashboard',[AdminLoginController::class,'dashboard'])->name('adminDashboard');
