<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // protected $user;
    // protected $post;

    // public function __construct(
    //     User $user,
    //     Post $post
    // ) {
    //     $this->user = $user;
    //     $this->post = $post;
    // }

    public function __construct(
        public User $user,
        public Post $post
    ) {
    }

    public function index($userId)
    {
        $user = $this->user->find($userId);
        if (!$user) {
            return view('posts.notfound');
        }
        $posts = $user->posts()->get();
        return view('posts.index', compact('posts'));
    }
}