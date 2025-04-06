<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPageController extends Controller
{
    public function blog()
    {
        return inertia('Blog');
    }
}
