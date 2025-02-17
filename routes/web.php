<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SavingController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/profile',function(){
    return view('profile');
})->middleware('auth');

Route::get('/budget',function(){
    return view('budget');
})->name('budget');

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

Route::post('/log/logout',[AuthController::class,'logout'])->name('logout');

Route::get('/profile/edit',function(){
    return view("edit_profile");
})->name('getProfileEdit');

Route::post('/profile/edit',[AuthController::class,'profileEdit'])->name('postProfileEdit');

Route::get('/profile/edit/password',function(){
    return view("edit_password");
})->name('getPasswordEdit');

Route::post('/profile/edit/password',[AuthController::class,'passwordEdit'])->name('postPasswordEdit');

Route::get('/api/savings',[SavingController::class,'getGoal']);

Route::post('/api/savings',[SavingController::class,'postGoal']);

Route::delete('/api/savings/{goalId}',[SavingController::class,'delete']);

Route::get('/api/budget',[BudgetController::class,'getCategory']);

Route::post('/api/budget',[BudgetController::class,'postCategory']);