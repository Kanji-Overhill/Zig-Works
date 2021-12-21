<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail; 
use App\Mail\EventInvitation;
use App\Models\Eventes; 
use Illuminate\Http\Request;


class EventsController extends Controller
{
    public function getAllEvents(Request $request)
    {
        $events = Eventes::all();
        return view('events',['events' => $events]);
    }
    public function orderEvents(Request $request)
    {
        $events = Eventes::orderBy('date', $request->order)->get();
        return response()->json(['events' => $events]);
    }
    public function searchEvents(Request $request)
    {
        $events = Eventes::where('name', 'like', '%'.$request->search.'%')->get();
        return  response()->json(['events' => $events]);
    }
    public function sendMail(Request $request)
    {
        Mail::to($request->email)->send(new EventInvitation);
    }
}
