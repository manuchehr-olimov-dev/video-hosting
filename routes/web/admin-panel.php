<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth'])->group(function () {
        Route::get('/admin-panel', function () {
            return view('admin.panel');
        })->name('admin.panel');
});
