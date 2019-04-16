<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\VoteService;

class VoteController extends Controller
{
    public function __construct(VoteService $voteService)
    {
        $this->vote = $voteService;
    }

    public function update(Request $request)
    {
        $this->vote->update($request);
        return redirect()->route('posts.index');
    }
}
