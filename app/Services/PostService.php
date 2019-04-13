<?php

namespace App\Services;

//use App\Http\Controllers\Auth;
use App\Repositories\PostRepository;
use App\Repositories\CategoryJoinsRepository;
use App\Repositories\TagRepository;
use App\Repositories\TagJoinRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostService
{
	public function __construct(PostRepository $post , CategoryJoinsRepository $categoryJoin , TagRepository $tag , TagJoinRepository $tagJoin)
	{
		$this->post = $post;
		$this->tag = $tag;
		$this->tagJoin = $tagJoin;
		$this->categoryJoin = $categoryJoin;

	
	}
	
	/**
	 * Fetch the all posts
	 * 
	 * @return collection
	 */
	public function index()
	{
		return $this->post->getAll();
	}


	public function show($slug)
	{ 
		return $this->post->find($slug);
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
		$attributes['user_id'] =  Auth::guard('user')->id() ;
		$post = $this->post->store($attributes);

		$attributes['post_id'] = $post->id;	
	    $this->categoryJoin->store($attributes);

		$tagsFromPost = explode("," , $attributes['tag']);
		$tags = collect([]);
		foreach ($tagsFromPost as $tag) {
			$newTag = $this->tag->store(['tag' => $tag]);
			$tags->push($newTag->id);
		}

		foreach ($tags as $tag ) {
			$newTag = $this->tagJoin->store($tag ,  $post->id);
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

		return $this->post->update($attributes, $slug);
	}

}

