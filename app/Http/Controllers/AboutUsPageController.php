<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsPageController extends Controller
{
    public function company()
    {
        return inertia('Company');
    }

    public function team()
    {
        return inertia('Team');
    }

    public function awards()
    {
        return inertia('Awards');
    }

    public function industries()
    {
        return inertia('Industries');
    }

    public function partners()
    {
        return inertia('Partners');
    }
}
