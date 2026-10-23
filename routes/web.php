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

Route::view('/vendor/signup', 'pages.auth.vendor-signup')->name('vendor.signup');

// Fake
Route::get('/fake', function () {
    return view('fake.index');
})->name('fake.index');

Route::get('/fake/signin', function () {
    return view('fake.signin');
})->name('fake.signup');

Route::get('/fake/forgot-password', function () {
    return view('fake.forgot-password');
})->name('fake.password.forgot');

Route::get('/fake/verify-otp', function () {
    return view('fake.verify-otp');
})->name('fake.verifyOtp');

Route::get('/fake/reset-password', function () {
    return view('fake.reset-password');
})->name('fake.password.reset');

Route::get('/fake/signup', function () {
    return view('fake.signup');
})->name('fake.signup');