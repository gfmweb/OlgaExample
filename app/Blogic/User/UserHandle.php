<?php

namespace App\Blogic\User;

use App\DataAccess\DTO\UserDTO;
use App\DataAccess\Interfaces\UserRepository;

class UserHandle
{
    public static function CreateUser(UserRepository $repository, array $data)
    {
        return UserDTO::makeFromModel($repository->create($data));
    }
}
