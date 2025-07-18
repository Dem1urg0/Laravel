<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('news.category.index', ['categories' => Category::getCategories()]);
    }
    public function show($slug){
        $category = Category::getCategoryBySlug($slug);

        if (!$category) {
            return redirect()->route('news.category.index');
        }

        return view('news.category.show', [
            'name' => $category['title'],
            'news' => News::getNewsByCategoryId($category['id'])
        ]);
    }
}
