<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\ChatEvent;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function chat()
    {
        return view('chat');
    }
    
    public function send(Request $request){

        // return $request->all();

        $message = $request->message;

        $user = User::find(Auth::id());

        event(new ChatEvent($message, $user));
    }
}
