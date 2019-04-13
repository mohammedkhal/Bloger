<?php

namespace App\Repositories;
use App\Models\Category;
use Illuminate\Http\Request;
class CategoryRepository
{
    protected $categoryJoin ;
  public function getModel()
  {
  return new Category ;
  }
  
}
