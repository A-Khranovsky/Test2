<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function AddMessage(Request $request)
    {
        Message::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'message' => $request->get('message'),
            ]);
    }
}
