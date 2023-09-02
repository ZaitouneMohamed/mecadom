<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(AuthController::class)->group(function () {
    Route::middleware("auth:sanctum")->group(function () {
        Route::get('profile', "profile");
    });
    Route::post("login", "Login");
    Route::post("register", "register");
});

Route::middleware("auth:sanctum")->group(function () {
    Route::get('profile', function () {
        return response()->json(auth()->user());
    });
});

Route::get('users', function () {
    $users = User::latest()->get();
    return response()->json($users);
});
