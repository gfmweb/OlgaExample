<?php

namespace App\Http\Controllers;

use App\Http\Mappers\LoginMapper;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentals = LoginMapper::makeFromRequest($request);
        return $credentals;
    }
}
