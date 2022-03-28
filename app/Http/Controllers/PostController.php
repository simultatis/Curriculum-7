<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
      dev_basis0-2
        return view('posts/index')->with(['posts' => $post->getPaginateBylimit()]);
    }
}