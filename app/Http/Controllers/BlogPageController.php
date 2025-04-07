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

    public function blogDetails($id)
    {
        $blogs = Blog::latest()->get();
        $blog = Blog::findOrFail($id);
        return inertia('BlogDetails',compact('blog','blogs'));
    }

}
