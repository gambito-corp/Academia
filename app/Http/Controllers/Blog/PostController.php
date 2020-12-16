<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function listar()
    {
        $posts = Post::with('Image')->where('status', Post::PUBLICADO)->latest('id')->paginate(8);
        return view('Blog.index', compact('posts'));
    }
}
