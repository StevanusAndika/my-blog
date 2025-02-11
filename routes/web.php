<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');

});

Route::get('about', function () {
    return view('about',['nama' => 'Stevanus Andika']);
    
});

Route::get('blog', function () {
    return view('blog',['isi' => 'My blog']);
    
});
Route::get('social', function () {
    return view('social_media',['contact' => 'My contact']);
    
});


