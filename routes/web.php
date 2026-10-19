<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/signin', function () {
    return view('pages.signin');
});

Route::get('/home', function () {
    return view('fake.home');
});

Route::get('/login', function () {
    return view('fake.signin');
})->name('login');

Route::get('/register', function () {
    return view('fake.signup');
})->name('register');