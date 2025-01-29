<?php

use App\Http\Controllers\Auth\AuthenticationController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthenticationController::class)->middleware("guest")->group(function () {
    Route::get("/login", "loginPage")->name("login-page");
    Route::post("/login", "login")->name("login");

    Route::get("/registration", "registrationPage")->name("registration-page");
    Route::post("/registration", "register")->name("register");
});


Route::controller(AuthenticationController::class)->middleware("auth")->group(function () {
    Route::get("/logout", "logout")->name("logout");
});


