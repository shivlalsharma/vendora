<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::middleware('guest')->controller(AuthController::class)->group(function (){
    Route::get('/signin', 'showSigninPage')->name('signin');
    Route::post('/signin', 'signin')->name('signin.submit');

    Route::get('/signup', 'showSignupPage')->name('signup');
    Route::post('/signup', 'signup')->name('signup.submit');

    Route::get('/forgot-password', 'showForgotPassPage')->name('forgot-password');
    Route::post('/send-otp', 'sendOtp')->name('send-otp');

    Route::get('/verify-otp', 'showVerifyOtpPage')->name('verify-otp');
    Route::post('/verify-otp', 'verifyOtp')->name('verify-otp.submit');

    Route::get('/reset-password', 'showResetPassPage')->name('reset-password');
    Route::post('/reset-password', 'resetPass')->name('reset-password.submit');
});

Route::middleware('auth')->controller(AuthController::class)->group(function (){
    Route::post('/logout', 'logout')->name('logout');
});

Route::view('/vendor/signup', 'vendor.pages.auth.signup')->name('vendor.signup')->middleware('guest');

// Fake
Route::prefix('fake')->name('fake.')->group(function (){
    Route::get('/', function () {
        return view('fake.index');
    })->name('index');

    Route::get('/signin', function () {
        return view('fake.signin');
    })->name('signup');

    Route::get('/forgot-password', function () {
        return view('fake.forgot-password');
    })->name('password.forgot');

    Route::get('/verify-otp', function () {
        return view('fake.verify-otp');
    })->name('verifyOtp');

    Route::get('/reset-password', function () {
        return view('fake.reset-password');
    })->name('password.reset');

    Route::get('/signup', function () {
        return view('fake.signup');
    })->name('signup');

    Route::get('/verify-email', function () {
        return view('fake.verify-email');
    })->name('fake.verifyEmail');
});
