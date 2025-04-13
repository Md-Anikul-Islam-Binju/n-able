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
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'nullable|email|max:255',
                'phone' => 'nullable|string|max:20',
                'message' => 'nullable|string|max:500',
            ]);

            $contactInformation = new ContactInformation();
            $contactInformation->name = $request->name;
            $contactInformation->email = $request->email;
            $contactInformation->phone = $request->phone;
            $contactInformation->message = $request->message;
            $contactInformation->save();

            return redirect()->back()->with('success', 'Your message has been sent successfully!');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }


}
