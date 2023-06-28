<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/',[QuoteController::class,'index'])->name('quotes.index');
Route::get('/random',[QuoteController::class,'random'])->name('quotes.random');

Route::get('/login',function (){
    return view('login');
});
Route::post('/login', LoginController::class);

Route::get('/register',function (){
    return view('register');
});
Route::post('/register', RegisterController::class);
