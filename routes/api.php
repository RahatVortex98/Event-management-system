<?php

use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\AttendeeController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Main event routes
Route::apiResource('events', EventController::class);

// Nested attendee routes (if you have them)
Route::apiResource('events.attendees', AttendeeController::class)
    ->scoped()->except(['update']);


Route::post('/login', [AuthController::class, 'login']);