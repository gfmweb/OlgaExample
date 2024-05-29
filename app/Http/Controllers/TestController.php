<?php

namespace App\Http\Controllers;
use App\DataAccess\Interfaces\UserRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(UserRepository $userRepository,  int $id):JsonResponse
    {
        return response()->json($userRepository->getById($id));
        //
    }
}
