<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Models\Event;
use Illuminate\Support\Str;


class SendEventReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-event-reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reminder Of your registered Event';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $event = Event::with('attendees.user')
        ->whereBetween('start_time',[now(),now()->addDay()])
        ->get();
        $eventCount=$event->count();
        $eventLabel=Str::plural('event', $eventCount);  

        $this->info("Found {$eventCount} {$eventLabel}");

        $this->info('Events Started Sooon....');
    }
}
