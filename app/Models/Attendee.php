<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    /** @use HasFactory<\Database\Factories\AttendeeFactory> */
    use HasFactory;

    protected $fillable = [ 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function events(){
        return $this->belongsTo(Event::class);
    }
}
