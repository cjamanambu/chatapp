<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;


class ValidationService
{
    /**
     * @throws ValidationException
     */
    static function validateSignUp(Request $request): array
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

        return $validator->validated();
    }

    /**
     * @throws ValidationException
     */
    static function validateSignIn(Request $request): array
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            logger($validator->errors());
            throw new ValidationException($validator);
        }

        return $validator->validated();
    }
}
