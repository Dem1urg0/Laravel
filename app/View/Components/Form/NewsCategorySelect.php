<?php

namespace App\View\Components\Form;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NewsCategorySelect extends Component
{
    private Category $categoryModel;
    /**
     * Create a new component instance.
     */
    public function __construct(
        Category $categoryModel,
        public string $name = 'category_id',
        public string $label = 'Категория',
        public string $classes = '',
    )
    {
        $this->categoryModel = $categoryModel;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public
    function render(): View|Closure|string
    {
        $categories = $this->categoryModel->getAll();
        return view('components.form.news-category-select', ['categories' => $categories]);
    }
}
