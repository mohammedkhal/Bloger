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
	public function indexServices()
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

	public function showTag(Request $request)
	{
		$attributes = $request->all();
		return $this->tag->getTag($attributes);

	}

	//finished EditeControlle  
	public function updateRecord(Request $request, $post_id)
	{
		$request->validate([
			'title' => 'required|max:255',
			'body' => 'required',
			'tag' => 'required',

		]);
		$attributes = $request->all();
		$tags = $this->tag->edaitTag($post_id, $attributes);

		return $this->post->updatepost($post_id, $attributes);
	}

	public function showProfile()
	{
		return $this->post->getProfile();
	}


	public function deleteRecord($post_id)
	{
		$this->comment->delete($post_id);
		$this->tag->delete($post_id);
		return $this->post->delete($post_id);
	}
}

