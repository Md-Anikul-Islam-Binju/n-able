<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\NewsEvent;
use Illuminate\Http\Request;

class NewsEventController extends Controller
{
    public function index()
    {
        $event = NewsEvent::latest()->get();
        return view('admin.pages.event.index', compact('event'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required',
                'details' => 'required',
                'event_date' => 'required',
            ]);

            $event = new NewsEvent();
            $event->title = $request->title;
            $event->details = $request->details;
            $event->event_date = $request->event_date;
            $event->event_time = $request->event_time;
            if ($request->image) {
                $file = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images/event'), $file);
                $event->image = $file;
            }
            $event->save();

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
                'details' => 'required',
                'event_date' => 'required',
                'event_time' => 'required',

            ]);
            $event = NewsEvent::find($id);
            $event->title = $request->title;
            $event->details = $request->details;
            $event->event_date = $request->event_date;
            $event->event_time = $request->event_time;
            $event->status = $request->status;
            if ($request->image) {
                $file = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images/event'), $file);
                $event->image = $file;
            }
            $event->save();
            toastr()->success('Data has been Updated successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $event = NewsEvent::find($id);
            $event->delete();
            toastr()->success('Data has been Deleted successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}
