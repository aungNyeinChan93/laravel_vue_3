<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

// require __DIR__ . '/auth.php';

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::group(['prefix' => 'tests', ['middleware' => 'test']], function () {
    Route::get('one', [TestController::class, 'one'])->name('tests.one');
});



