<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
use App\Models\Eventes;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function getAllEvents(Request $request)
    {
        $events = Eventes::all();
        return view('events',['events' => $events]);
    }
    public function searchEvents(Request $request)
    {

        $events = Eventes::where('name', 'like', '%'.$request->search.'%')->get();
        return view('events',['events' => $events]);
    }
}
