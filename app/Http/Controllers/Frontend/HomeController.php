<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $articles = Article::orderBy('created_at', 'DESC')->get();
        return view('frontend.index', [
            'articles' => $articles,
            'categories' => Category::all(),
            'pages' => Page::all(),
        ]);
    }
}
