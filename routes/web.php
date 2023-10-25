<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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
Route::controller(HomeController::class)->group(function () {
    Route::get("/", "Home")->name('home');
    Route::get("/services", "services")->name('services');
    Route::get("/prestataire/{id}", "profile")->name('prestateur.profile');
});

Route::controller(ProfileController::class)->name("profile.")->group(function () {
    Route::put('update-profile', "UpdateProfile")->name("update");
});

Route::controller(AuthController::class)->group(function () {
    Route::middleware("auth")->group(function () {
        Route::get("/profile", "profile")->name("profile");
        Route::get("/logout", "logout")->name("logout");
    });
    Route::middleware("guest")->group(function () {
        Route::get("/login", "login_form")->name("login");
        Route::get("/register", "register_form")->name("register");
        Route::post("/login", "login")->name("login_f");
        Route::post("/register", "register")->name("register_f");
    });
});
