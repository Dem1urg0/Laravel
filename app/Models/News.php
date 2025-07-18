<?php

namespace App\Models;

class News
{
    private static $news = [
        1 =>
        [
            'id' => 1,
            'title' => 'News Title 1',
            'content' => 'Content of the first news article.',
            'author' => 'Author 1',
            'created_at' => '2023-10-01',
            'category_id' => 1,
        ],
        2 =>
        [
            'id' => 2,
            'title' => 'News Title 2',
            'content' => 'Content of the second news article.',
            'author' => 'Author 2',
            'created_at' => '2023-10-02',
            'category_id' => 2,
        ],
        3 =>
        [
            'id' => 3,
            'title' => 'News Title 3',
            'content' => 'Content of the third news article.',
            'author' => 'Author 3',
            'created_at' => '2023-10-03',
            'category_id' => 3,
        ],
        4 =>
        [
            'id' => 4,
            'title' => 'News Title 4',
            'content' => 'Content of the fourth news article.',
            'author' => 'Author 4',
            'created_at' => '2023-10-04',
            'category_id' => 4,
        ],
        5 =>
            [
                'id' => 5,
                'title' => 'News Title 5',
                'content' => 'Content of the fourth news article.',
                'author' => 'Author 5',
                'created_at' => '2023-10-04',
                'category_id' => 4,
            ],
    ];

    public static function getNews()
    {
        return static::$news;
    }

    public static function getNewsById($id)
    {
        return static::$news[$id] ?? null;
    }
    public static function checkNewsId($id):bool
    {
        return isset(static::$news[$id]);
    }

    public static function getNewsByCategoryId($id){
        $filteredNews = [];
        foreach (static::$news as $news) {
            if ($news['category_id'] === $id) {
                $filteredNews[] = $news;
            }
        }
        return $filteredNews;
    }
}
