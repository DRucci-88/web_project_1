
<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [HomeController::class, 'index']);
Route::get('/profile', [AuthController::class, 'profile']);
Route::post('/profile', [AuthController::class, 'updateProfile']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'store']);
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::middleware([\App\Http\Middleware\MemberCheck::class])->group(function () {
    Route::get('/profile', [AuthController::class, 'profile']);
    Route::post('/profile', [AuthController::class, 'updateProfile']);
    Route::get('/cart', [OrderController::class, 'index']);
    Route::post('/rent/{ebook}', [OrderController::class, 'rent']);
    Route::get('/cartSubmit', [OrderController::class, 'cartSubmit']);
    Route::post('/deleteCart/{order}', [OrderController::class, 'deleteCart']);
    Route::get('/book_details/{ebook}', [HomeController::class, 'detail']);
    Route::get('/profile', [AuthController::class, 'profile']);
    Route::post('/profile', [AuthController::class, 'updateProfile']);
});

Route::middleware([\App\Http\Middleware\AdminCheck::class])->group(function () {
    Route::get('/account_maintenance', [AdminController::class, 'manageRole']);
    Route::get('/update_role/{account}', [AdminController::class, 'updateRole']);
    Route::post('/update_role/{account}', [AdminController::class, 'updateRoleValidity']);
    Route::post('/deleteAccount/{account}', [AdminController::class, 'deleteAccount']);
});
