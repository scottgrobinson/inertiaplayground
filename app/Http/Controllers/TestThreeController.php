<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class TestThreeController extends Controller
{
    public function init()
    {
        return Inertia::render('testthree/init');
    }
}
