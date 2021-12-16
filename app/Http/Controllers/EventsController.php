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
        return  response()->json(['events' => $events]);
    }
    public function sendMail(Request $request)
    {
        $email_message = "Hola tu amigo te ha recomendado este evento de Zig Works \n";

        $email_from = "ingluisfelipe07@gmail.com";
        $headers = 'From: '.$email_from."\r\n" .

        'Reply-To: '.$email_from."\r\n" .

        'X-Mailer: PHP/' . phpversion();

        mail("ingluisfelipe07@gmail.com", "Te han compartido", $email_message, $headers);
    }
}
