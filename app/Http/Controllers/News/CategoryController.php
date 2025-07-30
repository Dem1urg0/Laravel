<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private Category $categoryModel;
    private News $newsModel;

    /**
     * CategoryController constructor.
     *
     * @param Category $categoryModel
     * @param News $newsModel
     */
    public function __construct(
        Category $categoryModel,
        News     $newsModel
    )
    {
        $this->categoryModel = $categoryModel;
        $this->newsModel = $newsModel;
    }

    public function index()
    {
        return view('news.category.index', ['categories' => $this->categoryModel->getAll()]);
    }

    public function show($slug)
    {
        $category = $this->categoryModel->getCategoryBySlug($slug);

        if (!$category) {
            return redirect()->route('news.category.index');
        }

        return view('news.category.show', [
            'name' => $category->title,
            'news' => $this->newsModel->getNewsByCategoryId($category->id)
        ]);
    }
}
