<?php

namespace App\Http\Mappers;

use App\Http\Requests\CreateUserRequest;

class RegisterMapper
{
    public static function CreateDataFromRequest(CreateUserRequest $request)
    {
        return [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];
    }
}
