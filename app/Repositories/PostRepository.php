<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository
{
	protected $postRepository;

	public function getModel()
	{
		return new Post;
	}

	public function fetch()
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

	public function updateVote($vote, $slug)
	{
		$post = $this->getModel();
		$post = $post->where('slug', $slug)->first();
		$post->vote = $vote;
		return  $post->save();
	}
}
