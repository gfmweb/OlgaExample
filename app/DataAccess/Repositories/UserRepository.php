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
        return User::find($id);
    }

    public function getByEmail(string $email): User
    {
       return User::where('email', $email)->first();
    }

    public function update(int $id, array $data): User
    {
       $user = $this->getById($id);
       foreach ($data as $key=>$value){
           $user->$key = $value;
       }
       $user->save();
       return $user;
    }

    public function create(array $data): User
    {
       return  User::create($data);
    }

    public function destroy(int $id): bool
    {
        return User::destroy($id);
    }
}
