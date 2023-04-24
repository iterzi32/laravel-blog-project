<?php

namespace App\Observers;

use App\Models\Article;
use Illuminate\Support\Str;

class ArticleObserver
{
    public function saving(Article $article): void
    {
        $article->title = Str::title($article->getAttribute('title'));
        $article->slug = Str::slug($article->getAttribute('slug'));
    }

    public function updating(Article $article): void
    {
        $article->title = Str::title($article->getAttribute('title'));
        $article->slug = Str::slug($article->getAttribute('slug'));
    }
}
