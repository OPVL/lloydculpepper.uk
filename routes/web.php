<?php

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('', function (): RedirectResponse {
    return redirect(route('home'));
});

Route::get('/home', 'HomeController')->name('home');

require 'admin.php';
require 'wip.php';