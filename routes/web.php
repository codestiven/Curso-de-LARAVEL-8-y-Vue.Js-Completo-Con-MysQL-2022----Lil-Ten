<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view ('/', 'app');

Route::get('/{c}', function ($c) {
    return "coca cola {$c}";
});

