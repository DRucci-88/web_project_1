
<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

Route::post('/register', [AuthController::class,'store']);
Route::post('/login',[AuthController::class,'authenticate']);
Route::get('/login',[AuthController::class,'login']);
Route::get('/home',[HomeController::class,'index']);
Route::get('/book_details/{ebook}',[HomeController::class,'detail']);
Route::post('/logout', [AuthController::class,'logout']);


Route::get('/cart', function (){
    return view('cart');
});


//Route::post('/login', [AuthController::class, 'authenticate']);
//Route::get('/register', [AuthController::class, 'register']);
//Route::post('/register', [AuthController::class, 'store']);

Route::get('/account_maintenance', static function(){
    return view('account_maintenance');
});

Route::get('/book_details', static function(){
    return view('book_details');
});

Route::get('/update_role', static function(){
    return view('update_role');
});


