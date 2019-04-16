<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{
  protected $categoryJoinRepository;

  public function getModel()
  {
    return new Category;
  }
}
