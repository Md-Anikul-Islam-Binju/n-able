<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsPageController extends Controller
{
    public function contact()
    {
        return inertia('Contact');
    }


}
