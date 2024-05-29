<?php

namespace App\DataAccess\DTO;

class UserDTO
{
    public int $id;
    public string $name;
    public string $email;

    private function __construct(array $data)
    {
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->email = $data['emial'];
    }

    public static function makeFromModel(User $user)
    {
        return new self($user->toArray());
    }
}
