<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EventResource;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function event(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $events = Event::all();
        return EventResource::collection($events);
    }
}
