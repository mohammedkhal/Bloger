<?php
namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Services\ArticalService;

class ArticlesController extends Controller
{
    protected $articalservice;

    public function __construct(ArticalService $articalservice)
    {
        $this->articalservice = $articalservice;
    }
   
    public function index()
    {
        $articals = $this->articalservice->indexServices();
        return view('pages.index ', compact('articals'));
    }


    public function show($slug)
    {

        $artical = $this->articalservice->showSome($slug);
        return view('pages.read', compact('artical'));
    }

    public function tag(Request $request)
    {

        $articals = $this->articalservice->showTag($request);
        return view('pages.index', compact('articals'));
    }

    public function profile()
    {

        $articals = $this->articalservice->showProfile();
        return view('pages.profile', compact('articals'));
    }
}
