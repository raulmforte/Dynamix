<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('pages.home'); })->name('home');
Route::get('/profile', function () { return view('pages.profile'); })->name('profile');
Route::get('/settings', function () { return view('pages.settings'); })->name('settings');
