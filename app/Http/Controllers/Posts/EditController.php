<?php
namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Services\PostService;
use App\Http\Requests\StorePost;

class EditController extends Controller
{
    private $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function edit($slug)
    {
        /**
         * not complet yet
         */
        $post = $this->postService->edit($slug);
        return view('post.edit', compact('post'));
    }

    public function update(StorePost $request, $slug)
    {
        $data = $request->all();
        $this->postService->update($data, $slug);
        return redirect()->route('posts.index');
    }
}
