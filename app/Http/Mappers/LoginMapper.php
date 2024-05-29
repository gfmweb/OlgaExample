<?php

namespace App\Http\Mappers;

use App\Http\Requests\LoginRequest;
use http\Env\Request;

class LoginMapper
{
        public static function makeFromRequest(LoginRequest $request)
        {
            return $request->all();
        }
}
