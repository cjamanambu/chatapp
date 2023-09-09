<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class Legal extends Controller
{
    function getTerms()
    {
        return Inertia::render('Legal/Terms');
    }

    function getPrivacy()
    {
        return Inertia::render('Legal/Privacy');
    }
}
