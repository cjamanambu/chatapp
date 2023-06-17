<?php

namespace App\Services;

use App\Interfaces\AuthServiceInterface;
use App\Models\User;
use App\Models\UserVerify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class AuthService implements AuthServiceInterface
{
    public function __construct(readonly MailService $mailService)
    {
    }

    /**
     * @throws ValidationException
     */
    public function registerNewUser(Request $request): void
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:8',
        ]);
        if ($validator->fails()) {
            logger($validator->errors());
            throw new ValidationException($validator);
        }

        $newUser = $validator->validated();
        $user = User::query()->create($newUser);

        $token = Str::random(64);
        UserVerify::query()->create([
            'user_id' => $user->id,
            'token' => $token
        ]);

        $this->mailService::sendVerificationMail($user, $token);

        logger($user);
    }
}
