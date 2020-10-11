<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class TestOneController extends Controller
{
    public function init()
    {
        return Inertia::render('testone/init');
    }
}
