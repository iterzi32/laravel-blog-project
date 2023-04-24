<?php

namespace App\Http\Controllers\Backend\Page;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Page\CreateRequest;
use App\Http\Requests\Backend\Page\UpdateRequest;
use App\Models\Page;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageCTRL extends Controller
{
    public function index(): View
    {
        return view('backend.page.index', [
            'pages' => Page::all(),
        ]);
    }

    public function create(): View
    {
        return view('backend.page.create');
    }

    public function store(CreateRequest $request): RedirectResponse
    {
        $page = new Page();
        $page->fill($request->toArray())->save();
        return redirect()->route('page.index');
    }

    public function edit(int $id): View
    {
        return view('backend.page.edit', [
            'page' => Page::findOrFail($id),
        ]);
    }

    public function update(UpdateRequest $request, $id): RedirectResponse
    {
        Page::findOrFail($id)->fill($request->toArray())->update();
        return redirect()->route('page.index');
    }

    public function destroy(int $id): RedirectResponse
    {
        Page::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function trashed(): View
    {
        return view('backend.page.trashed', [
            'pages' => Page::onlyTrashed()->get(),
        ]);
    }

    public function recover(int $id): RedirectResponse
    {
        Page::onlyTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }

    public function delete(int $id): RedirectResponse
    {
        Page::onlyTrashed()->findOrFail($id)->forceDelete();
        return redirect()->back();
    }
}
