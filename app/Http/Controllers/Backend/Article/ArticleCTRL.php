<?php

namespace App\Http\Controllers\Backend\Article;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Article\CreateRequest;
use App\Http\Requests\Backend\Article\UpdateRequest;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ArticleCTRL extends Controller
{
    public function index(): View
    {
        return view('backend.article.index', [
            'articles' => Article::all(),
        ]);
    }

    public function create(): View
    {
        return view('backend.article.create', [
            'categories' => Category::all(),
        ]);
    }

    public function store(CreateRequest $request): RedirectResponse
    {
        $article = new Article();
        $article->fill($request->toArray())->save();
        return redirect()->route('article.index');
    }

    public function edit(int $id): View
    {
        return view('backend.article.edit', [
            'article' => Article::findOrFail($id),
            'categories' => Category::all(),
        ]);
    }

    public function update(UpdateRequest $request, int $id): RedirectResponse
    {
        Article::findOrFail($id)->fill($request->toArray())->update();
        return redirect()->route('article.index');
    }

    public function destroy(int $id): RedirectResponse
    {
        Article::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function trashed(): View
    {
        return view('backend.article.trashed', [
            'articles' => Article::onlyTrashed()->get(),
        ]);
    }

    public function recover(int $id): RedirectResponse
    {
        Article::onlyTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }

    public function delete(int $id): RedirectResponse
    {
        Article::onlyTrashed()->findOrFail($id)->forceDelete();
        return redirect()->back();
    }
}
