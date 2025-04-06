<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blog::all();
        return view('admin.pages.blog.index', compact('blog'));
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required',
                'image' => 'required',
            ]);
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/blog'), $file);

            $blog = new Blog();
            $blog->title = $request->title;
            $blog->details = $request->details;
            $blog->date = $request->date;
            $blog->image = $file;
            $blog->save();
            toastr()->success('Data has been Added successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'title' => 'required',
            ]);
            $blog = Blog::find($id);
            $blog->title = $request->title;
            $blog->details = $request->details;
            $blog->status = $request->status;
            if ($request->image) {
                $file = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images/blog'), $file);
                $blog->image = $file;
            }
            $blog->save();
            toastr()->success('Data has been Updated successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $blog = Blog::find($id);
            $filePath = public_path('images/blog/' . $blog->image);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
            $blog->delete();
            toastr()->success('Data has been Deleted successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}
