<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/profile',function(){
    return view('profile');
});

Route::get('/budget',function(){
    return view('budget');
});

Route::get('/finance',function(){
    return view('finance');
});

Route::get('/saving',function(){
    return view('saving');
});

Route::get('/auth',function(){
    return view('entry');
})->name('getAuth');

Route::post('/auth',[AuthController::class,'login'])->name('postAuth');

Route::get('/registration',function(){
    return view('registration');
});

Route::post('/registration',[RegisterController::class,'createUser'])->name('registration');

Route::get('/log',function(){
    dd(Auth::user());
});

