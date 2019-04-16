<?php

namespace App\Repositories;
use App\Models\CategoryJoin;
use Illuminate\Http\Request;
class CategoryJoinsRepository
{

  protected $category;

  public function getModel()
  {
  return new CategoryJoin ;
  }


  public function store($category, $post_id )
  {
      $categoryObj = $this->getModel() ;
      $categoryObj->category_id = $category ;
      $categoryObj->post_id = $post_id ;
      $categoryObj->save();
    
    return $categoryObj ;
  }
  
  public function update(array $attributes)
  {
    $categoryObj = $this->getModel() ;

    $categoryObj->where('post_id', $attributes['post_id'] )->get()->delete() ;
     
    $array =$attributes['category'];
    foreach($array as $category){
      $categoryObj = $this->getModel() ;
      $categoryObj->category_id = $category ;
      $categoryObj->post_id = $attributes['post_id'] ;
      $categoryObj->save();
    }
    return $categoryObj ;
  }
  

}
