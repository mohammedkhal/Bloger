<?php
namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\PostService;

class CreateController extends Controller
{
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $this->postService->store($request);
        return  redirect()->route('posts.index');
    }
}
