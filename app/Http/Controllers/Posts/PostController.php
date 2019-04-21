<?php
namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Services\PostService;

class PostController extends Controller
{
    private $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function show($slug)
    {
        $post = $this->postService->show($slug);
        return view('post.show', compact('post'));
    }
}
