<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class DashboardController extends Controller
{
    public function init()
    {
        return Inertia::render('dashboard/init');
    }
}
