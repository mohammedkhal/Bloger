<?php

namespace App\Repositories;

use App\Models\TagJoin;

class TagJoinRepository
{
    public  function getModel()
    {
        return new  TagJoin;
    }

    public function store($tag_id, $post_id)
    {
        $tagJoinObj = $this->getModel();
        $tagJoinObj->post_id = $post_id;
        $tagJoinObj->tag_id = $tag_id;
        return $tagJoinObj->save();
    }
}
