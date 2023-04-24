<?php

namespace App\Http\Controllers\Frontend\Page;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function show($slug): View
    {
        $page = Page::where('slug', $slug)->first();
        return view('frontend.page.show', [
            'page' => $page,
            'pages' => Page::all(),
            'categories' => Category::all(),
        ]);
    }
}
