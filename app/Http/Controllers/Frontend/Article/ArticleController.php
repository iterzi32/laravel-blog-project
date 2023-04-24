<?php

namespace App\Http\Controllers\Frontend\Article;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function show($categorySlug, $articleSlug): View
    {
        $category = Category::where('slug', $categorySlug)->first() ?? abort(404, 'Kategori Bulunamadı');
        $article = Article::where('slug', $articleSlug)->where('category_id', $category->id)->first() ?? abort(404, 'Makale Bulunamadı');
        return view('frontend.article.show', [
            'categories' =>  Category::all(),
            'pages' => Page::all(),
            'article' => $article,
        ]);

    }
}
