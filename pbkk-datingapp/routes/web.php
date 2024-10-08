<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Homepage']);
});

Route::get('/about', function () {
    return view('about', ['name'=> 'Fellyla Castiello' , 'title' => 'About Me']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'My Blog', 'posts' => [
        [
            'id'=> 1,
            'slug' => 'sylus-supremacy',
            'title' => 'Sylus Supremacy',
            'author' => 'Fellyla',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Nesciunt non totam incidunt dicta doloremque iure architecto nostrum sint aspernatur dolores dolore delectus fuga, 
        aut labore repudiandae, nobis odio autem optio.'
        ],

        [
            'id' => 2,
            'slug' => 'silly-billy',
            'title' => 'Silly Billy',
            'author' => 'Farrel',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Nesciunt non totam incidunt dicta doloremque iure architecto nostrum sint aspernatur dolores dolore delectus fuga, 
        aut labore repudiandae, nobis odio autem optio.'
        ],

        [
            'id' => 3,
            'slug' => 'eepy-mimi',
            'title' => 'Eepy Mimi',
            'author' => 'Xiaomimi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Nesciunt non totam incidunt dicta doloremque iure architecto nostrum sint aspernatur dolores dolore delectus fuga, 
        aut labore repudiandae, nobis odio autem optio.'
        ],
        

        
    ]]);
});

Route::get('/posts/{slug}', function($slug){
    $posts = [
        [
            'id' => 1,
            'slug' => 'sylus-supremacy',
            'title' => 'Sylus Supremacy',
            'author' => 'Fellyla',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Nesciunt non totam incidunt dicta doloremque iure architecto nostrum sint aspernatur dolores dolore delectus fuga, 
            aut labore repudiandae, nobis odio autem optio.'
        ],
        [
            'id' => 2,
            'slug' => 'silly-billy',
            'title' => 'Silly Billy',
            'author' => 'Farrel',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Nesciunt non totam incidunt dicta doloremque iure architecto nostrum sint aspernatur dolores dolore delectus fuga, 
            aut labore repudiandae, nobis odio autem optio.'
        ],
        [
            'id' => 3,
            'slug' => 'eepy-mimi',
            'title' => 'Eepy Mimi',
            'author' => 'Xiaomimi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Nesciunt non totam incidunt dicta doloremque iure architecto nostrum sint aspernatur dolores dolore delectus fuga, 
            aut labore repudiandae, nobis odio autem optio.'
        ]
    ];

    $post = Arr::first($posts, function($post) use($slug){
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post ]);
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
