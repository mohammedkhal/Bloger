<?php

namespace App\Repositories;

use App\Models\CategoryJoin;

class CategoryJoinsRepository
{
  public function getModel()
  {
    return new CategoryJoin;
  }

  public function store($category, $post_id)
  {
    $categoryJoin = $this->getModel();
    $categoryJoin->category_id = $category;
    $categoryJoin->post_id = $post_id;
    $categoryJoin->save();

    return $categoryJoin;
  }

  public function update(array $attributes)
  { }
}
