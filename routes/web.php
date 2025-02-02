<?php
use Illuminate\Support\Facades\Route;

require __DIR__.'/web/auth.php';
require __DIR__.'/web/user.php';

Route::view("/", "index")->name("homepage");






