<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::orderBy('id', 'desc')->get();
        return view('messages', ['messages' => $messages]);
    }

    public function AddMessage(Request $request)
    {
        Message::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'message' => $request->get('message'),
        ]);
        return redirect()->route('home');
    }
}
