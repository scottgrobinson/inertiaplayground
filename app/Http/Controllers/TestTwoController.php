<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class TestTwoController extends Controller
{
    public function init()
    {
        return Inertia::render('testtwo/init');
    }
}
