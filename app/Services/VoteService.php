<?php

namespace App\Services;

use App\Repositories\VoteRepository;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;
use Auth;

class VoteService
{
    protected $voteStatus = 0;
    protected $voteRepository;
    protected $postRepository;

    public function  __construct(VoteRepository $voteRepository, PostRepository $postRepository)
    {
        $this->voteRepository = $voteRepository;
        $this->postRepository = $postRepository;
    }

    public function update(Request $request)
    {
        $post_id = $this->voteRepository->find($request->slug)->id;

        if ($request->vote == 'up') {
            $this->voteStatus = 1;
        } else {
            $this->voteStatus = -1;
        }
        $data = [
            'post_id' => $post_id,
            'user_id' => Auth::guard('user')->id(),
            'voteStatus' => $this->voteStatus,
        ];

        $this->voteRepository->update($data);
        $votes = $this->voteRepository->getVote($post_id);
        return $this->postRepository->updateVote($votes, $request->slug);
        
    }
}
