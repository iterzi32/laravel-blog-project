<?php

namespace App\Http\Controllers\Backend\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactCTRL extends Controller
{
    public function index(): View
    {
        return view('backend.contact.index', [
            'messages' => Contact::all(),
        ]);
    }

    public function destroy(int $id): RedirectResponse
    {
        Contact::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function trashed(): View
    {
        return view('backend.contact.trashed', [
            'messages' => Contact::onlyTrashed()->get(),
        ]);
    }

    public function recover(int $id): RedirectResponse
    {
        Contact::onlyTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }

    public function delete(int $id): RedirectResponse
    {
        Contact::onlyTrashed()->findOrFail($id)->forceDelete();
        return redirect()->back();
    }
}
