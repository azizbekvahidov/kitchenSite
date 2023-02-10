<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContactRequest;
use App\Models\Contact;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function edit(): View
    {
        $contacts = Contact::query()->first();
        return view('admin.contacts', compact('contacts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ContactRequest  $request
     * @return RedirectResponse
     */
    public function update(ContactRequest $request): RedirectResponse
    {

        $validated = $request->validated();
        $contact = Contact::query()->first();
        if ($contact) {
            $contact->update($validated);
        }else {
            $contact = Contact::query()->create($validated);
        }

        return redirect(route('dashboard.contact.edit'));

    }
}
