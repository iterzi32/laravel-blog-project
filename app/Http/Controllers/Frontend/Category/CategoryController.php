<?php

namespace App\Http\Controllers\Frontend\Category;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function show($categorySlug): View
    {
        $category = Category::where('slug', $categorySlug)->first() ?? abort(404, 'Kategori Bulunamadı');
        $articles = Article::where('category_id', $category->id)->orderBy('created_at','DESC')->get();
        return view('frontend.category.show', [
           'categories' => Category::all(),
           'pages' => Page::all(),
           'category' => $category,
           'articles' => $articles,
        ]);
    }
}
