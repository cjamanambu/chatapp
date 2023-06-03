<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class Legal extends Controller
{
    function terms(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages.legal.terms');
    }

    function privacy(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages.legal.privacy');
    }
}
