<?php
namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Services\PostService;

class IndexController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        $posts = $this->postService->fetch();
        return view('post.index ', compact('posts'));
    }
}
