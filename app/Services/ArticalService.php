<?php

namespace App\Services;

use App\Http\Controllers\Auth;
use App\Repositories\ArticalRepository;
use App\Repositories\CommentRepository;
use App\Repositories\TagRepository;
use Illuminate\Http\Request;

class ArticalService
{
	public function __construct(ArticalRepository $artical)
	{
		$this->artical = $artical;
	
	}
	
	/**
	 * Fetch the all articals
	 * 
	 * @return collection
	 */
	public function indexServices()
	{
		return $this->artical->getAll();
	}


	public function showSome($slug)
	{ 

		return $this->artical->findSome($slug);
	}
	


 
	public function storeArtical(Request $request)
	{
		$request->validate([
			'title' => 'required|max:255',
			'body' => 'required',
		]);

		$attributes = $request->all();

		$artical = $this->artical->storein($attributes);
		$attributes['artical_id'] = $artical->id;
		$tags = $this->tag->storeTag($attributes);
	}

	public function showTag(Request $request)
	{
		$attributes = $request->all();
		return $this->tag->getTag($attributes);
	}

	//finished EditeControlle  
	public function updateRecord(Request $request, $artical_id)
	{
		$request->validate([
			'title' => 'required|max:255',
			'body' => 'required',
			'tag' => 'required',

		]);
		$attributes = $request->all();
		$tags = $this->tag->edaitTag($artical_id, $attributes);

		return $this->artical->updateArtical($artical_id, $attributes);
	}

	public function showProfile()
	{
		return $this->artical->getProfile();
	}


	public function deleteRecord($artical_id)
	{
		$this->comment->delete($artical_id);
		$this->tag->delete($artical_id);
		return $this->artical->delete($artical_id);
	}
}

