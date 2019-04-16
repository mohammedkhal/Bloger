<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{
  public function getModel()
  {
    return new Category;
  }
}
