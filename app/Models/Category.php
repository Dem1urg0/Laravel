<?php

namespace App\Models;

class Category extends BaseModel
{
    protected $table = "categories";

    public function getCategoryBySlug($slug)
    {

        return $this->getAllByParameter('slug', $slug)[0] ?? null;
    }

}
