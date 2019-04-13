<?php
namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Services\PostService;

class CreateController extends Controller
{
    protected $postservice;

    public function __construct(PostService $postservice)
    {
        $this->postservice = $postservice;
    }
   


    public function show()
    {
        return view('postpages.show');
    }

    public function store(Request $request)
    {

        $articals = $this->articalservice->store($request);
        return  redirect()->back();
    }
}
