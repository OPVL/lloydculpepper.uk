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

Route::get('', 'HomeController')->name('home');
Route::get('/about', 'AboutController')->name('about');
Route::get('/projects', 'ProjectsController')->name('projects');
Route::get('/contact', 'ContactController')->name('contact');


Route::prefix('admin')
    ->middleware('auth')
    ->group(
        function (): void {
            Route::get('', 'Admin\DashboardController')->name('admin.dashboard');
        }
    );

// Route::prefix('auth')
//     ->middleware('web')
//     ->group(
//         function (): void {
//             Route::get('login', 'Admin\LoginController@show')->name('login');
//             // Route::get('forgot', 'Admin\LoginController@forgot')->name('login.forgot');
//             Route::post('login', 'Admin\LoginController@store')->name('login.store');
//         }
//     );

Route::middleware('guest')
    ->group(
        function (): void {
            Route::get('login')->uses('Admin\LoginController@show')->name('login');
            Route::post('login')->uses('Admin\LoginController@store')->name('login.store');

            // Route::get('forgot')->uses(WorkInProgressController::class)->name('forgot');

            // Route::get('register')->uses([RegisterController::class, 'create'])->name('register');
            // Route::put('register')->uses([RegisterController::class, 'store'])->name('register.store');
        }
    );
