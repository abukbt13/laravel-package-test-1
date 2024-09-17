<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function ($length = 10) {
    return bin2hex(random_bytes($length));
});
