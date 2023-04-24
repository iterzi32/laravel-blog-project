<?php

namespace App\Http\Controllers\Frontend\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Contact\ContactRequest;
use App\Models\Contact;
use App\Models\Page;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('frontend.contact.index', [
            'pages' => Page::all(),
        ]);
    }

    public function store(ContactRequest $request): RedirectResponse
    {
        $contact = new Contact();
        $contact->fill($request->toArray())->save();
        return redirect()->back()->with('success', 'Mesajınız İletildi');
    }
}
