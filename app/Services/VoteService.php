<?php

namespace App\Services;

use App\Repositories\VoteRepository;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;
use Auth;

class VoteService
{

    protected $voteStatus = 0;
    public function  __construct(VoteRepository $vote, PostRepository $post)
    {
        $this->vote = $vote;
        $this->post = $post;
    }

    public function update(Request $request)
    {
        $post_id = $this->post->find($request->slug)->id;
        if ($request->vote == 'up') {
            $this->voteStatus = 1;
        } else {
            $this->voteStatus = -1;
        }
        $data = ([
            'post_id' => $post_id,
            'user_id' => Auth::guard('user')->id(),
            'voteStatus' => $this->voteStatus,
        ]);
        
        $votes = $this->vote->update($data);
        return $this->post->edit($votes, $request->slug);
    }
}
