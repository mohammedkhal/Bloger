<?php

namespace App\Repositories;

use App\Models\Post;
use App\Tag;
use Illuminate\Http\Request;

class ArticalRepository
{

	protected $artical;

	public function getModel()
	{
		return new Post;
	}


	
	public function getAll()
	{
		$artical = $this->getModel();
		return $artical->latest('id')->get();
	}

	
	public function findSome($slug)
	{
		$artical = $this->getModel();
		return $artical->where('slug',$slug)->first(); 
	}



	//finished for CreateController    
	public function storein(array $attributes)
	{

		$artical = $this->getModel();

		$artical->title = $attributes['title'];
		$artical->body = $attributes['body'];

		$artical->user_id = auth()->user()->id;
		if ($artical->save()) {
			return $artical;
		}
	}

	public function getTag($attributes)
	{
		return $this->artical->where('tag', '=', $attributes['tag'])->get();
	}


	public function updateArtical($artical_id, array $attributes)
	{
		$artical = $this->getModel();
		$artical = $artical->find($artical_id);
		$artical->title = $attributes['title'];
		$artical->body = $attributes['body'];
      
		if ($artical->save())
			return true;
	}


	public function getProfile()
	{
		$id = auth()->user()->id;
		$artical = $this->getModel();

		return $artical->where('user_id', $id)->get();
	}


	public function delete($artical_id)
	{
		$artical = $this->getModel();
		return $artical->find($artical_id)->delete();
	}
}
