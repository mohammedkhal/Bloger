<?php
namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Services\PostService;

class CreateController extends Controller
{
    protected $postService;

    public function __construct(PostService $postservice)
    {
        $this->postService = $postservice;
    }
   


    public function show()
    {
        return view('postpages.store');
    }

    public function store(Request $request)
    {

        $articals = $this->postService->store($request);
        return  redirect()->back();
    }
}
