<?php

namespace App\Http\Controllers;

use App\Models\ContactInformation;
use Illuminate\Http\Request;

class ContactUsPageController extends Controller
{
    public function contact()
    {
        return inertia('Contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'nullable|string|max:500',
        ]);

        // Store the contact information in the database
        ContactInformation::create($request->all());

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }


}
