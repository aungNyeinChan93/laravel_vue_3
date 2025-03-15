<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::group(['prefix' => 'tests', ['middleware' => 'test']], function () {
    Route::get('one', [TestController::class, 'one'])->name('tests.one');
});

require __DIR__ . '/auth.php';


