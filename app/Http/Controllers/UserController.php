<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\UserRequest;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class UserController extends Controller
{
    public function edit(): View|Factory|Application
    {
        return view('admin.user');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UserRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function update(UserRequest $request): Redirector|RedirectResponse|Application
    {
        $validated = $request->validated();
        $contact = User::query()->where('login', '=', 'admin')->first();
        if ($contact) {
            $contact->update([
                'password' => bcrypt($validated['password'])
            ]);
        } else {
            User::query()->create([
                'login' => 'admin',
                'password' => bcrypt($validated['password']),
            ]);
        }

        auth()->logout();

        return redirect(route('dashboard.profile.edit'));
    }
}
