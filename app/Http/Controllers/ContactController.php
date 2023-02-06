<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\ContactRequest;
use App\Models\Contact;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ContactController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function edit(): View|Factory|Application
    {
        $contacts = Contact::query()->first();
        return view('admin.contacts', compact('contacts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ContactRequest $request): \Illuminate\Http\RedirectResponse
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
