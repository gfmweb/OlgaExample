<?php

namespace App\DataAccess\DTO;

use App\Models\User;

class UserDTO
{
    public int $id;
    public string $name;
    public string $email;
    public  string $pats;
    private function __construct(array $data, array $closes)
    {
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->email = $data['email'];
    }

    public static function makeFromModel(User $user, Closes $closes)
    {
        return new self($user->toArray());
    }
}
