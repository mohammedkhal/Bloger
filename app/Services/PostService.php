<?php

namespace App\Services;

use App\Repositories\PostRepository;
use App\Repositories\CategoryJoinsRepository;
use App\Repositories\TagRepository;
use App\Repositories\TagJoinRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostService
{
	public function __construct(PostRepository $postRepository, CategoryJoinsRepository $categoryJoinRepository, TagRepository $tagRepository, TagJoinRepository $tagJoinRepository)
	{
		$this->postRepository = $postRepository;
		$this->tagRepository = $tagRepository;
		$this->tagJoinRepositoryJoin = $tagJoinRepository;
		$this->categoryJoinRepository = $categoryJoinRepository;
	}

	/**
	 * Fetch the all posts
	 * 
	 * @return collection
	 */
	public function fetchData()
	{
		return $this->postRepository->fetch();
	}

	public function show($slug)
	{
		return $this->postRepository->find($slug);
	}

	public function store(Request $request)
	{
		$request->validate([
			'title' => 'required|max:255',
			'body' => 'required',
			'tag' => 'required',
			'slug' => 'required|unique:posts',
			'short_description' => 'required',
		]);

		$attributes = $request->all();
		$attributes['user_id'] =  Auth::guard('user')->id();
		$post = $this->postRepository->store($attributes);
		$tagsFromPost = explode(",", $attributes['tag']);
		$tags = collect([]);
		foreach ($tagsFromPost as $tag) {
			$newTag = $this->tagRepository->store(['tag' => $tag]);
			$tags->push($newTag->id);
		}

		foreach ($tags as $tag) {
			$newTag = $this->tagJoinRepositoryJoin->store($tag,  $post->id);
		}

		foreach ($attributes['category'] as $category) {
			$this->categoryJoinRepository->store($category, $post->id);
		}
	}


	public function update(Request $request, $slug)
	{
		$request->validate([
			'title' => 'required|max:255',
			'body' => 'required',
			'tag' => 'required',
			'slug' => 'required|unique:posts',
			'short_description' => 'required',
		]);

		$attributes = $request->all();
		$attributes['user_id'] =  Auth::guard('user')->id();
		$this->categoryJoin->update($attributes);

		return $this->postRepository->update($attributes, $slug);
	}
}
