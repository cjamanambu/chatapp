<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface UserServiceInterface
{
    public function inviteUser(Request $request): void;
}
