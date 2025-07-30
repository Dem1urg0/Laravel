<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class News extends BaseModel
{
    protected $table = 'news';

    public function getNewsById($id)
    {
        return $this->getById($id) ?? null;
    }

    public function checkNewsExistById($id): bool
    {
        return $this->getById($id) !== null;
    }

    public function getNewsByCategoryId($id): object
    {
        return $this->getAllByParameter('category_id', $id);
    }

    public function createNew($data, $img) :int
    {
        //todo проверка прав

        $path = Storage::disk('public')->putFile('img/news', $img);

        $data['created_at'] = now();
        $data['image'] = $path;

        return $this->addData($data);
    }
}
