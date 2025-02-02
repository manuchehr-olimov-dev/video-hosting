<?php

namespace Database\Seeders;

use App\Enums\Roles;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::query()->create([
            "name" => "manuchehr",
            "email" => "manuchehr@gmail.com",
            "password" => Hash::make("12345678"),
        ]);

        $user->assignRole(Roles::ADMIN->value);

    }
}
