<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Inertia;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:sanctum', 'verified']);
    }

    public function index()
    {
        $posts = Post::all();

        return Inertia::render('Post/Index', [
            'posts' => $posts,
        ]);
    }
}
