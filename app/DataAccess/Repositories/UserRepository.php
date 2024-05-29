<?php

namespace App\DataAccess\Repositories;
use App\DataAccess\Interfaces\UserRepository as interfaceRepository;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserRepository implements interfaceRepository
{


    public function showAll(): Collection
    {
        return User::all();
    }

    public function getById(int $id): User
    {
        // TODO: Implement getById() method.
    }

    public function getByEmail(string $email): User
    {
        // TODO: Implement getByEmail() method.
    }

    public function update(int $id, array $data): User
    {
        // TODO: Implement update() method.
    }

    public function create(array $data): User
    {
        // TODO: Implement create() method.
    }

    public function destroy(int $id): bool
    {
        // TODO: Implement destroy() method.
    }
}
