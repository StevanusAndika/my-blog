<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Menampilkan semua postingan
    public function index()
    {
        $posts = Post::all(); // Ambil semua data dari tabel posts

        return view('posts', [
            'title' => 'All Posts',
            'posts' => $posts, // Kirim data ke view
        ]);
    }

    // Menampilkan detail postingan berdasarkan slug
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first(); // Cari post berdasarkan slug

        if (!$post) {
            abort(404); // Jika tidak ditemukan, lempar error 404
        }

        return view('post', [
            'title' => $post->title, // Gunakan title dari database
            'post' => $post, // Kirim data post ke view
        ]);
    }
}
