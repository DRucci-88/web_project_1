<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function (){
    return view('login');
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


//Route::post('/login', [AuthController::class, 'authenticate']);
//Route::get('/register', [AuthController::class, 'register']);
//Route::post('/register', [AuthController::class, 'store']);

Route::get('account_maintenance', static function(){
   return view('account_maintenance');
});

Route::get('update_role', static function(){
    return view('update_role');
});

Route::get('/home', static function() {
   return view('home');
});
