<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::group(['prefix' => 'service'], function () {
    Route::get('/{service}', function () {
        return view('pages.service');
    });
});

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', function () {
        return view('pages.dashboard.dashboard');
    });
});