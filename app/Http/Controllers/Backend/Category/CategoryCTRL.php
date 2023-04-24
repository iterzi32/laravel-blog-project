<?php

namespace App\Http\Controllers\Backend\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Category\CreateRequest;
use App\Http\Requests\Backend\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CategoryCTRL extends Controller
{
    public function index(): View
    {
        return view('backend.category.index', [
            'categories' => Category::all(),
        ]);
    }

    public function create(): View
    {
        return view('backend.category.create');
    }

    public function store(CreateRequest $request): RedirectResponse
    {
        $category = new Category();
        $category->fill($request->toArray())->save();
        return redirect()->route('category.index');
    }

    public function edit(int $id): View
    {
        return view('backend.category.edit', [
            'category' => Category::findOrFail($id),
        ]);
    }

    public function update(UpdateRequest $request, int $id): RedirectResponse
    {
        Category::findOrFail($id)->fill($request->toArray())->update();
        return redirect()->route('category.index');
    }

    public function destroy(int $id): RedirectResponse
    {
        Category::findOrFail($id)->delete();
        return redirect()->route('category.index');
    }

    public function trashed(): View
    {
        return view('backend.category.trashed', [
            'categories' => Category::onlyTrashed()->get(),
        ]);
    }

    public function recover(int $id): RedirectResponse
    {
        Category::onlyTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }

    public function delete(int $id): RedirectResponse
    {
        Category::onlyTrashed()->findOrFail($id)->forceDelete();
        return redirect()->back();
    }
}
