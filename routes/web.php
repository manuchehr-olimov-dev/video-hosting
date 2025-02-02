<?php
use Illuminate\Support\Facades\Route;

require __DIR__.'/web/auth.php';
require __DIR__.'/web/user.php';
require __DIR__.'/web/admin-panel.php';

Route::view("/", "index")->name("homepage");






