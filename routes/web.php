<?php

use Illuminate\Support\Facades\Route;

class Post {

 public  static function all(){

    return [
        'title' => 'Blog',
        'posts' => [
            [
                'id' => 1,
                'slug'=>'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Steven',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim provident omnis possimus cumque eum fuga nisi mollitia corrupti ab nesciunt!'
            ],
            [
                'id' => 2,
                'slug'=>'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Stevan',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim provident omnis possimus cumque eum fuga nisi mollitia corrupti ab nesciunt!'
            ],
        ]
    ]
 }
}

Route::get('/', function () {
    return view('home',['title'=>'Home Page']);

});

Route::get('about', function () {
    return view('about',['title' => 'About Page']);
    
});

Route::get('posts', function () {
<<<<<<< HEAD
    return view('posts', );
});
Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id'=> 1,
            'slug'=>'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            
            'author' => 'Steven',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim provident omnis possimus cumque eum fuga nisi mollitia corrupti ab nesciunt!'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'slug'=>'judul-artikel-2',
            'author' => 'Stevan',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim provident omnis possimus cumque eum fuga nisi mollitia corrupti ab nesciunt!'
        ],
    ];

    // Menggunakan Arr::first untuk mencari post berdasarkan ID
    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    // Jika tidak ditemukan, tampilkan 404
    if (!$post) {
        abort(404);
    }

    return view('post', [
        'title' =>'single post',
        'post' => $post
    ]);
});
=======
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
>>>>>>> parent of 8a6f529 (add view single post and add  support arr library in routes)

Route::get('contact', function () {
    return view('social_media',['title' => 'My contact']);
    
});


