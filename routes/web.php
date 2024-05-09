<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PlanController;

Route::get('/', function () {
    return view('landing_operator');
})->name('landing_operator');

Route::get('/Adm_Login', function () {
    return view('Adm_Login');
})->name('Adm_Login');

Route::post('/homepage', [AdminController::class, 'login'])->name('admin.login.submit');
Route::post('/', [AdminController::class, 'logout'])->name('admin.logout.submit');
Route::post('/homepage/UserRegister', [UserController::class, 'register'])->name('user.register.submit');
Route::get('/C_LOGIN', function () {
    return view('C_LOGIN');
})->name('C_LOGIN');
Route::get('/homepage', function () {
    return view('homepage');
})->name('homepage');

Route::get('/homepage/plan', function () {
    return view('Plan');
})->name('Plan');

Route::get('/homepage/UserRegister', function () {
    return view('Customer_registration');
})->name('Customer_registration');

Route::post('/homepage/UserRegister', [CustomerController::class, 'store']);

Route::get('/homepage/UserManage', function () {
    return view('user_manage');
})->name('user_manage');

Route::get('/homepage/plan/packageSelection/{plan}', 'CustomerController@package')->name('PackageSelection');

Route::get('/homepage/customer_check', function () {
    return view('customer_check');
})->name('customer_check');

Route::post('/homepage/customer_check', [CustomerController::class, 'check']);

Route::get('/send-mail', [EmailController::class, 'sendwelcomeEmail']);

Route::get('/push-db', [PlanController::class, 'store']);



// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
