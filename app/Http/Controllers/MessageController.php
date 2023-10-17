<?php

namespace App\Http\Controllers;

use App\Http\Resources\Message\MessageResource;
use App\Models\Message;
use Inertia\Inertia;
use Inertia\Response;

class MessageController extends Controller
{
    /**
     * Display all messages.
     */
    public function index(): Response
    {
        $messages = Message::whereNull('message_id')->latest()->paginate(25)->withQueryString();

        $messages = MessageResource::collection($messages);

        return Inertia::render('Messages', [
            'messages' => $messages,
            'title' => 'Main',
        ]);
    }
}
