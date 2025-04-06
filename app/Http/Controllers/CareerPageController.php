<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerPageController extends Controller
{
    public function whyWork()
    {
        return inertia('WhyWork');
    }

    public function vacancies()
    {
        return inertia('Vacancies');
    }

    public function resume()
    {
        return inertia('Resume');
    }
}
