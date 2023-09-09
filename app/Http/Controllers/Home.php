<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class Home extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Dashboard');
    }
}
