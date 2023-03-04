<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Event\StoreRequest;
use App\Http\Requests\Event\UpdateRequest;
use App\Models\Event;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $events = Event::all();
        return view('admin.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(StoreRequest $request): Redirector|RedirectResponse|Application
    {
        $validated = $request->validated();
        $validated['image_path'] = $validated['image']->store('images','public');
        unset($validated['image']);
        Event::query()->create($validated);
        return redirect(route('dashboard.event.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param Event $event
     * @return Application|Factory|View
     */
    public function show(Event $event): Factory|View|Application
    {
        return view('admin.events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Event $event
     * @return Application|Factory|View
     */
    public function edit(Event $event): View|Factory|Application
    {
        return view('admin.events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return Application|Redirector|RedirectResponse
     */
    public function update(UpdateRequest $request, Event $event): Redirector|RedirectResponse|Application
    {
            $validated = $request->validated();

            if (isset($validated['image']))
            {
                Storage::disk('public')->delete($event->image_path);
                $validated['image_path'] = $request->file('image')->store('images', 'public');
                unset($validated['image']);
            }
            $event->update($validated);

            return redirect(route('dashboard.event.show', $event->id));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Event $event
     * @return Application|RedirectResponse|Redirector
     */
    public function delete(Event $event): Redirector|RedirectResponse|Application
    {
        Storage::disk('public')->delete($event->image_path);
        $event->delete();
        return redirect(route('dashboard.event.index'));
    }
}
