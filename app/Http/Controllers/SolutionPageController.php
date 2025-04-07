<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolutionPageController extends Controller
{
    public function infrastructure()
    {
        return inertia('Infrastructure');
    }

    public function applications()
    {
        return inertia('Applications');
    }

    public function tech()
    {
        return inertia('Tech');
    }
    public function managedOperations()
    {
        return inertia('ManagedOperations');
    }
    public function technicalSupport()
    {
        return inertia('TechnicalSupport');
    }
}
