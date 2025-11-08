<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Resources\EventResource;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return EventResource::collection(Event::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // First, validate input
    $validated = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'description' => ['nullable', 'string'],
        'start_time' => ['required', 'date'],
        'end_time' => ['required', 'date', 'after:start_time'],
    ]);

    // Then, create the event (user_id hardcoded for now)
    $event = Event::create([
        'name' => $validated['name'],
        'description' => $validated['description'] ?? null,
        'start_time' => $validated['start_time'],
        'end_time' => $validated['end_time'],
        'user_id' => 1, // temporarily hardcoded
    ]);

    return response()->json(new EventResource($event), 201);
}


    /**
     * Display the specified resource.
     */
    public function show(Event $event)  
    {
        $event->load('user');

        return new EventResource($event);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $validate =$request->validate([
        'name' => ['required', 'string', 'max:255'],
        'description' => ['nullable', 'string'],
        'start_time' => ['required', 'date'],
        'end_time' => ['required', 'date', 'after:start_time'],

        ]);

        $event->update($validate);
        return response()->json(new EventResource($event),200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)   

    {
        $event->delete();   
        return response()->json([
            'message'=> 'Event Deleted Succesfully',
        ],204);
    }
}
