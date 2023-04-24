<?php

namespace App\Observers;

use App\Models\Category;
use Illuminate\Support\Str;

class CategoryObserver
{
    public function saving(Category $category): void
    {
        $category->title = Str::title($category->getAttribute('title'));
        $category->slug = Str::slug($category->getAttribute('slug'));
    }

    public function updating(Category $category): void
    {
        $category->title = Str::title($category->getAttribute('title'));
        $category->slug = Str::slug($category->getAttribute('slug'));
    }
}
