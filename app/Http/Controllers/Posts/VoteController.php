<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\VoteService;   

class VoteController extends Controller
{
    private $voteService;

    public function __construct(VoteService $voteService)
    {
        $this->voteService = $voteService;
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $this->voteService->update($data);
        return redirect()->route('posts.index');
    }
}
