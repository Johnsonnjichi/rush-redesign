<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;

class EventController extends Controller
{
    /**
     * Display a listing of upcoming events
     */
    public function index()
    {
        $events = Event::where('date', '>=', Carbon::today())
                     ->orderBy('date')
                     ->paginate(6);
        
        return view('events.index', compact('events'));
    }
}