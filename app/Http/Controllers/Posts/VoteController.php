<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\VoteService;

class VoteController extends Controller
{
    public function __construct(VoteService $vote)
    {
        $this->vote = $vote;
    }

    public function update(Request $request)
    {
        $posts = $this->vote->update($request);
        return view('pages.index ', compact('posts'));
    }
}
