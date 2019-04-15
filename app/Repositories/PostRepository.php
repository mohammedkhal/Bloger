<?php

namespace App\Repositories;

use App\Models\Post;
//use Illuminate\Support\Facades\Auth;
class PostRepository
{

	protected $post;

	public function getModel()
	{
		return new Post;
	}



	public function getAll()
	{
		$post = $this->getModel();
		return $post->latest('id')->get();
	}


	public function find($slug)
	{
		$post = $this->getModel();
		return $post->where('slug', $slug)->first();
	}



	public function store(array $attributes)
	{
		$post = $this->getModel();

		$post->title = $attributes['title'];
		$post->short_description = $attributes['short_description'];
		$post->body = $attributes['body'];
		$post->slug = $attributes['slug'];
		$post->user_id = $attributes['user_id'];

		if ($post->save()) {
			return $post;
		}
	}

	public function update(array $attributes, $slug)
	{

		$post = $this->find($slug);

		$post->title = $attributes['title'];
		$post->short_description = $attributes['short_description'];
		$post->body = $attributes['body'];
		$post->slug = $attributes['slug'];
		$post->user_id = $attributes['user_id'];

		if ($post->save()) {
			return $post;
		}
	}

	public function edit($vote, $slug)
	{

		$post = $this->getModel();
		$post = $post->where('slug', $slug)->first();
		$post->vote= $vote ; 
		$post->save() ; 
		return $this->getAll();
	}
}
