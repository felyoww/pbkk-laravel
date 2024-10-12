<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Homepage']);
});

Route::get('/about', function () {
    return view('about', ['name'=> 'Fellyla Castiello' , 'title' => 'About Me']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'My Blog', 'posts' => 
    Post::filter(request(['search', 'category' , 'author']))->latest()->get()]);
});

Route::get('/posts/{post:slug}', function( Post $post){
    return view('post', ['title' => 'Full Post', 'post' => $post ]);
});

Route::get('/authors/{user:username}', function(User $user) {
    //$posts = $user->posts->load('category', 'author');
    return view('posts', [
        'title' => count($user->posts) . ' Articles by ' . $user->name, // Space added after 'by'
        'posts' => $user->posts
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    //$posts = $category->posts->load('category', 'author');
    return view('posts', [
        'title' => 'Articles in : ' . $category->name, // Space added after 'by'
        'posts' => $category->posts
    ]);
});

// Ensure the entire block is commented out
// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/contact', function () {
    return view('contact', ['title' => 'Reach Us']);
});

Route::get('/project', function () {
    return view('project', ['title' => 'Projects']);
});


