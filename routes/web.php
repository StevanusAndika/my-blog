<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['title'=>'Home Page']);

});

Route::get('about', function () {
    return view('about',['title' => 'About Page']);
    
});

Route::get('posts', function () {
    return view('posts', [
        'title' => 'Blog',
        'posts' => [
            [
                'id'=>1,
                'title' => 'Judul Artikel 1',
                'author' => 'Steven',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim provident omnis possimus cumque eum fuga nisi mollitia corrupti ab nesciunt!'
            ],
            [
                'id' =>2,
                'title' => 'Judul Artikel 2',
                'author' => 'Stevan',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim provident omnis possimus cumque eum fuga nisi mollitia corrupti ab nesciunt!'
            ],
        ]
    ]);
});

Route::get('contact', function () {
    return view('social_media',['title' => 'My contact']);
    
});


