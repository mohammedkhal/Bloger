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


  public function store(array $attributes)
  {
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
