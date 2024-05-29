<?php

namespace App\Http\Controllers;
use App\DataAccess\DTO\UserDTO;
use App\DataAccess\Interfaces\UserRepository;
use App\Http\Mappers\RegisterMapper;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Blogic\User\UserHandle;
class TestController extends Controller
{
    public function index(UserRepository $userRepository,CreateUserRequest $request):JsonResponse
    {

        return response()->json(
            UserHandle::CreateUser($userRepository, RegisterMapper::CreateDataFromRequest($request))
        );
    }
}
