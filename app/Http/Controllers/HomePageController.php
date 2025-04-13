<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\NewsEvent;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function frontend()
    {
        $newsEvents = NewsEvent::latest()->get();
        $companys = Customer::latest()->get();
        return inertia('Index',compact('newsEvents', 'companys'));
    }

    public function tnx()
    {
        return inertia('ThankYou');
    }

}
