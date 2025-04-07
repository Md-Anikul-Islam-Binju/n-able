<?php

namespace App\Http\Controllers;

use App\Models\NewsEvent;
use Illuminate\Http\Request;

class NewsEventPageController extends Controller
{
    public function newsEvent()
    {
        $newsEvents = NewsEvent::latest()->get();
        return inertia('NewsEvent',compact('newsEvents'));
    }

    public function newsEventDetails($id)
    {
        $newsEvent = NewsEvent::findOrFail($id);
        return inertia('NewsEventDetails',compact('newsEvent'));
    }
}
