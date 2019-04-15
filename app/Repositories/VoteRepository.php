<?php

namespace App\Repositories;

use App\Models\Vote;

class VoteRepository
{
    protected $vote;
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
        $vote = $vote->where('post_id' , $data['post_id'] )->sum('vote');

        return $vote ;
    }
}
