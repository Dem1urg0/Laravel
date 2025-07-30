<?php

namespace App\View\Components\Form;

use App\Models\News;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NewsSelect extends Component
{
    private News $newsModel;

    public function __construct(
        News $newsModel,
        public string $name = 'news_id',
        public string $label = 'News',
        public string $classes = '',
        public string $title = '',
    )
    {
        $this->newsModel = $newsModel;
    }

    public function render(): View|Closure|string
    {
        $news = $this->newsModel->getAll();
        return view('components.form.news-select', ['news' => $news]);
    }
}
