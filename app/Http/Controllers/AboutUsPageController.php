<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class AboutUsPageController extends Controller
{
    public function company()
    {
        return inertia('Company');
    }

    public function team()
    {
        $teams = Team::latest()->get();
        return inertia('Team',compact('teams'));
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
