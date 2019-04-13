<?php
namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Services\PostService;

class PostController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }
   
    public function index()
    {
        $posts = $this->postService->indexServices();
        return view('pages.index ', compact('posts'));
    }


    public function show($slug)
    {

        $post = $this->postService->show($slug);
        return view('pages.read', compact('post'));
    }

    public function tag(Request $request)
    {

        $posts = $this->postService->showTag($request);
        return view('pages.index', compact('posts'));
    }

    public function profile()
    {

        $posts = $this->postService->showProfile();
        return view('pages.profile', compact('posts'));
    }
}
