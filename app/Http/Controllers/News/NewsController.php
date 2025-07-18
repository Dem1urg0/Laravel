<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index', ['news' => News::getNews()]);
    }

    public function show($id)
    {
        if (!News::checkNewsId($id)) {
            return redirect()->route('news.all');
        }
        return view('news.show', ['id' => $id]);
    }

    public function create()
    {
        return view('news.create');
    }
}
