<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsEventPageController extends Controller
{
    public function newsEvent()
    {
        return inertia('NewsEvent');
    }
}
