<?php

use App\Http\Controllers\Auth\AuthController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::middleware("auth")->group(function(){
        Route::get("/profile", "profile")->name("profile");
        Route::get("/logout", "logout")->name("logout");
    });
    Route::middleware("guest")->group(function(){
        Route::get("/login", "login_form")->name("login");
        Route::get("/register", "register_form")->name("register");
        Route::post("/login", "login")->name("login_f");
        Route::post("/register", "register")->name("register_f");
    });
});
