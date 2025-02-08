<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

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
