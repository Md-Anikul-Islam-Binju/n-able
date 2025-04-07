<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogPageController extends Controller
{
    public function blog()
    {
        $blogs = Blog::latest()->get();
        return inertia('Blog',compact('blogs'));
    }
}
