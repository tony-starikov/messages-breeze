<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class MessageController extends Controller
{
    /**
     * Display all messages.
     */
    public function index(): Response
    {
        return Inertia::render('Messages', [
            'message' => 'Main page!',
            'title' => 'Main',
        ]);
    }
}
