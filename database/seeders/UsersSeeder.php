<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(
            ['name' => 'Ольга', 'email' => 'webola@gmail.com', 'password' => Hash::make('password')]
        );
        User::factory(99)->create();
    }
}
