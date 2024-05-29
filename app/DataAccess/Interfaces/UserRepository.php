<?php

namespace App\DataAccess\Interfaces;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

interface UserRepository
{
    public function showAll():Collection;
    public function getById(int $id):User;
    public function getByEmail(int $id):User;

    public function update(array $data):User;
    public function create(array $data):User;

    public function destroy(int $id):bool;

}
