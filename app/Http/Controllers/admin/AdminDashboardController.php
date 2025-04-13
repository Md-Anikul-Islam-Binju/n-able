<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ContactInformation;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function unauthorized()
    {
        return view('admin.unauthorized');
    }

    public function message()
    {
        $message =ContactInformation::latest()->get();
        return view('admin.pages.contact.index', compact('message'));
    }

    public function messageDestroy($id)
    {
        try {
            $message =ContactInformation::find($id);
            $message->delete();
            toastr()->success('Data has been Deleted successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

}
