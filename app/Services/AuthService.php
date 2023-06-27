<?php

namespace App\Services;

use App\Interfaces\AuthServiceInterface;
use App\Jobs\VerifyEmailJob;
use App\Models\User;
use App\Models\UserVerify;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Laravel\Socialite\Facades\Socialite;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AuthService implements AuthServiceInterface
{
    public function __construct(readonly MailService $mailService)
    {
    }

    /**
     * @throws ValidationException
     */
    public function signUp(Request $request): void
    {
        $newUser = ValidationService::validateSignUp($request);
        $user = User::query()->create($newUser);

        $token = Str::random(64);
        UserVerify::query()->create([
            'user_id' => $user->id,
            'token' => $token
        ]);

        MailService::sendVerificationMail($user, $token);

        noty()->addSuccess('You signed up successfully. Please check your email to verify your account!');

        Auth::login($user);
    }

    /**
     * @throws ValidationException
     */
    public function signIn(Request $request): void
    {
        $user = ValidationService::validateSignIn($request);
        if (!Auth::attempt($user, $request->remember)) {
            throw ValidationException::withMessages([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }

        noty()->addSuccess('You signed in successfully. Good to have you back!');
    }

    public function resendVerificationEmail(): void
    {
        $user = Auth::user();
        $token = Str::random(64);
        UserVerify::query()->where('user_id', $user->id)->updateOrCreate([
            'token' => $token,
            'user_id' => $user->id
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

        $userVerify->delete();

        noty()->addSuccess('Your email has been successfully verified!');
    }

    public function signOut(Request $request): void
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        noty()->addSuccess('You have been successfully logged out!');
    }

    public function redirectToGoogle(): RedirectResponse|\Illuminate\Http\RedirectResponse
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * @throws ValidationException
     */
    public function handleGoogleCallback(): void
    {
        $user = Socialite::driver('google')->user();
        $findUser = User::query()->where('social_id', $user->id)->first();
        if ($findUser) {
            Auth::login($findUser);
        } else {
            $existingEmail = User::query()->where('email', $user->email)->first();
            if ($existingEmail)
                throw ValidationException::withMessages(['email' => 'An account already exists with that email. Sign in with those credentials.']);

            $names = explode(' ', $user->name);
            $newUser = User::query()->create([
                'username' => $user->nickname ?? strtolower(join("_", $names) . "_" . $user->id),
                'firstname' => $names[0] ?? null,
                'lastname' => $names[count($names) - 1] ?? null,
                'email' => $user->email,
                'social_id' => $user->id,
                'social_type' => 'google',
                'password' => bcrypt(Str::random(64)),
                'email_verified_at' => now(),
                'avatar' => $user->avatar ?? null
            ]);
            Auth::login($newUser);
        }
        noty()->addSuccess('You signed in successfully. Good to have you back!');
    }

    /**
     * @throws ValidationException
     */
    public function updatePassword(Request $request): void
    {
        $passwordData = ValidationService::validateUpdatePassword($request);
        $user = Auth::user();
        $userData = User::query()->find($user->id);
        $passwordIsValid = password_verify($passwordData['old_password'], $userData->password);
        if (!$passwordIsValid)
            throw ValidationException::withMessages([
                'old_password' => 'The old password you provided does not match our records.',
            ]);

        $userData->password = bcrypt($passwordData['password']);
        $userData->save();

        noty()->addSuccess('You updated your password successfully!');
    }
}
