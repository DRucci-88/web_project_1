
<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function (){
    return view('profile');
});

Route::get('/register', function (){
    return view('register');
});
Route::get('/cart', function (){
    return view('cart');
});


Route::get('/profile', [AuthController::class, 'profile']);
Route::post('/profile', [AuthController::class, 'updateProfile']);
Route::post('/register', [AuthController::class,'store']);
Route::post('/login',[AuthController::class,'authenticate']);
Route::get('/login',[AuthController::class,'login']);
Route::get('/home',[HomeController::class,'index']);
Route::get('/book_details/{ebook}',[HomeController::class,'detail']);
Route::post('/logout', [AuthController::class,'logout']);
Route::get('/account_maintenance',[AdminController::class,'manageRole']);
Route::get('/update_role/{account}',[AdminController::class,'updateRole']);
Route::post('/update_role/{account}',[AdminController::class,'updateRoleValidity']);
Route::post('/deleteAccount/{account}', [AdminController::class, 'deleteAccount']);

//Route::post('/login', [AuthController::class, 'authenticate']);
//Route::get('/register', [AuthController::class, 'register']);
//Route::post('/register', [AuthController::class, 'store']);




