<?php
namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Services\PostService;
use App\Http\Requests\StorePost;

class CreateController extends Controller
{
    private $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(StorePost $request)
    {
        $data = $request->all();
        $this->postService->store($data);
        return  redirect()->route('posts.index');
    }
}
