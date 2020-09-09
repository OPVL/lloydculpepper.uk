<?php

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'wip',
    'as' => 'wip.',
], function () {
    Route::get('parallax', 'WorkInProgressController@parallax')->name('parallax');
});
