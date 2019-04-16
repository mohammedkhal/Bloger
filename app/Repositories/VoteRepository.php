<?php

namespace App\Repositories;

use App\Models\Vote;

class VoteRepository
{
    public  function getModel()
    {
        return new  Vote;
    }

    public  function update($data)
    {
        $vote = $this->getModel();
        $vote->updateOrCreate(
            ['post_id' => $data['post_id'], 'user_id' => $data['user_id']],
            ['vote' => $data['voteStatus']]
        );
        return $vote;
    }
    public function getVote($post_id)
    {
        $vote = $this->getModel();
        return $vote->where('post_id', $post_id)->sum('vote');
    }
}
