<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

// Ensure the entire block is commented out
// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/project', function () {
    return view('project');
});
