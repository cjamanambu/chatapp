<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class Auth extends Controller
{
    function login(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages.auth.login');
    }

    function register(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages.auth.register');
    }

    function forgotPassword(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages.auth.forgot-password');
    }

    function signIn()
    {

    }

    function signUp()
    {

    }
}
