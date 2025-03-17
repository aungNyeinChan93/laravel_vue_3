<?php

use App\Http\Controllers\Api\TestController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => ''], function () {

    Route::apiResource('tests', TestController::class);

    Route::get('users', function () {
        return response()->json([
            'users' => User::all(),
        ]);
    });

});

