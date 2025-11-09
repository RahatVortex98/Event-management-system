<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Attendee;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Resources\AttendeeResource;
class AttendeeController extends Controller
{
    public function __construct(){
        $this->middleware('auth:sanctum')->except(['index','show']);
    }
   public function index(Event $event)
{
    $attendees = $event->attendees()->latest()->paginate();

    return AttendeeResource::collection($attendees);
}


    
    

   
    public function store(Request $request,Event $event)
    {
        $attendee = $event->attendees()->create([
            'user_id'=>1,
        ]);
        return new AttendeeResource($attendee); 
        
    }

    /**
     * Display the specified resource.
     */
   public function show(Event $event, Attendee $attendee)
{
    return new AttendeeResource($attendee);
}



    public function destroy( Event $event,Attendee $attendee,)   
    {
        $this->authorize('delete-attendee', [$event, $attendee]);
        $attendee->delete(); 
        return response(status:204); 
    }
}
