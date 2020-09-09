<?php

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
], function () {
    Route::get('/', function (): RedirectResponse {
        return redirect()->to(route('admin.dashboard'));
    });
    Route::get('/dashboard', 'Admin\DashboardController')->name('dashboard');
});

Route::group([
    'as' => 'auth.',
], function () {
    Route::get('login', 'Admin\LoginController@show')->name('login');
    Route::get('forgot', 'Admin\LoginController@forgot')->name('login.forgot');
    Route::post('login', 'Admin\LoginController@store')->name('login.store');
});
