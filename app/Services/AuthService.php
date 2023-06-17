<?php

namespace App\Services;

use App\Interfaces\AuthServiceInterface;
use App\Jobs\VerifyEmailJob;
use App\Models\User;
use App\Models\UserVerify;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        MailService::sendVerificationMail($user, $token);

        Auth::login($user);
    }

    public function resendVerificationEmail(): void
    {
        $user = Auth::user();
        $token = Str::random(64);
        UserVerify::query()->where('user_id', $user->id)->update([
            'token' => $token
        ]);

        MailService::sendVerificationMail($user, $token);
        noty()->addSuccess('The verification email has been successfully resent. Please check your email!');
    }

    public function verifyEmail($token): void
    {
        $userVerify = UserVerify::query()->where('token', $token)->first();
        if (!$userVerify) {
            throw new ModelNotFoundException('Invalid email verification token');
        }

        $user = User::query()->find($userVerify->user_id);
        if (!$user) {
            throw new ModelNotFoundException('Invalid email verification token');
        }

        $user->email_verified_at = now();
        $user->save();
        
        noty()->addSuccess('Your email has been successfully verified!');
    }
}
