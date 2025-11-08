<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all(); // get all users

        for ($i = 0; $i < 200; $i++) {
            $user = $users->random(); // pick a random user each time

            Event::factory()->create([
                'user_id' => $user->id, // assign that user's id to the event
            ]);
        }
    }
}
