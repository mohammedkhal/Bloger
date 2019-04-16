<?php

namespace App\Repositories;

use App\Models\Tag;

class TagRepository
{
    public  function getModel()
    {
        return new  Tag;
    }

    public function store($data)
    {
        $tag = $this->getModel();
        $tag = $tag->firstOrCreate([
            'tag_name' => $data['tag'],
            'slug' => str_replace(' ', '-', $data['tag']),
        ]);
        return $tag;
    }
}
