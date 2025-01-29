<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])
        ->prefix("profile")
        ->controller(UserController::class)
        ->group(function (){
    Route::view("/", "profile")->name("profile-page");
});
