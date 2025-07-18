<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use function Laravel\Prompts\search;

class Category extends Model
{
    private static $categories = [
        [
            'id' => 1,
            'title' => 'Мир',
            'slug' => 'world'
        ],
        [
            'id' => 2,
            'title' => 'Политика',
            'slug' => 'politics'
        ],
        [
            'id' => 3,
            'title' => 'Бизнес',
            'slug' => 'business'
        ],
        [
            'id' => 4,
            'title' => 'Технологии',
            'slug' => 'technology'
        ],
        [
            'id' => 5,
            'title' => 'Развлечения',
            'slug' => 'entertainment'
        ],
        [
            'id' => 6,
            'title' => 'Спорт',
            'slug' => 'sports'
        ],
    ];

    public static function getCategories():array{
        return static::$categories;
    }

    public static function getCategoryBySlug($slug){
        foreach (static::$categories as $category) {
            if ($category['slug'] === $slug) {
                return $category;
            }
        }
        return null;
    }

    public static function checkCategoryBySlug($slug):bool
    {
        return self::getCategoryBySlug($slug) !== null;
    }
    public static function getCategoryTitleBySlug($slug)
    {
        return static::getCategoryBySlug($slug)['title'] ?? '';
    }
    public static function getCategoryIdBySlug($slug)
    {
        return static::getCategoryBySlug($slug)['id'] ?? null;
    }

}
